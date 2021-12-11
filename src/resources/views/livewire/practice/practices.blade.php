<div class="py-4">
    <div class="pb-4">
        @isset($days)
            <span class="font-bold text-2xl">Pratique modifié depuis {{ $days != 1 ? 'les' : null }}</span>
            <input wire:model="days" name="updated-limit" type="number" min="1" max="1000" value="{{ $days }}"
                class="w-20 h-8 rounded text-center"></input>
            <span class="font-bold text-2xl">{{ $days == 1 ? 'jour' : 'derniers jours' }}</span>
        @endisset

        @if (count($practices) > 0)
            <p>{{ count($practices) }} {{ count($practices) == 1 ? 'pratique trouvé' : 'pratiques trouvés' }}</p>
        @else
            <p>Aucune pratique trouvé</p>
        @endif
    </div>

    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 transition duration-1000">
        @foreach ($practices as $practice)
            <livewire:practice.practice :practice="$practice" :key="$practice->id" />
        @endforeach
    </div>
</div>
