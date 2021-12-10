<div>
    <span class="block py-2 font-bold text-2xl">
        <span>{{ $comments->count() }}</span>
        <h3 class="inline uppercase">{{ $comments->count() > 1 ? 'Commentaires' : 'Commentaire' }}</h3>
    </span>
</div>
