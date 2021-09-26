<div>
    <div>
        <div class="flex flex-col pt-4">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Assigned Counselor
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Graduate Tracer Link
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($programLists as $programList)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center justify-start">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $programList->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ is_null($programList->user_id) ? '' : App\Models\User::where('id', $programList->user_id)->first()->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $programList->link }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                            <button onClick="toggleElement('show{{ $programList->id }}')"
                                                class="text-green-600 hover:text-green-900 focus:outline-none">Edit</button>
                                        </td>
                                        <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                            <form method="post" action="{{ route('programs.destroy', $programList->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900 focus:outline-none">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div id="show{{ $programList->id }}" class="fixed inset-0 z-10 hidden overflow-y-auto"
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
                                                        <button onclick="toggleElement('show{{ $programList->id }}')"
                                                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto focus:outline-none sm:mx-0 sm:h-10 sm:w-10">
                                                            <!-- Heroicon name: outline/exclamation -->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="w-5 h-5 text-gray-900" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center justify-center">
                                                        <h2 class="text-xl font-bold text-gray-900">Edit Information
                                                        </h2>
                                                    </div>
                                                    <div>
                                                        <x-jet-validation-errors class="mb-4" />
                                                        <form method="POST"
                                                            action="{{ route('programs.update', $programList->id) }}">
                                                            @method('patch')
                                                            @csrf
                                                            
                                                            <div
                                                                class="w-full p-6 mt-4 border-4 border-yellow-400 rounded-lg">

                                                                <div class="py-2">
                                                                    <x-jet-label for="user_id"
                                                                        value="{{ __('Assign Counselor') }}" />
                                                                    <select id="user_id" name="user_id"
                                                                        class="block w-full mt-1 border-2 border-yellow-400 rounded-md shadow-sm focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50">
                                                                        @foreach ($users as $user)
                                                                            <option name="user_id"
                                                                                value="{{ $user->id }}">
                                                                                {{ $user->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="py-2">
                                                                    <x-jet-label for="link"
                                                                        value="{{ __('Add Graduate Tracer Link') }}" />
                                                                    <x-jet-input id="link"
                                                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50"
                                                                        type="text" name="link"
                                                                        value="{{ $programList->link }}" />
                                                                </div>

                                                                <div class="flex items-center justify-center mt-4">
                                                                    <button type="submit"
                                                                        class="inline-flex items-center justify-center w-full px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-white uppercase transition bg-red-500 border border-red-500 rounded-lg hover:bg-red-800 hover:border-red-400 active:bg-black focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                                                                        {{ __('Assign') }}
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
