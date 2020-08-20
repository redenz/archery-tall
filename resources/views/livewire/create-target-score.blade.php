<div class="border p-4">
    <div>
        Target: {{$target}}
    </div>
    <div>
        Distance
        <input type="text" class="inline border" wire:model="distance" />
    </div>
    <div>
        Score
        <div class="flex space-x-4">
            <div class="border w-8 h-8" wire:click="$set('score', 12)">12</div>
            <div class="border w-8 h-8" wire:click="$set('score', 10)">10</div>
            <div class="border w-8 h-8" wire:click="$set('score', 8)">8</div>
            <div class="border w-8 h-8" wire:click="$set('score', 5)">5</div>
            <div class="border w-8 h-8" wire:click="$set('score', 0)">0</div>
        </div>
        <button class="border" wire:click="create">Save</button>
    </div>

</div>
