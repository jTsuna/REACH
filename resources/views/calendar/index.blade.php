<x-app-layout>
    <div class="antialiased sans-serif">
        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
            <div class="container px-4 py-2 mx-auto md:py-24">

                <div class="overflow-hidden bg-white rounded-lg shadow">

                    <div class="flex items-center justify-between px-6 py-2">
                        <div>
                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                            <span x-text="year" class="ml-1 text-lg font-normal text-gray-600"></span>
                        </div>
                        <div class="flex items-center justify-center px-1 space-x-6" style="padding-top: 2px;">
                            <button onclick="toggleElement('request')"
                                class="inline-flex items-center px-4 py-2 space-x-2 text-xs font-bold tracking-widest text-gray-900 uppercase transition duration-700 bg-white border border-red-500 rounded-lg hover:text-white hover:bg-red-500 hover:border-red-400 active:bg-white focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25">
                                Request Schedule
                            </button>
                            <button type="button"
                                class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out border rounded-lg cursor-pointer focus:outline-none hover:bg-gray-200"
                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                <svg class="inline-flex w-6 h-6 leading-none text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button type="button"
                                class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out border rounded-lg cursor-pointer focus:outline-none hover:bg-gray-200"
                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                <svg class="inline-flex w-6 h-6 leading-none text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="-mx-1 -mb-1">
                        <div class="flex flex-wrap" style="margin-bottom: -40px;">
                            <template x-for="(day, index) in DAYS" :key="index">
                                <div style="width: 14.26%" class="px-2 py-2">
                                    <div x-text="day"
                                        class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase">
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap border-t border-l">
                            <template x-for="blankday in blankdays">
                                <div style="width: 14.28%; height: 120px"
                                    class="px-4 pt-2 text-center border-b border-r"></div>
                            </template>
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%; height: 120px" class="relative px-4 pt-2 border-b border-r">
                                    <div @click="showEventModal(date)" x-text="date"
                                        class="inline-flex items-center justify-center w-6 h-6 leading-none text-center transition duration-100 ease-in-out rounded-full cursor-pointer"
                                        :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }">
                                    </div>
                                    <div style="height: 80px;" class="mt-1 overflow-y-auto">

                                        <template
                                            x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                            <div class="px-2 py-1 mt-1 overflow-hidden border rounded-lg" :class="{
                                                'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                                'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                                'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                            }">
                                                <p x-text="event.event_title" class="text-sm leading-tight truncate">
                                                </p>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div style=" background-color: rgba(0, 0, 0, 0.8)"
                class="fixed top-0 bottom-0 left-0 right-0 z-40 w-full h-full"
                x-show.transition.opacity="openEventModal">
                <div class="absolute left-0 right-0 max-w-xl p-4 mx-auto mt-24 overflow-hidden">
                    <div class="absolute top-0 right-0 inline-flex items-center justify-center w-10 h-10 text-gray-500 bg-white rounded-full shadow cursor-pointer hover:text-gray-800"
                        x-on:click="openEventModal = !openEventModal">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                        </svg>
                    </div>

                    <div class="block w-full p-8 overflow-hidden bg-white rounded-lg shadow">

                        <h2 class="pb-2 mb-6 text-2xl font-bold text-gray-800 border-b">Add Event Details</h2>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Event
                                title</label>
                            <input
                                class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500"
                                type="text" x-model="event_title">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Event
                                date</label>
                            <input
                                class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500"
                                type="text" x-model="event_date" readonly>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Event
                                Time</label>
                            <input
                                class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500"
                                type="time">
                        </div>

                        <div class="inline-block w-64 mb-4">
                            <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Select a
                                theme</label>
                            <div class="relative">
                                <select @change="event_theme = $event.target.value;" x-model="event_theme"
                                    class="block w-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none hover:border-gray-500 focus:outline-none focus:bg-white focus:border-blue-500">
                                    <template x-for="(theme, index) in themes">
                                        <option :value="theme.value" x-text="theme.label"></option>
                                    </template>

                                </select>
                                <div
                                    class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-right">
                            <button type="button"
                                class="px-4 py-2 mr-2 font-semibold text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100"
                                @click="openEventModal = !openEventModal">
                                Cancel
                            </button>
                            <button type="button"
                                class="px-4 py-2 font-semibold text-white bg-gray-800 border border-gray-700 rounded-lg shadow-sm hover:bg-gray-700"
                                @click="addEvent()">
                                Save Event
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal -->
        </div>

        <div id="request" class="fixed inset-0 z-10 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                        <div class="mb-6 space-x-10 sm:flex sm:items-start">
                            <button onclick="toggleElement('request')"
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto focus:outline-none sm:mx-0 sm:h-10 sm:w-10">
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
                            <h2 class="text-xl font-bold text-gray-900">Concern</h2>
                        </div>
                        <div>
                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="">

                                <div>
                                    <select id="role" name="role_id"
                                        class="block w-full px-1 py-2 mt-1 border border-gray-500 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option name="role_id" value="1">Family Problem</option>
                                        <option name="role_id" value="2">Academic Problem</option>
                                        <option name="role_id" value="2">Inability to Understand</option>
                                        <option name="role_id" value="2">Fear of the Opposite Gender</option>
                                        <option name="role_id" value="2">Identity Crisis</option>
                                    </select>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button
                                        class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-gray-900 uppercase transition border border-black rounded-lg hover:bg-black hover:text-white focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25">
                                        Request
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ];
            const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            function app() {
                return {
                    month: '',
                    year: '',
                    no_of_days: [],
                    blankdays: [],
                    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                    events: [{
                            event_date: new Date(2020, 3, 1),
                            event_title: "April Fool's Day",
                            event_theme: 'blue'
                        },

                        {
                            event_date: new Date(2020, 3, 10),
                            event_title: "Birthday",
                            event_theme: 'red'
                        },

                        {
                            event_date: new Date(2020, 3, 16),
                            event_title: "Upcoming Event",
                            event_theme: 'green'
                        }
                    ],
                    event_title: '',
                    event_date: '',
                    event_theme: 'blue',

                    themes: [{
                            value: "blue",
                            label: "Blue Theme"
                        },
                        {
                            value: "red",
                            label: "Red Theme"
                        },
                        {
                            value: "yellow",
                            label: "Yellow Theme"
                        },
                        {
                            value: "green",
                            label: "Green Theme"
                        },
                        {
                            value: "purple",
                            label: "Purple Theme"
                        }
                    ],

                    openEventModal: false,

                    initDate() {
                        let today = new Date();
                        this.month = today.getMonth();
                        this.year = today.getFullYear();
                        this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                    },

                    isToday(date) {
                        const today = new Date();
                        const d = new Date(this.year, this.month, date);

                        return today.toDateString() === d.toDateString() ? true : false;
                    },

                    showEventModal(date) {
                        // open the modal
                        this.openEventModal = true;
                        this.event_date = new Date(this.year, this.month, date).toDateString();
                    },

                    addEvent() {
                        if (this.event_title == '') {
                            return;
                        }

                        this.events.push({
                            event_date: this.event_date,
                            event_title: this.event_title,
                            event_theme: this.event_theme
                        });

                        console.log(this.events);

                        // clear the form data
                        this.event_title = '';
                        this.event_date = '';
                        this.event_theme = 'blue';

                        //close the modal
                        this.openEventModal = false;
                    },

                    getNoOfDays() {
                        let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                        // find where to start calendar day of week
                        let dayOfWeek = new Date(this.year, this.month).getDay();
                        let blankdaysArray = [];
                        for (var i = 1; i <= dayOfWeek; i++) {
                            blankdaysArray.push(i);
                        }

                        let daysArray = [];
                        for (var i = 1; i <= daysInMonth; i++) {
                            daysArray.push(i);
                        }

                        this.blankdays = blankdaysArray;
                        this.no_of_days = daysArray;
                    }
                }
            }
        </script>
    </div>
</x-app-layout>
