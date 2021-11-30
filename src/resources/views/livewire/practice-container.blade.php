<div class="py-4">
    <div class="pb-12">
        <span class="">Nouveau de</span>
        <input wire:model="fitlerValue" name="updated-limit" type="number" min="1" max="1000" value="{{ $fitlerValue }}" class="w-24 h-8 rounded"></input>
        <span class="">{{ $fitlerValue == 1 ? 'jour' : 'jours'}}</span>
    </div>

    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @forelse ($practices as $practice)
            @livewire('practice-card', ['practice' => $practice], key($practice->id))
        @empty
            <h3>Aucune pratique à afficher ici</h3>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $practices->links() }}
    </div>
</div>
