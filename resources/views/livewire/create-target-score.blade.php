<div class="bg-gray-100">
    <div class="max-w-7xl py-4 mx-auto px-4 sm:px-6 lg:px-8">
        <div>
            <div class="text-lg leading-6 font-medium text-gray-900">
                Enter Score
            </div>
            <div class="p-4 mt-3 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-3">
                <div class="mt-2 grid grid-cols-8 row-gap-6 col-gap-4 sm:grid-cols-6">
                    <div class="col-span-2">
                        <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">
                            Distance
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="distance" wire:model="distance"
                                class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-5 text-gray-700">
                            Score
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <span class="relative z-0 inline-flex shadow-sm rounded-md">

                                <button type="button" wire:click="create(12)"
                                    class=" relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white
                                                                        text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none
                                                                        focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition
                                                                        ease-in-out duration-150 {{$score == 12 ? 'bg-indigo-200' : ''}}">

                                    12
                                </button>
                                <button type="button" wire:click="create(10)"
                                    class=" -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm
                                                                        leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none
                                                                        focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition
                                                                        ease-in-out duration-150 {{$score == 10 ? 'bg-indigo-200' : ''}}">
                                    10
                                </button>
                                <button type="button" wire:click="create(8)"
                                    class=" -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300
                                                                        bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10
                                                                        focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100
                                                                        active:text-gray-700 transition ease-in-out duration-150 {{$score == 8 ? 'bg-indigo-200' : ''}}">
                                    8
                                </button>
                                <button type="button" wire:click="create(5)"
                                    class=" -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300
                                                                        bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10
                                                                        focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100
                                                                        active:text-gray-700 transition ease-in-out duration-150 {{$score == 5 ? 'bg-indigo-200' : ''}}">
                                    5
                                </button>
                                <button type="button" wire:click="create(0)"
                                    class=" -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md
                                                            border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700
                                                            hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300
                                                            focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition
                                                            ease-in-out duration-150 {{$score == 0 ? 'bg-indigo-200' : ''}}">
                                    0
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
