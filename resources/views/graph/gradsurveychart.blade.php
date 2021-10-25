<x-app-layout>

    <body>
        <div class="grid w-auto grid-cols-1 gap-2 p-4 md:grid-cols-2 md:gap-4">
            <div class="w-auto border border-gray-200 h-96" id="year_graduated"></div>
            <div class="w-auto border border-gray-200 h-96" id="gender"></div>
            <div class="w-auto border border-gray-200 h-96" id="inlinejob"></div>
            <div class="w-auto border border-gray-200 h-96" id="gotjob"></div>
            <div class="w-auto border border-gray-200 h-96" id="undertakings"></div>
        </div>

    </body>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(yearChart);
        google.charts.setOnLoadCallback(genderChart);
        google.charts.setOnLoadCallback(inlineJobChart);
        google.charts.setOnLoadCallback(gotJobChart);
        google.charts.setOnLoadCallback(undertakingsChart);

        function yearChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Number of Respondents'],
                ['2011', {{ $year11 }}],
                ['2012', {{ $year12 }}],
                ['2013', {{ $year13 }}],
                ['2014', {{ $year14 }}],
                ['2015', {{ $year15 }}],
                ['2016', {{ $year16 }}],
                ['2017', {{ $year17 }}],
                ['2018', {{ $year18 }}],
                ['2019', {{ $year19 }}],
                ['2020', {{ $year20 }}]
            ]);

            var options = {
                title: 'Year Graduated',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('year_graduated'));
            chart.draw(data, options);
        }

        //Gender
        function genderChart() {
            var data = google.visualization.arrayToDataTable([
                ['Gender', 'Number of Respondents'],
                ['Male', {{ $male }}],
                ['Female', {{ $female }}]
            ]);

            var options = {
                title: 'Gender',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('gender'));
            chart.draw(data, options);
        }

        //Inline Job
        function inlineJobChart() {
            var data = google.visualization.arrayToDataTable([
                ['Job is Inline with the Degree Taken', 'Number of Respondents'],
                ['Yes', {{ $yes }}],
                ['No', {{ $no }}]
            ]);

            var options = {
                title: 'Current Job is in line with their degree',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('inlinejob'));
            chart.draw(data, options);
        }

        //Length of time after Graduation before Respondent got a Job
        function gotJobChart() {
            var data = google.visualization.arrayToDataTable([
                ['Length of time after Graduation before Respondent got a Job', 'Number of Respondents'],
                ['1 - 6 months after graduation', {{ $fewmonths }}],
                ['7 - 12 months after graduation', {{ $severalmonths }}],
                ['More than a year but less than two years after graduation', {{ $fewyears }}],
                ['More than two years after graduation', {{ $severalyears }}]
            ]);

            var options = {
                title: 'Length of time after Graduation before Respondent got a Job',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('gotjob'));
            chart.draw(data, options);
        }

        //employment status
        function undertakingsChart() {
            var data = google.visualization.arrayToDataTable([
                ['Undertakings', 'Number of Respondents'],
                ['Worked Immediately', {{ $a }}],
                ['Studied', {{ $b }}],
                ['Set Up Own Business', {{ $c }}]
            ]);

            var options = {
                title: 'After Graduation Undertakings',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('undertakings'));
            chart.draw(data, options);
        }
    </script>

</x-app-layout>
