<div>
    <div class="flex flex-wrap justify-start my-2">
        <div class="flex items-center justify-start">
            <span class="text-xl font-bold">Assessment List</span>
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
                                    <span class="sr-only">View</span>
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
                                        {{ $assessment->created_at }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                        @if ($assessment->type_id == 1)
                                            <a href="#" class="text-blue-600 hover:text-blue-300">View</a>
                                        @elseif($assessment->type_id == 2)
                                            <span class="text-blue-600 hover:text-blue-300">View</span>
                                        @elseif($assessment->type_id == 3)
                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdgXxHaVLjQhQaeZOKVEQTx_zDZpkRwkMiawCNpK79l3Us_rQ/formResponse"
                                                class="text-blue-600 hover:text-blue-300">View</a>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                        <form method="post"
                                            action="{{ route('assessments.destroy', $assessment->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-300">Remove</button>
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

</div>
