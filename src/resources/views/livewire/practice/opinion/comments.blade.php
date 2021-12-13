<div class="outline outline-4 outline-gray-200 rounded">
    <button class="accordion-btn w-full px-4 bg-gray-200 rounded-t text-left cursor-pointer">
        <span class="block py-1 font-bold text-2xl">
            <span>{{ $comments->count() }}</span>
            <h3 class="inline uppercase">{{ $comments->count() > 1 ? 'Commentaires' : 'Commentaire' }}</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="accordion-icon float-right inline-block h-8 w-8" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </span>
    </button>

    <div class="accordion-content hidden px-4 divide-y-4 divide-gray-200">
        @foreach ($comments as $comment)
            <livewire:practice.opinion.comment :comment="$comment" :wire:key="$comment->id" />
        @endforeach
    </div>
</div>
