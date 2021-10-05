<x-app-layout>
    <div
        class="flex flex-col justify-center p-3 mt-32 bg-white shadow-lg md:p-6 md:rounded-lg md:mx-auto lg:mt-32 lg:max-w-7xl bg-opacity-90">
        <div class="flex flex-col items-center justify-between my-6 md:flex-row">
            <span class="text-xl font-bold text-gray-900">Assessments</span>
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
                                                    Needs Analysis
                                                </div>
                                            </div>
                                        </div>
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
                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                        <a href="{{ route('studentprofiles.show', auth()->user()->id) }}"
                                            class="text-blue-600 hover:text-blue-900 hover:underline">View</a>
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
                                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                        <a href="{{ is_null($programs) ? null : $programs->link }}"
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
