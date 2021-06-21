<div>
    <div class="flex flex-wrap justify-between my-2 space-x-6">
        <div>
            <input type="text" placeholder="Search.."
                class="w-full p-2 border-2 border-yellow-400 appearance-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-xl" />
        </div>
        <div>
            <button onclick="toggleElement('create')"
                class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition bg-white border border-yellow-500 rounded-lg hover:text-gray-900 hover:bg-yellow-500 hover:border-yellow-400 active:bg-black focus:outline-none focus:border-yellow-900 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add Counselor
            </button>
        </div>
    </div>
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
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                    Employee Number
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
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center justify-start">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            {{ $user->email }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $user->employeeNum }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                        <button onClick="toggleElement('show{{ $user->id }}')"
                                            class="text-green-600 hover:text-green-900">Edit</button>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                        <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <div id="show{{ $user->id }}" class="fixed inset-0 z-10 hidden overflow-y-auto"
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
                                                    <button onclick="toggleElement('show{{ $user->id }}')"
                                                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto sm:mx-0 sm:h-10 sm:w-10">
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
                                                    <h2 class="text-xl font-bold text-gray-900">Edit Information</h2>
                                                </div>
                                                <div>
                                                    <x-jet-validation-errors class="mb-4" />
                                                    <form method="POST"
                                                        action="{{ route('users.update', $user->id) }}">
                                                        @csrf
                                                        @method('patch')
                                                        <div
                                                            class="w-full p-6 mt-4 border-4 border-yellow-400 rounded-lg">
                                                            <div class="py-2 text-center">
                                                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                                                <x-jet-input id="name"
                                                                    class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                                                    type="text" name="name" value="{{ $user->name }}"
                                                                    required autofocus autocomplete="name" />
                                                            </div>

                                                            <div class="py-2 text-center ">
                                                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                                                <x-jet-input id="email"
                                                                    class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                                                    type="email" name="email"
                                                                    value="{{ $user->email }}" required />
                                                            </div>

                                                            <div class="py-2 text-center">
                                                                <x-jet-label for="password"
                                                                    value="{{ __('Password') }}" />
                                                                <x-jet-input id="password"
                                                                    class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                                                    type="password" name="password" />
                                                            </div>
                                                            <div class="py-2 text-center">
                                                                <x-jet-label for="employee"
                                                                    value="{{ __('Employee') }}" />
                                                                <x-jet-input id="employee"
                                                                    class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                                                    type="number" name="employeeNum"
                                                                    value="{{ $user->employeeNum }}" min="10" />
                                                            </div>
                                                            <div class="flex items-center justify-center mt-4">
                                                                <button
                                                                    class="inline-flex items-center justify-center w-full px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-white uppercase transition bg-red-500 border border-red-500 rounded-lg hover:bg-red-800 hover:border-red-400 active:bg-black focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                                                                    {{ __('UPDATE') }}
                                                                </button>
                                                            </div>
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
                        <h2 class="text-xl font-bold text-gray-900">Add Counselor</h2>
                    </div>
                    <div>
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <input type="hidden" name="role_id" value="3" />
                            <div class="w-full p-6 mt-4 border-4 border-yellow-500 rounded-lg">
                                <div class="py-2 ">
                                    <x-jet-label for="name" value="{{ __('Name') }}" />
                                    <x-jet-input id="name"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        type="text" name="name" required autofocus autocomplete="name" />
                                </div>

                                <div class="py-2 ">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        type="email" name="email" required />
                                </div>

                                <div class="py-2 ">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="py-2 ">
                                    <x-jet-label for="employee" value="{{ __('Employee') }}" />
                                    <x-jet-input id="employee"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        type="number" name="employeeNum" min="10" />
                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <button
                                        class="inline-flex items-center justify-center w-full px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-white uppercase transition bg-red-500 border border-red-500 rounded-lg hover:bg-red-800 hover:border-red-400 active:bg-black focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                                        {{ __('ADD') }}
                                    </button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
