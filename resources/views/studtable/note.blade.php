<x-app-layout>
    <div
        class="flex flex-col justify-center mt-32 bg-white shadow-lg md:rounded-lg md:mx-20 lg:mt-10 lg:mx-36 bg-opacity-90">
        <div class="flex items-center justify-center border-b border-gray-900 shadow-md">
            <div class="flex items-center justify-between w-full m-6">
                <span class="text-xl font-bold text-gray-900">Student Profile</span>
                <button onclick="toggleElement('create')"
                    class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-700 bg-white border border-gray-500 rounded-lg hover:text-white hover:bg-red-600 hover:border-red-400 active:bg-red focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
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
            <div
                class="flex flex-col items-center justify-center h-full px-6 py-2 m-2 border-gray-900 md:rounded-lg md:border-2 md:w-3/12">
                <form action="">
                    <div>
                        <label for="lastname" value="Last Name" class="block text-sm font-medium text-gray-700">Last
                            Name</label>
                        <input id="lastname"
                            class="block w-full px-2 py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none"
                            type="text" name="lastname" required />
                    </div>

                    <div class="mt-4">
                        <label for="firstname" value="First Name" class="block text-sm font-medium text-gray-700">First
                            Name</label>
                        <input id="firstname"
                            class="block w-full px-2 py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none"
                            type="text" name="firstname" required />
                    </div>

                    <div class="mt-4">
                        <label for="studnum" value="Student Number"
                            class="block text-sm font-medium text-gray-700">Student
                            Number</label>
                        <input id="studnum"
                            class="block w-full px-2 py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:outline-none"
                            type="text" name="studnum" required />
                    </div>

                    <div class="mt-4">
                        <label for="program" value="Program"
                            class="block text-sm font-medium text-gray-700">Program</label>
                        <select id="program" name="program"
                            class="block w-full py-1 mt-1 border border-gray-500 rounded-full shadow-sm focus:outline-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="1">School of Architecture and Planning,
                                Industrial Design, and the
                                Built
                                Environment</option>
                            <option value="2">School of Chemical, Biological, and
                                Materials Engineering and
                                Sciences
                            </option>
                            <option value="3">School of Civil, Environmental &
                                Sanitary and Geological
                                Engineering</option>
                            <option value="4">School of Electrical, Electronics, and
                                Computer Engineering
                            </option>
                            <option value="5">School of Graduate Studies</option>
                            <option value="6">School of Industrial Engineering and
                                Engineering Management
                            </option>
                            <option value="7">School of Media Studies</option>
                            <option value="8">School of Mechanical and Manufacturing
                                Engineering</option>
                            <option value="9">Department of Mathematics</option>
                            <option value="10">Department of Physical Education and
                                Artes</option>
                            <option value="11">School of Social Sciences and
                                Education</option>
                            <option value="12">Department of Physics</option>
                            <option value="13">Enrique T. Yuchengco School of
                                Business and Management</option>
                            <option value="14">School of Information Technology
                            </option>
                            <option value="15">Office of International Career and
                                Exchange Program</option>
                            <option value="16">Department of Arts and Letters
                            </option>
                        </select>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <button
                            class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-700 bg-white border border-gray-500 rounded-lg hover:text-white hover:bg-yellow-600 hover:border-yellow-400 active:bg-yellow-200 focus:outline-none focus:border-yellow-900 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                            View Notes
                        </button>
                    </div>
                </form>
            </div>
            <hr class="block w-full my-2 border border-gray-900 md:hidden" />
            <div class="flex flex-col items-center justify-center p-2 px-6 overflow-y-auto md:w-9/12">
                <div class="flex items-center justify-center w-full my-2 md:justify-start">
                    <button
                        class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-700 bg-white border border-gray-500 rounded-full hover:text-white hover:bg-red-600 hover:border-red-400 active:bg-red focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                        Add Notes
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                </div>
                <div class="grid items-center justify-center w-full grid-cols-1 gap-6 md:grid-cols-3">
                    <div
                        class="flex flex-col items-center justify-center p-2 bg-blue-500 border border-gray-600 rounded-lg">
                        <div class="flex items-center justify-start w-full border-b border-white">
                            <span class="text-sm font-semibold tracking-widest text-white">12/27/2018</span>
                        </div>
                        <h4 class="flex items-center justify-center w-full mt-4 font-bold text-white">
                            Family Problem
                        </h4>
                        <div class="flex items-center justify-center w-full mt-4">
                            <span class="text-left text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center p-2 bg-blue-500 border border-gray-600 rounded-lg">
                        <div class="flex items-center justify-start w-full border-b border-white">
                            <span class="text-sm font-semibold tracking-widest text-white">12/27/2018</span>
                        </div>
                        <h4 class="flex items-center justify-center w-full mt-4 font-bold text-white">
                            Family Problem
                        </h4>
                        <div class="flex items-center justify-center w-full mt-4">
                            <span class="text-left text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center p-2 bg-blue-500 border border-gray-600 rounded-lg">
                        <div class="flex items-center justify-start w-full border-b border-white">
                            <span class="text-sm font-semibold tracking-widest text-white">12/27/2018</span>
                        </div>
                        <h4 class="flex items-center justify-center w-full mt-4 font-bold text-white">
                            Family Problem
                        </h4>
                        <div class="flex items-center justify-center w-full mt-4">
                            <span class="text-left text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center p-2 bg-blue-500 border border-gray-600 rounded-lg">
                        <div class="flex items-center justify-start w-full border-b border-white">
                            <span class="text-sm font-semibold tracking-widest text-white">12/27/2018</span>
                        </div>
                        <h4 class="flex items-center justify-center w-full mt-4 font-bold text-white">
                            Family Problem
                        </h4>
                        <div class="flex items-center justify-center w-full mt-4">
                            <span class="text-left text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center p-2 bg-blue-500 border border-gray-600 rounded-lg">
                        <div class="flex items-center justify-start w-full border-b border-white">
                            <span class="text-sm font-semibold tracking-widest text-white">12/27/2018</span>
                        </div>
                        <h4 class="flex items-center justify-center w-full mt-4 font-bold text-white">
                            Family Problem
                        </h4>
                        <div class="flex items-center justify-center w-full mt-4">
                            <span class="text-left text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </span>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center p-2 bg-blue-500 border border-gray-600 rounded-lg">
                        <div class="flex items-center justify-start w-full border-b border-white">
                            <span class="text-sm font-semibold tracking-widest text-white">12/27/2018</span>
                        </div>
                        <h4 class="flex items-center justify-center w-full mt-4 font-bold text-white">
                            Family Problem
                        </h4>
                        <div class="flex items-center justify-center w-full mt-4">
                            <span class="text-left text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua
                            </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
