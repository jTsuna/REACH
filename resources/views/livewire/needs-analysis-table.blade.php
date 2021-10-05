<div>
    <div
        class="flex flex-col justify-center p-3 mt-20 bg-white shadow-lg md:p-6 md:rounded-lg md:mx-20 lg:mt-20 lg:mx-36 bg-opacity-90">
        <div class="flex items-center justify-start my-6">
            <span class="text-2xl font-bold text-gray-900">Needs Analysis</span>
        </div>
        <div class="flex items-center justify-start">
            <span class="text-lg text-gray-800">Direction: Check all that applies.</span>
        </div>
        <form method="post" action="{{ route('needs.store') }}" class="border border-black rounded-lg">
            @csrf
            <fieldset id="needs" class="grid grid-cols-1 gap-4 p-3 rounded-lg md:grid-cols-4">
                @foreach ($needsAnalyses as $needsAnalysis)
                    <div class="flex items-center justify-start space-x-2">
                        <input name="needs[]" type="checkbox" value="{{ $needsAnalysis->id }}">
                        <label for="checkbox">{{ $needsAnalysis->question }}</label>
                    </div>
                @endforeach
            </fieldset>

            <div class="flex items-center justify-end m-4 space-x-4">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-white uppercase transition bg-yellow-400 border border-yellow-500 rounded-lg hover:bg-white hover:text-gray-900 hover:border-yellow-500 focus:outline-none focus:border-yellow-400 focus:ring focus:ring-yellow-300 disabled:opacity-25">
                    Submit
                </button>
                <a href="{{ route('list') }}"
                    class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-white uppercase transition bg-red-600 border border-red-700 rounded-lg hover:bg-white hover:text-gray-900 hover:border-red-500 focus:outline-none focus:border-red-600 focus:ring focus:ring-red-700 disabled:opacity-25">
                    Return
                </a>
            </div>
        </form>
    </div>
</div>
