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
                Add Assessment
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
                                    Type of Assessment
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                    Date
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Remove</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($assessments as $assessment)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center justify-start">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $assessment->type->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">
                                            {{ $assessment->status }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $assessment->duedate }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                        <form method="post"
                                            action="{{ route('assessments.destroy', $assessment->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900">remove</button>
                                        </form>
                                    </td>
                                </tr>
                        </tbody>
                        @endforeach
                    </table>
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
                        <h2 class="text-xl font-bold text-gray-900">Add Assessment</h2>
                    </div>
                    <div>
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('assessments.store') }}">
                            @csrf
                            <div class="w-full p-6 mt-4 border-4 border-yellow-500 rounded-lg">


                                <div class="mt-4">
                                    <x-jet-label for="type" value="{{ __('Select Assessment') }}" />
                                    <select id="type" name="type_id"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        @foreach ($types as $type)
                                            <option name="role_id" value="{{ $type->id }}">
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="pt-4">
                                    <x-jet-label for="status" value="{{ __('Status') }}" />
                                    <select id="statud" name="status"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option name="status" value="On Going">
                                            On Going
                                        </option>
                                        <option name="status" value="Upcoming">
                                            Upcoming
                                        </option>
                                    </select>
                                </div>

                                <div class="pt-4 ">
                                    <x-jet-label for="date" value="{{ __('Date') }}" />
                                    <x-jet-input id="date"
                                        class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                        type="date" name="duedate" required />
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
