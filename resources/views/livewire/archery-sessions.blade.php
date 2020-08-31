<div class="bg-white lg:min-w-0 lg:flex-1">
    <livewire:create-session></livewire:create-session>
    <div class="pl-4 pr-6 pt-4 pb-4 border-b border-t border-gray-200 sm:pl-6 lg:pl-8 xl:pl-6 xl:pt-6 xl:border-t-0">
        <div class="flex items-center">
            <h1 class="flex-1 text-lg leading-7 font-medium">Sessions</h1>
        </div>
    </div>
    <ul class="relative z-0 divide-y divide-gray-200 border-b border-gray-200" x-max="1">
        @forelse ($sessions as $session)
        <li class="relative pl-4 pr-6 py-5 hover:bg-gray-50 sm:py-6 sm:pl-6 lg:pl-8 xl:pl-6" :key="$session->id">
            <div class="flex items-center justify-between space-x-4">
                <!-- Repo name and link -->
                <div class="min-w-0 space-y-3">
                    <div class="flex items-center space-x-3">
                        <span aria-label="Running"
                            class="h-4 w-4 bg-green-100 rounded-full flex items-center justify-center">
                            <span class="h-2 w-2 bg-green-400 rounded-full"></span>
                        </span>
                        <div class="flex justify-between flex-1">
                            <span class="block">
                                <h2 class="text-sm font-medium leading-5">
                                    <a href="/sessions/{{$session['id']}}">
                                        <span class="absolute inset-0"></span>
                                        {{$session['name']}}
                                    </a>
                                </h2>
                            </span>
                            <div class="text-sm leading-5 text-gray-500 group-hover:text-gray-900 font-medium truncate">
                                {{optional($session->created_at)->format("M d, Y")}}
                            </div>
                        </div>
                    </div>
                    <livewire:session-totals :archerySession="$session" />
                </div>
                <div class="sm:hidden">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <!-- Repo meta info -->
                <div class="hidden sm:flex flex-col flex-shrink-0 items-end space-y-3">
                    <p class="flex items-center space-x-4">
                        <a href="#" class="relative text-sm leading-5 text-gray-500 hover:text-gray-900 font-medium">
                            Probably Date
                        </a>
                        <button class="relative" type="button">
                            <svg class="h-5 w-5 text-yellow-300 hover:text-yellow-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </button>
                    </p>
                    <p class="flex text-gray-500 text-sm leading-5 space-x-2">
                        Maybe some stats (Targets - avg distance - avg score)
                    </p>
                </div>
            </div>
        </li>
        @empty

        @endforelse
    </ul>
</div>
