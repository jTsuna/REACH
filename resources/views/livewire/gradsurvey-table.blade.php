<div>
    <div class="bg-white border-gray-200 md:p-10 md:mx-64 md:rounded-md md:mt-20">
        <div class="flex flex-col flex-wrap justify-between my-2 space-y-2 md:space-x-6 md:flex-row">
            <div class="flex items-center justify-center space-x-6">
                <button onclick="toggleElement('file')"
                    class="inline-flex items-center justify-center w-full px-4 py-2 space-x-3 text-xs font-bold tracking-widest text-gray-900 uppercase transition bg-white border border-yellow-500 rounded-lg md:w-auto hover:text-gray-900 hover:bg-yellow-500 hover:border-yellow-400 active:bg-black focus:outline-none focus:border-yellow-900 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <span>Upload File</span>
                </button>
            </div>
            <div class="flex items-center justify-center space-x-6">
                <a href="{{ route('gradsurveys.create') }}"
                    class="inline-flex items-center justify-center w-full px-4 py-2 space-x-3 text-xs font-bold tracking-widest text-gray-900 uppercase transition bg-white border border-yellow-500 rounded-lg md:w-auto hover:text-gray-900 hover:bg-yellow-500 hover:border-yellow-400 active:bg-black focus:outline-none focus:border-yellow-900 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                    <span>Show Graphical Results</span>
                </a>
            </div>
        </div>
        <div class="flex flex-col pt-4 max-h-96">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Last Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        First Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Middle name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Maiden Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Contact Number
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Gender
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Year Graduated
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Job is in line with their Degree
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($surveys as $survey)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center justify-start">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $survey->lastname }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                {{ $survey->firstname }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $survey->middlename }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $survey->maidenname }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $survey->email }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $survey->contact }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $survey->gender }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $survey->yearGrad }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $survey->inlineJob }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="file" class="fixed inset-0 z-10 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="px-4 pb-4 bg-white sm:p-6 sm:pb-4">
                        <div class="mb-6 space-x-10 sm:flex sm:items-start">
                            <button onclick="toggleElement('file')"
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
                            <h2 class="text-xl font-bold text-gray-900">Upload File</h2>
                        </div>
                        <div>
                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('gradsurveyupload') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="w-full p-6 mt-4 border-4 border-yellow-500 rounded-lg">

                                    <div class="py-2">
                                        <x-jet-label for="file" value="{{ __('Upload File') }}" />
                                        <x-jet-input
                                            class="w-full p-2 border-2 border-yellow-400 appearance-none rounded-xl"
                                            type="file" id="file" name="file" accept=".xls, .xlsx, .csv" />
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
</div>
