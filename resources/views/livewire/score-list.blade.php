<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div>
            <div class="text-lg leading-6 font-medium text-gray-900">
                Scores
            </div>
            <div class="mt-5 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-3">
                <ul class="relative z-0 divide-y divide-gray-200 border-b border-gray-200" x-max="1">
                    @foreach($scores as $score)
                    <livewire:score-item :score="$score" :key="$score->id" />
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
