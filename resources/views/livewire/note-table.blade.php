<div>
    <div
        class="flex flex-col justify-center mt-32 bg-white shadow-lg md:rounded-lg md:mx-20 lg:mt-10 lg:mx-36 bg-opacity-90">
        <div class="flex items-center justify-center border-b border-gray-900 shadow-md">
            <div class="flex items-center justify-between w-full m-6">
                <span class="text-xl font-bold text-gray-900">Student Profile</span>
                <button onclick="toggleElement('create')"
                    class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-700 bg-white border border-gray-500 rounded-lg md:hidden hover:text-white hover:bg-red-600 hover:border-red-400 active:bg-red focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                    <span>Create Room</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex items-center justify-center w-6 h-6 text-yellow-600" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center p-2 md:flex-row">
            <div
                class="flex flex-col items-center justify-center h-full px-6 py-2 m-2 border-gray-900 md:rounded-lg md:border-2 md:w-3/12">
                <form action="">
                    <div>
                        <label for="lastname" value="Last Name" class="block text-sm font-medium text-gray-700">Last
                            Name</label>
                        <input id="lastname"
                            class="block w-full px-2 py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none"
                            type="text" name="lastname" required />
                    </div>

                    <div class="mt-4">
                        <label for="firstname" value="First Name" class="block text-sm font-medium text-gray-700">First
                            Name</label>
                        <input id="firstname"
                            class="block w-full px-2 py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none"
                            type="text" name="firstname" required />
                    </div>

                    <div class="mt-4">
                        <label for="idNum" class="block text-sm font-medium text-gray-700">
                            Student Number
                        </label>
                        <input id="idNum"
                            class="block w-full px-2 py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none"
                            type="text" name="idNum" required />
                    </div>

                    <div class="mt-4">
                        <label for="program" value="Program"
                            class="block text-sm font-medium text-gray-700">Program</label>
                        <select id="program" name="program"
                            class="block w-full py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:outline-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach (App\Models\Department::all() as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <button
                            class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-700 bg-white border border-gray-500 rounded-lg hover:text-white hover:bg-yellow-600 hover:border-yellow-400 active:bg-yellow-200 focus:outline-none focus:border-yellow-900 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                            View Notes
                        </button>
                    </div>
                </form>
            </div>
            <hr class="block w-full my-2 border border-gray-900 md:hidden" />
            <div class="flex flex-col items-center justify-center p-2 px-6 overflow-y-auto md:w-9/12">
                <div class="flex items-center justify-center w-full my-2 md:justify-start">
                    <button onclick="toggleElement('createnote')"
                        class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-700 bg-white border border-gray-500 rounded-full hover:text-white hover:bg-green-600 hover:border-green-400 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25">
                        Add Notes
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                </div>
                <div class="grid items-center justify-center w-full grid-cols-1 gap-6 md:grid-cols-3">
                    @foreach ($notes as $note)
                        <div
                            class="flex flex-col items-center justify-center p-2 bg-blue-500 border border-gray-600 rounded-lg">
                            <div class="flex items-center justify-start w-full border-b border-white">
                                <span
                                    class="text-sm font-semibold tracking-widest text-white">{{ $note->created_at }}</span>
                            </div>
                            <h4 class="flex items-center justify-center w-full mt-4 font-bold text-white">
                                {{ $needsAnalyses->where('id', $note->needs_analysis_id)->first()->question }}
                            </h4>
                            <div class="flex items-center justify-center w-full mt-4">
                                <span class="text-left text-white">
                                    {{ $note->description }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>


    {{-- add note --}}

    <div id="createnote" class="fixed inset-0 z-10 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="mb-6 space-x-10 sm:flex sm:items-start">
                        <button onclick="toggleElement('createnote')"
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


                                <div class="mt-4">
                                    <x-jet-label for="needs_analysis_id" value="{{ __('Select Needs Analysis') }}" />
                                    <select id="needs_analysis_id" name="needs_analysis_id"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        @foreach ($needsAnalyses as $needsAnalysis)
                                            <option name="role_id" value="{{ $needsAnalysis->id }}">
                                                {{ $needsAnalysis->question }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="pt-4">
                                    <x-jet-label for="description" value="{{ __('Description') }}" />
                                    <textarea id="description" name="description"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
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
</div>
