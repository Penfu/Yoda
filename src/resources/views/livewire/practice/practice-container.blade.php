<div class="py-4">
    @isset($days)
        <div class="pb-4">
            <span class="font-bold text-2xl">Pratique modifié depuis {{ $days != 1 ? 'les' : null }}</span>
            <input wire:model="days" name="updated-limit" type="number" min="1" max="1000" value="{{ $days }}"
                class="w-20 h-8 rounded"></input>
            <span class="font-bold text-2xl">{{ $days == 1 ? 'jour' : 'derniers jours' }}</span>
            @if (count($practices) > 0)
                <p>{{ count($practices) }} pratiques trouvés</p>
            @else
                <p>Aucune pratique trouvé</p>
            @endif
        </div>
    @endisset

    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 transition duration-1000">
        @foreach ($practices as $practice)
            <livewire:practice.practice-card :practice="$practice" :key="$practice->id" />
        @endforeach
    </div>
</div>
