<div>
    <livewire:create-target-score :session="$this->archerySession" />
    <div class="bg-white lg:min-w-0 lg:flex-1">
        <div
            class="pl-4 pr-6 pt-4 pb-4 border-b border-t border-gray-200 sm:pl-6 lg:pl-8 xl:pl-6 xl:pt-6 xl:border-t-0">
            <div class="flex items-center">
                <h1 class="flex-1 text-lg leading-7 font-medium">Targets</h1>
                <div class="flex space-x-4 justify-end text-sm text-gray-600">
                    <div class="flex">
                        <div>Avg Dist:</div>
                        <div>{{$this->averageDistance}} yds</div>
                    </div>
                    <div class="flex">
                        <div>Avg Score:</div>
                        <div>{{$this->averageScore}}</div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="relative z-0 divide-y divide-gray-200 border-b border-gray-200" x-max="1">
            @foreach($this->archerySession->scores->reverse() as $score)
            <livewire:score-item :score="$score">
                @endforeach
        </ul>
    </div>
</div>
