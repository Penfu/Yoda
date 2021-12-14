<div id="{{ $opinion->user == Auth::user() ? 'my-opinion' : null }}"
    class="px-4 py-4 bg-gray-100 rounded shadow-sm outline-4 outline-purple-400 target:outline-dashed animate-fade-in-down">
    <div class="flex items-stretch">
        <!-- Vote -->
        <div class="flex flex-col items-center mr-8 text-center space-y-2">
            <!-- Vote Up -->
            @if ($vote == 1)
                <div class="bg-gray-200 rounded-md outline-2 outline-dashed outline-purple-500 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </div>
            @else
                <button wire:click="upVote"
                    class="bg-gray-200 hover:bg-gray-300 rounded-md text-gray-500 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </button>
            @endif
            
            <!-- Unvote -->
            <div
                class="w-full rounded-md shadow text-4xl 
                {{ $points < 0 ? 'bg-red-200 shadow-red-300 text-red-500' : ($points > 0 ? 'bg-emerald-200 shadow-emerald-300 text-emerald-500' : 'bg-gray-200 text-gray-500') }}">
                @if ($vote == 0)
                    <span class="font-semibold">{{ $points }}</span>
                @else
                    <button wire:click="unVote" class="w-full font-semibold">
                        {{ $points }}
                    </button>
                @endif
            </div>

            <!-- Vote down -->
            @if ($vote == -1)
                <div class="bg-gray-200 rounded-md outline-2 outline-dashed outline-purple-500 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            @else
                <button wire:click="downVote"
                    class="bg-gray-200 hover:bg-gray-300 rounded-md text-gray-500 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            @endif
        </div>

        <!-- Opinion -->
        <div class="grow overflow-x-hidden text-ellipsis">
            <p class="inline">{{ $opinion->description }}</p>
            <a href="#" class="inline text-purple-500 hover:text-purple-600 duration-300">
                {{ $opinion->user->name }}
            </a>
            <span class="text-gray-500">
                {{ $opinion->created_at->translatedFormat('d.m.y - h\hm') }}
            </span>
        </div>

        <!-- Actions -->
        @if ($opinion->user == Auth::user())
            <div class="flex flex-col items-start ml-8 space-y-2">
                <button wire:click="delete"
                    class="p-1 bg-gray-200 hover:bg-gray-300 rounded-md text-gray-500 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <!-- Comments !-->
    <div class="mt-8">
        <livewire:practice.opinion.comments :comments="$opinion->comments()->get()" />
    </div>
</div>
