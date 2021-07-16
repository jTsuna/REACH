<x-app-layout>
    <div
        class="flex flex-col justify-center mt-32 bg-white shadow-lg md:rounded-lg md:mx-20 lg:mt-10 lg:mx-36 bg-opacity-90">
        <div class="flex items-center justify-center border-b border-gray-900 shadow-md">
            <div class="flex items-center justify-between w-full m-6">
                <span class="text-xl font-bold text-gray-900">Student Profile</span>
                <button onclick="toggleElement('create')"
                    class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition bg-white border border-gray-500 rounded-lg hover:text-white hover:bg-red-600 hover:border-red-400 active:bg-red focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                    <span>Create Room</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex items-center justify-center w-6 h-6 text-yellow-600" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center p-2 md:flex-row">
            <div class="flex flex-col justify-center py-10 overflow-y-auto md:flex-rowitems-center md:w-full">
                <div class="flex items-center justify-start w-full">
                    <div class="flex items-center justify-center w-full">
                        <form method="post" action="">
                            <fieldset
                                class="flex items-center justify-center w-full p-2 space-x-6 border border-gray-900">
                                <legend class="text-sm tracking-widest uppercase">Personal Contact Information</legend>
                                <div class="flex flex-col items-center justify-center md:flex-row">
                                    <label for="contact1" class="block text-sm font-medium text-gray-700">Smart Mobile
                                        No.</label>
                                    <input id="contact1"
                                        class="block w-full border border-gray-500 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="contact1" />
                                </div>
                                <div class="flex flex-col items-center justify-center md:flex-row">
                                    <label for="contact2" class="block text-sm font-medium text-gray-700">
                                        Non-Smart Mobile No.
                                    </label>
                                    <input id="contact2"
                                        class="block w-full border border-gray-500 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="contact2" />
                                </div>
                            </fieldset>

                            <fieldset
                                class="flex flex-col items-center justify-center w-full p-2 mt-2 space-x-6 border border-gray-900">
                                <legend class="text-sm tracking-widest uppercase">Parent Contact Information</legend>
                                <div class="flex flex-col items-center justify-between w-full px-2">
                                    <label for="mother"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-700">
                                        Mother's Name
                                    </label>
                                    <input id="mother"
                                        class="block w-full px-1 border border-gray-500 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="mother" placeholder="Last Name, Given Name Middle Name" />
                                    <label for="mothercontact"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-700">
                                        Contact Number
                                    </label>
                                    <input id="mothercontact"
                                        class="block w-full px-1 border border-gray-500 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="mothercontact" />
                                </div>
                                <hr class="block w-1/2 my-2 border border-gray-500 " />
                                <div class="flex flex-col items-center justify-between w-full px-2 ">
                                    <label for="father"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-700">
                                        Father's Name
                                    </label>
                                    <input id="father"
                                        class="block w-full px-1 border border-gray-500 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="mother" placeholder="Last Name, Given Name Middle Name" />
                                    <label for="fathercontact"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-700">
                                        Contact Number
                                    </label>
                                    <input id="fathercontact"
                                        class="block w-full px-1 border border-gray-500 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="fathercontact" />
                                </div>
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
