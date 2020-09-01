<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div>
            <div class="text-lg leading-6 font-medium text-gray-900">
                Stats
            </div>
            <div class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-3">
                @foreach($stats as $stat)
                <div class="border-t border-gray-200 md:border-0 md:border-l">
                    <div class="px-4 py-5 sm:p-6">
                        <dl>
                            <dt class="text-base leading-6 font-normal text-gray-900">
                                Range
                            </dt>
                            <dd class="mt-1 flex justify-between items-baseline md:block lg:flex">
                                <div class="flex items-baseline text-xl leading-8 font-semibold text-indigo-600">
                                    {{$stat['range']}} yds
                                    <span class="ml-2 text-sm leading-5 font-medium text-gray-500">
                                        {{$stat['numTargets']}} Targets
                                    </span>
                                </div>
                                <div
                                    class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium leading-5 bg-blue-100 text-blue-800 md:mt-2 lg:mt-0">
                                    {{$stat['avg']}} Avg
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
