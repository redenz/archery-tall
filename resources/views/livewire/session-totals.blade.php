<div class="py-1 px-2">
    <div class="flex space-x-4 space-y-1 items-baseline justify-start items-middle text-xs text-gray-600">
        <div class="flex space-x-2">
            <div class="font-bold">Avg Dist:</div>
            <div>{{$this->averageDistance}} yds</div>
        </div>
        <div class="flex space-x-2">
            <div class="font-bold">Avg Score:</div>
            <div>{{$this->averageScore}}</div>
        </div>
    </div>
    <div class="flex space-x-4 space-y-1 items-baseline justify-start text-xs text-gray-600">
        <div class="flex space-x-2">
            <div class="font-bold">Total Dist:</div>
            <div>{{$this->totalDistance}} yds</div>
        </div>
        <div class="flex space-x-2">
            <div class="font-bold">Total Score:</div>
            <div>{{$this->totalScore}}</div>
        </div>
    </div>
</div>
