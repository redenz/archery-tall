<div>
    <div class="bg-white lg:min-w-0 lg:flex-1">
        <div
            class="pl-4 pr-6 pt-4 pb-4 border-b border-t border-gray-200 sm:pl-6 lg:pl-8 xl:pl-6 xl:pt-6 xl:border-t-0">
            <div>
                <div>
                    {{ $this->archerySession->name }}
                </div>
                <div>
                    <livewire:session-totals :archerySession="$this->archerySession" />
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2">
        <livewire:create-target-score :session="$this->archerySession" />
    </div>
    <livewire:session-scores :session="$this->archerySession" />
    <livewire:archery-session-stats :session="$this->archerySession" />
</div>
</div>
