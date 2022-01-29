<div class="flex py-4">
    <!-- Comment -->
    <div class="grow">
        <p class="inline">{{ $comment->comment }}</p>
        <a href="#" class="text-purple-500 hover:text-purple-600 duration-300">
            {{ $comment->user->name }}
        </a>
        <span class="text-gray-500">
            {{ $comment->created_at->translatedFormat('d.m.y - h\hm') }}
        </span>
    </div>

    <!-- Actions -->
    @if ($comment->user == Auth::user())
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
