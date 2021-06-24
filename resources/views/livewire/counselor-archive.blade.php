<div>
    <div class="flex flex-col flex-wrap justify-between my-2 space-y-2 md:space-x-6 md:flex-row">
        <div class="relative py-2">
            <a href="{{ route('counselor') }}"
                class="inline-flex items-center justify-center w-full px-4 py-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-200 bg-white border border-red-500 rounded-lg md:w-auto hover:text-white hover:bg-red-500 hover:border-red-400 active:bg-black focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                Return
            </a>
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
                                        {{ $user->idNum }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-right text-md whitespace-nowrap">
                                        <button class="text-yellow-700 hover:text-yellow-900">Archive</button>
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
