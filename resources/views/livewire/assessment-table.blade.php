<div>
    <div class="flex flex-wrap justify-start my-2">
        <div class="flex items-center justify-start">
            <span class="text-xl font-bold">Assessments List</span>
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
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">View</span>
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
                                    @if ($assessment->id == 1)
                                        <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                            <a href="{{ route('needsanalysis.index') }}"
                                                class="text-blue-600 hover:text-blue-300">View</a>
                                        </td>
                                    @elseif($assessment->id == 2)
                                        <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                            <a href="{{ route('onlinesurvey') }}"
                                                class="text-blue-600 hover:text-blue-300">View</a>
                                        </td>
                                    @elseif($assessment->id == 3)
                                        <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                            <span class="sr-only">View</span>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
