<div class="py-4">
    @isset($days)
        <div class="pb-12">
            <span class="">Nouveau de</span>
            <input wire:model="days" name="updated-limit" type="number" min="1" max="1000" value="{{ $days }}"
                class="w-24 h-8 rounded"></input>
            <span class="">{{ $days == 1 ? 'jour' : 'jours' }}</span>
        </div>
    @endisset

    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @forelse ($practices as $practice)
            <livewire:practice.practice-card :practice="$practice" :key="$practice->id" />
        @empty
            <h3>Aucune pratique à afficher ici</h3>
        @endforelse
    </div>
</div>
