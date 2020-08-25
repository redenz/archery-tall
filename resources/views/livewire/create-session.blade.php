<div>
    @if($mode === 'create')
    <div class="p-8">
        <label for="sessionName" class="block text-sm font-medium leading-5 text-gray-700">
            Session Name
        </label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="flex">
                <input wire:model="sessionName" id="sessionName" class="form-input block w-full sm:text-sm sm:leading-5"
                    placeholder="Prime Course">
            </div>
        </div>
        <div class="flex justify-end p-2">
            <button type="button" wire:click="save"
                class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                Save
            </button>
        </div>
    </div>
    @else
    <div class="flex justify-end p-4">
        <span class="inline-flex rounded-md shadow-sm">
            <button wire:click="$set('mode', 'create' )" type="button"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                New Session
            </button>
        </span>
    </div>
    @endif
</div>
