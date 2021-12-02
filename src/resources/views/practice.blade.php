<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <a href="{{ URL::previous() }}" class="px-2 py-1 bg-gray-300 hover:bg-gray-400 rounded-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block -mt-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
            </svg>
            <span class="inline-block">Retour</span>
        </a>
        <div class="py-4">
            <h2 class="my-2 font-bold text-xl">{{ $practice->domain->name }}</h2>
            <p class="my-2 flex-grow">{{ $practice->description }}</p>

            <div>
                <span>Créé le</span>
                <span> {{ $practice->created_at->translatedFormat('j F Y') }}</span>
            </div>
            <div>
                <span>Modifié le</span>
                <span> {{ $practice->updated_at->translatedFormat('j F Y') }}</span>
            </div>
            <div>
                <span>Auteur</span>
                <span>{{ $practice->user->fullname }}</span>
            </div>
        </div>
    </div>
</x-app-layout>
