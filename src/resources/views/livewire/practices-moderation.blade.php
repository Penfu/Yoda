<div class="py-4">
    <div class="pb-4">
        @if ($practicesCount > 0)
            <p>{{ $practicesCount }} {{ $practicesCount == 1 ? 'pratique trouvée' : 'pratiques trouvées' }}</p>
        @else
            <p>Aucune pratique trouvée</p>
        @endif
    </div>

    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 transition duration-1000">
        @foreach ($domains as $domain)
            @foreach ($domain as $practice)
                <livewire:practice-moderation :practice="$practice" :key="$practice->id" />
            @endforeach
        @endforeach
    </div>
</div>
