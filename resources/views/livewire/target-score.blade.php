<div>
    <div>
        Target: <input class="border" type="number" wire:model="target"></input>
    </div>
    <div>
        Distance:
        <div>
            <button class="border h-8 w-8" wire:click="$set('score', 12)">12</button>
            <button class="border h-8 w-8" wire:click="$set('score', 10)">10</button>
            <button class="border h-8 w-8" wire:click="$set('score', 8)">8</button>
            <button class="border h-8 w-8" wire:click="$set('score', 5)">5</button>
            <button class="border h-8 w-8" wire:click="$set('score', 0)">0</button>
        </div>
    </div>
    <button class="border" wire:click="create">Create</button>
</div>
