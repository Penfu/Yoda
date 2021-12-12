<div class="py-4">
    <span>
        <p class="inline">{{ $comment->comment }}</p>
        <a href="#" class="text-purple-500 hover:text-purple-600 duration-300">
            {{ $comment->user->name }}
        </a>
        <span class="text-gray-500">
            {{ $comment->created_at->translatedFormat('d.m.y - h\hm') }}
        </span>
    </span>
</div>
