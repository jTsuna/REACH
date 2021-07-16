<x-app-layout>
    <div
        class="flex flex-col justify-center p-3 mt-20 bg-white shadow-lg md:p-6 md:rounded-lg md:mx-20 lg:mt-32 lg:mx-36 bg-opacity-90">
        <div class="flex items-center justify-start my-6">
            <span class="text-2xl font-bold text-gray-900">Needs Analysis</span>
        </div>
        <div class="flex items-center justify-start">
            <span class="text-lg text-gray-800">Direction: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt
                ut labore et dolore magna aliqua.</span>
        </div>
        <form method="post" action="" class="border border-black rounded-lg">
            <div class="grid grid-cols-1 gap-4 p-3 rounded-lg md:grid-cols-3">
                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox1">
                    <label for="checkbox1">Weight Problem</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox2">
                    <label for="checkbox2">Too Little Time for Recreation</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox3">
                    <label for="checkbox3">Sickly</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox4">
                    <label for="checkbox4">Height Problem</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox5">
                    <label for="checkbox5">Inability to understand</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox6">
                    <label for="checkbox6">Weak Eyes</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox7">
                    <label for="checkbox7">Poor Body Complexion</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox8">
                    <label for="checkbox8">Inferiority Complex</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox9">
                    <label for="checkbox9">Hearing Difficulty</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox10">
                    <label for="checkbox10">Poor Posture</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox11">
                    <label for="checkbox11">Difficulty in Making Decision</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox12">
                    <label for="checkbox12">Too Easily Discourage</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox13">
                    <label for="checkbox13">Oral Communication Skills</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox14">
                    <label for="checkbox14">Difficulty in Making Friends</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox15">
                    <label for="checkbox15">Identity Crisis</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox16">
                    <label for="checkbox16">Coping with Academic Pressures</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox17">
                    <label for="checkbox17">Too Easily Led By Other People</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox18">
                    <label for="checkbox18">Immature/Childish</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox19">
                    <label for="checkbox19">Fear of Opposite Sex</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox20">
                    <label for="checkbox20">Family Problem</label>
                </div>

                <div class="flex items-center justify-start space-x-2">
                    <input type="checkbox" class="" id="checkbox21">
                    <label for="checkbox21">Financial Problem</label>
                </div>
            </div>

            <div class="flex items-center justify-end m-4">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-white uppercase transition bg-yellow-400 border border-yellow-500 rounded-lg hover:bg-yellow-600 hover:border-yellow-700 focus:outline-none focus:border-yellow-400 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                    Submit
                </button>
            </div>
        </form>
        <div class="flex items-center justify-center w-full px-4 my-4 md:justify-end">
            <a href="{{ route('list') }}"
                class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-white uppercase transition bg-red-600 border border-red-700 rounded-lg hover:bg-red-700 hover:border-red-700 focus:outline-none focus:border-red-600 focus:ring focus:ring-red-700 disabled:opacity-25">
                Return
            </a>
        </div>
    </div>
</x-app-layout>
