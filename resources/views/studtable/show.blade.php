<x-app-layout>
    <div
        class="flex flex-col justify-center mt-32 bg-white shadow-lg md:rounded-lg md:mx-20 lg:mt-10 lg:mx-36 bg-opacity-90">
        <div class="flex items-center justify-center border-b border-gray-900 shadow-md">
            <div class="flex items-center justify-between w-full m-6">
                <span class="text-xl font-bold text-gray-900">Counselor Notes</span>
                <button onclick="toggleElement('create')"
                    class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition bg-white border border-gray-500 rounded-lg hover:text-gray-900 hover:bg-yellow-50 hover:border-yellow-100 active:bg-yellow-100 focus:outline-none focus:border-yellow-200 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                    <span>Add Note</span>
                    <i class="far fa-sticky-note"></i>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-center p-2">
            <div class="flex flex-col items-center justify-center p-2 px-6 overflow-y-auto md:w-9/12">
                <div class="grid w-full grid-cols-1 gap-2 md:grid-cols-4 md:gap-4">
                    @foreach ($notes as $note)
                        <div
                            class="flex flex-col items-center justify-center p-2  border border-gray-600 rounded-lg {{$note->severity == 0 ? 'bg-gray-600' : ($note->severity == 1 ? 'bg-blue-500' : ($note->severity == 2 ? 'bg-green-400' : ($note->severity == 3 ? 'bg-yellow-300' : ($note->severity == 4 ? 'bg-yellow-600' : 'bg-red-600'))))}}">
                            <div class="flex items-center justify-between w-full border-b border-white">
                                <span class="text-sm font-semibold tracking-widest text-white">
                                    {{ $note->updated_at }}
                                </span>
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="text-black focus:outline-none">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div>
                                        <button onClick="toggleElement('show{{ $note->id }}')"
                                            class="text-black hover:text-gray-700 focus:outline-none">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <h4 class="flex items-center justify-center w-full mt-4 font-bold text-gray-900">
                                {{ $note->title }}
                            </h4>
                            <div class="flex items-center justify-center w-full mt-4">
                                <span class="text-left text-gray-900">
                                    {{ $note->description }}
                                </span>
                            </div>
                        </div>
                        <div id="show{{ $note->id }}" class="fixed inset-0 z-10 hidden overflow-y-auto"
                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div
                                class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                                    aria-hidden="true"></div>
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                    aria-hidden="true">&#8203;</span>
                                <div
                                    class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                        <div class="mb-6 space-x-10 sm:flex sm:items-start">
                                            <button onclick="toggleElement('show{{ $note->id }}')"
                                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto sm:mx-0 sm:h-10 sm:w-10 focus:outline-none">
                                                <!-- Heroicon name: outline/exclamation -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center justify-center">
                                            <h2 class="text-xl font-bold text-gray-900">Edit Information</h2>
                                        </div>
                                        <div>
                                            <x-jet-validation-errors class="mb-4" />
                                            <form method="POST" action="{{ route('notes.update', $note->id) }}">
                                                @csrf
                                                @method('patch')
                                                <div class="w-full p-6 mt-4 border-4 border-yellow-400 rounded-lg">

                                                    <div class="py-2 ">
                                                        <x-jet-label for="title" value="{{ __('Subject') }}" />
                                                        <x-jet-input id="title"
                                                            class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                                            type="text" name="title" value="{{ $note->title }}"
                                                            required />
                                                    </div>

                                                    <div class="py-2 ">
                                                        <x-jet-label for="description" value="{{ __('Note') }}" />
                                                        <textarea id="description"
                                                            class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                                            name="description"
                                                            required>{{ $note->description }}</textarea>
                                                    </div>

                                                    <div class="py-2 ">
                                                        <x-jet-label for="severity" value="{{ __('Severity') }}" />
                                                        <select id="severity"
                                                            class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                                            name="severity" required>
                                                            <option value="1">Open</option>
                                                            <option value="2">On-Going</option>
                                                            <option value="3">High</option>
                                                            <option value="4">Urgent</option>
                                                            <option value="5">Critical</option>
                                                            <option value="0">Close</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="flex items-center justify-center mt-4">
                                                        <button
                                                            class="inline-flex items-center justify-center w-full px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-white uppercase transition bg-red-500 border border-red-500 rounded-lg hover:bg-red-800 hover:border-red-400 active:bg-black focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                                                            {{ __('UPDATE') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="create" class="fixed inset-0 z-10 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="mb-6 space-x-10 sm:flex sm:items-start">
                        <button onclick="toggleElement('create')"
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto sm:mx-0 sm:h-10 sm:w-10 focus:outline-none">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-900" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-center">
                        <h2 class="text-xl font-bold text-gray-900">Add Note</h2>
                    </div>
                    <div>
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('notes.store') }}">
                            @csrf

                            <div class="w-full p-6 mt-4 border-4 border-yellow-500 rounded-lg">
                                <div class="py-2 ">
                                    <x-jet-label for="title" value="{{ __('Subject') }}" />
                                    <x-jet-input id="title"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        type="text" name="title" required autofocus autocomplete="title" />
                                </div>

                                <div class="py-2 ">
                                    <x-jet-label for="description" value="{{ __('Note') }}" />
                                    <textarea id="description"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        name="description" required></textarea>
                                </div>

                                <div class="py-2 ">
                                    <x-jet-label for="severity" value="{{ __('Severity') }}" />
                                    <select id="severity"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        name="severity" required>
                                        <option value="1">Open</option>
                                        <option value="2">On-Going</option>
                                        <option value="3">High</option>
                                        <option value="4">Urgent</option>
                                        <option value="5">Critical</option>
                                        <option value="0">Close</option>
                                    </select>
                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <button
                                        class="inline-flex items-center justify-center w-full px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-white uppercase transition bg-red-500 border border-red-500 rounded-lg hover:bg-red-800 hover:border-red-400 active:bg-black focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                                        {{ __('ADD') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
