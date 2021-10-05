<div>
    <div class="flex items-center justify-between w-full">
        <div>
            <span class="text-4xl font-bold text-gray-900">Students</span>
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
                                    ID Number
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                    Department
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-900 uppercase">
                                    Program
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Add Note</span>
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
                                        {{ $user->idNum }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $departments->where('id', $user->department_id)->first()->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $programs->where('id', $user->program_id)->first()->name }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                        <a href="{{ route('notes.show', $user->id) }}"
                                            class="text-green-600 hover:text-green-900">View
                                            Notes</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
