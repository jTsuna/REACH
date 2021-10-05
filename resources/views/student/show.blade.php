<x-app-layout>
    <div
        class="flex flex-col justify-center mx-10 mt-32 bg-white shadow-lg md:mx-64 md:rounded-lg lg:mt-10 bg-opacity-90">
        <div class="flex items-center justify-center border-b border-gray-900 shadow-md">
            <div class="flex items-center justify-start w-full m-6">
                <span class="text-xl font-bold text-gray-900">Student Profile</span>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center p-2 md:flex-row">
            <div class="flex flex-col justify-center py-10 overflow-y-auto md:flex-rowitems-center md:w-full">
                <div class="flex items-center justify-start w-full">
                    <div class="flex items-center justify-center w-full">
                        <form method="post" action="{{ route('studentprofiles.update', auth()->user()->id) }}">
                            @method('patch')
                            @csrf

                            <fieldset
                                class="flex items-center justify-center w-full p-2 space-x-6 border border-gray-900 rounded-md">
                                <legend class="text-sm tracking-widest uppercase">Personal Contact Information
                                </legend>
                                <div class="flex flex-col items-center justify-center md:flex-row">
                                    <label for="smartnum" class="block text-sm font-medium text-gray-900">Smart
                                        Mobile
                                        No.</label>
                                    <input id="smartnum"
                                        value="{{ is_null($studentProfile) ? null : $studentProfile->smartnum }}"
                                        class="block w-full border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="smartnum" />
                                </div>


                                <div class="flex flex-col items-center justify-center md:flex-row">
                                    <label for="non_smart_num" class="block text-sm font-medium text-gray-900">
                                        Non-Smart Mobile No.
                                    </label>
                                    <input id="non_smart_num"
                                        value="{{ is_null($studentProfile) ? null : $studentProfile->non_smart_num }}"
                                        class="block w-full border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="non_smart_num" />
                                </div>
                            </fieldset>


                            <fieldset
                                class="flex flex-col items-center justify-center w-full p-2 mt-2 space-x-6 border border-gray-900 rounded-md">
                                <legend class="text-sm tracking-widest uppercase">Parent Contact Information
                                </legend>
                                {{-- mother --}}
                                <div class="flex flex-col items-center justify-between w-full px-2">

                                    <div class="flex justify-between w-full">
                                        <div class="flex flex-col w-5/6 mr-2">
                                            <label for="mother"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Mother's Name
                                            </label>
                                            <input id="mother"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->mother }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="text" name="mother"
                                                placeholder="Last Name, Given Name Middle Name" />
                                        </div>

                                        <div class="flex flex-col w-1/6">
                                            <label for="mother_age"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Age
                                            </label>
                                            <input id="mother_age"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->mother_age }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="number" name="mother_age" />
                                        </div>
                                    </div>

                                    <label for="mother_contact"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                        Contact Number
                                    </label>
                                    <input id="mother_contact"
                                        value="{{ is_null($studentProfile) ? null : $studentProfile->mother_contact }}"
                                        class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="mother_contact" />

                                    <div class="flex justify-between w-full">
                                        <div class="flex flex-col w-1/2 mr-2">
                                            <label for="mother_occupation"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Occupation
                                            </label>
                                            <input id="mother_occupation"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->mother_occupation }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="text" name="mother_occupation" />
                                        </div>

                                        <div class="flex flex-col w-1/2">
                                            <label for="mother_company"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Company
                                            </label>
                                            <input id="mother_company"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->mother_company }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="text" name="mother_company" />
                                        </div>
                                    </div>

                                    <label for="motherCompany_address"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                        Company Address
                                    </label>
                                    <input id="motherCompany_address"
                                        value="{{ is_null($studentProfile) ? null : $studentProfile->motherCompany_address }}"
                                        class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="motherCompany_address" />

                                </div>

                                <hr class="block w-1/2 my-2 border border-gray-400 " />
                                {{-- father --}}
                                <div class="flex flex-col items-center justify-between w-full px-2">

                                    <div class="flex justify-between w-full">
                                        <div class="flex flex-col w-5/6 mr-2">
                                            <label for="father"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Father's Name
                                            </label>
                                            <input id="father"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->father }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="text" name="father"
                                                placeholder="Last Name, Given Name Middle Name" />
                                        </div>

                                        <div class="flex flex-col w-1/6">
                                            <label for="father_age"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Age
                                            </label>
                                            <input id="father_age"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->father_age }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="number" name="father_age" />
                                        </div>
                                    </div>

                                    <label for="father_contact"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                        Contact Number
                                    </label>
                                    <input id="father_contact"
                                        value="{{ is_null($studentProfile) ? null : $studentProfile->father_contact }}"
                                        class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="father_contact" />

                                    <div class="flex justify-between w-full">
                                        <div class="flex flex-col w-1/2 mr-2">
                                            <label for="father_occupation"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Occupation
                                            </label>
                                            <input id="father_occupation"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->father_occupation }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="text" name="father_occupation" />
                                        </div>

                                        <div class="flex flex-col w-1/2">
                                            <label for="father_company"
                                                class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                                Company
                                            </label>
                                            <input id="father_company"
                                                value="{{ is_null($studentProfile) ? null : $studentProfile->father_company }}"
                                                class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="text" name="father_company" />
                                        </div>
                                    </div>

                                    <label for="fatherCompany_address"
                                        class="flex items-center justify-start w-full text-sm font-medium text-gray-900">
                                        Company Address
                                    </label>
                                    <input id="fatherCompany_address"
                                        value="{{ is_null($studentProfile) ? null : $studentProfile->fatherCompany_address }}"
                                        class="block w-full px-1 border border-yellow-400 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="fatherCompany_address" />

                                </div>
                            </fieldset>


                            <div class="flex items-center justify-end w-full mt-4">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-white uppercase transition bg-yellow-500 border border-yellow-500 rounded-lg hover:text-gray-900 hover:bg-white hover:border-yellow-500 active:bg-red focus:outline-none focus:border-yellow-900 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                                    SUBMIT
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
