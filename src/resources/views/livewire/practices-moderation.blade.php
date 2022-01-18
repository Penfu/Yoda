<div class="py-4">
    <div class="py-2 bg-gray-100 border-l-4 border-purple-500 rounded">
        @if ($practicesCount > 0)
            <p class="ml-4 text-lg">{{ $practicesCount }} {{ $practicesCount == 1 ? 'pratique trouvée' : 'pratiques trouvées' }}</p>
        @else
            <p>Aucune pratique trouvée</p>
        @endif
    </div>

    <div class="pt-4">
        @foreach ($domains as $key => $domain)
            <div class="mt-8 mb-3">
                <h2 class="font-bold text-xl text-gray-900 uppercase">{{ $key }}</h2>
                <span class="text-zinc-500">{{ count($domain) }} {{ count($domain) == 1 ? 'pratique' : 'pratiques' }}</span>
            </div>
            <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 transition duration-1000">
                @foreach ($domain as $practice)
                    <livewire:practice-moderation :practice="$practice" :key="$practice->id" />
                @endforeach
            </div>
        @endforeach
    </div>
</div>
