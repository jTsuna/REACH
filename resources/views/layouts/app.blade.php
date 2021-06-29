<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="dns-prefetch" href="//unpkg.com" />
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialDate: '2020-09-12',
                initialView: 'timeGridWeek',
                nowIndicator: true,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                selectable: true,
                selectMirror: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [{
                        title: 'All Day Event',
                        start: '2020-09-01',
                    },
                    {
                        title: 'Long Event',
                        start: '2020-09-07',
                        end: '2020-09-10'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-09-09T16:00:00'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-09-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2020-09-11',
                        end: '2020-09-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-09-12T10:30:00',
                        end: '2020-09-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2020-09-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-09-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2020-09-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2020-09-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2020-09-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2020-09-28'
                    }
                ]
            });

            calendar.render();
        });
    </script>

    <style>
        [x-cloak] {
            display: none;
        }

        .line {
            background: repeating-linear-gradient(to bottom,
                    #eee,
                    #eee 1px,
                    #fff 1px,
                    #fff 8%);
        }

        .tick {
            background: repeating-linear-gradient(to right,
                    #eee,
                    #eee 1px,
                    #fff 1px,
                    #fff 5%);
        }

    </style>
</head>

<body class="font-sans antialiased ">
    <x-jet-banner />

    <div class="min-h-screen bg-no-repeat bg-cover" style="background-image: url('{{ asset('bg.png') }}');">
        @livewire('navigation-menu')


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        function toggleElement(elemID) {
            document.getElementById(elemID).classList.toggle("hidden");
            document.getElementById(elemID).classList.toggle("block");
        }
    </script>
    @stack('modals')

    @livewireScripts
</body>

</html>
