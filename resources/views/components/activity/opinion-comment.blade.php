<div>
    <h3 class="inline-block text-lg">Commente une opinion
    </h3>
    <span class="inline ml-2 text-gray-500 text-sm">{{ $comment->opinion->created_at->diffForHumans() }}</span>

    <!--- Comment -->
    <div class="p-4 bg-gray-100 rounded-lg">
        <p>{{ Str::of($comment->comment)->words(35) }}</p>
    </div>
</div>
