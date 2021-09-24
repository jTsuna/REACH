<x-app-layout>
    <div
        class="flex flex-col justify-center p-3 mt-32 bg-white shadow-lg md:p-6 md:rounded-lg md:mx-auto lg:mt-32 lg:max-w-7xl bg-opacity-90">
        <div class="flex flex-col items-center justify-between my-6 md:flex-row">
            <span class="text-xl font-bold text-gray-900">Assessments</span>
            {{-- <div class="w-1/3 bg-gray-200 shadow">
                <div class="py-1 text-xs leading-none text-center text-white bg-blue-500" style="width: 90%">90%</div>
            </div>
            <div class="inline-flex items-center px-4 py-2 space-x-2 font-medium uppercase text-md ">
                <span class="pr-2 text-green-600 border-r border-gray-900">C - Complete</span>
                <span class="text-red-600">NT - Not Taken</span>
            </div> --}}
        </div>
        <div class="flex flex-col ">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Type of Assessment
                                    </th>
                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Status
                                    </th> --}}
                                    <th scope="col"
                                        class="px-6 py-3 text-sm font-bold tracking-wider text-left text-gray-900 uppercase">
                                        Due
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Answer</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-bold text-gray-900">
                                                    Intake Interview
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex px-2 text-sm font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            C
                                        </span>
                                    </td> --}}
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                        12/27/2018
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                        <a href="#" class="text-blue-600 hover:text-blue-900 hover:underline">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-bold text-gray-900">
                                                    Needs Analysis
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex px-2 text-sm font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            C
                                        </span>
                                    </td> --}}
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                        12/27/2018
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                        <a href="{{ route('needsanalysis.index') }}"
                                            class="text-blue-600 hover:text-blue-900 hover:underline">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-bold text-gray-900">
                                                    Online Family Profile Survey
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex px-2 text-sm font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            C
                                        </span>
                                    </td> --}}
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                        12/27/2018
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                        <a href="#" class="text-blue-600 hover:text-blue-900 hover:underline">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-bold text-gray-900">
                                                    Graduate Tracer
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex px-2 text-sm font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                            NT
                                        </span>
                                    </td> --}}
                                    <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                        12/27/2018
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdgXxHaVLjQhQaeZOKVEQTx_zDZpkRwkMiawCNpK79l3Us_rQ/formResponse"
                                            class="text-blue-600 hover:text-blue-900 hover:underline">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
