<div>
    <h3 class="inline-block text-lg">Ajout d'une référence
    </h3>
    <span class="inline ml-2 text-gray-500 text-sm">{{ $reference->created_at->diffForHumans() }}</span>

    <!--- Comment -->
    <div class="py-2 px-4 flex flex-col md:flex-row items-center space-y-4 md:space-y-0 bg-gray-100 rounded">
        <h3 class="md:basis-3/4">{{ $reference->title }}</h3>
        <div class="w-full md:basis-1/4 flex text-center md:text-right">
            <a href="{{ $reference->url }}" target="_blank"
                class="w-full text-purple-500 no-underline hover:underline decoration-solid decoration-2 decoration-purple-500">
                Voir la référence
            </a>
        </div>
    </div>
</div>
