<div class="py-4">
    @if (count($references) > 0)
        <p>{{ count($references) }} {{ count($references) == 1 ? 'référence trouvée' : 'références trouvées' }}</p>
    @else
        <p>Aucune référence trouvée</p>
    @endif
    <div class="my-4 space-y-4">
        @foreach ($references as $reference)
            <div class="flex items-center py-2 px-4 bg-gray-100 rounded">
                <h3 class="grow text-xl">{{ $reference->title }}</h3>
                <a href="{{ $reference->url }}" target="_blank"
                    class="py-2 px-4 bg-purple-500 hover:bg-purple-600 rounded shadow shadow-purple-300 text-white duration-300">
                    Voir la référence
                </a>
            </div>
        @endforeach
    </div>
</div>
