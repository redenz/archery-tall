<div>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div>
                    <div>
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Score
                            </h3>
                        </div>
                    </div>
                    <div class="mt-2 border-t border-gray-200 pt-8">
                        <div class="mt-2 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
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

                                        <button type="button" wire:click="$set('score', 12)"
                                            class=" relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white
                                                        text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none
                                                        focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition
                                                        ease-in-out duration-150 {{$score == 12 ? 'bg-indigo-200' : ''}}">

                                            12
                                        </button>
                                        <button type="button" wire:click="$set('score', 10)"
                                            class=" -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm
                                                        leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none
                                                        focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition
                                                        ease-in-out duration-150 {{$score == 10 ? 'bg-indigo-200' : ''}}">
                                            10
                                        </button>
                                        <button type="button" wire:click="$set('score', 8)"
                                            class=" -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300
                                                        bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10
                                                        focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100
                                                        active:text-gray-700 transition ease-in-out duration-150 {{$score == 8 ? 'bg-indigo-200' : ''}}">
                                            8
                                        </button>
                                        <button type="button" wire:click="$set('score', 5)"
                                            class=" -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300
                                                        bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10
                                                        focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100
                                                        active:text-gray-700 transition ease-in-out duration-150 {{$score == 5 ? 'bg-indigo-200' : ''}}">
                                            5
                                        </button>
                                        <button type="button" wire:click="$set('score', 0)"
                                            class=" -ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300
                                                        bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10
                                                        focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100
                                                        active:text-gray-700 transition ease-in-out duration-150 {{$score == 0 ? 'bg-indigo-200' : ''}}">
                                            0
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-200 pt-5">
                    <div class="flex justify-end">
                        <span class="ml-3 inline-flex rounded-md shadow-sm">
                            <button type="submit" wire:click="create"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Save
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
