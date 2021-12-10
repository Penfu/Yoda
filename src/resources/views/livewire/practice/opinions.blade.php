<div class="mt-8">
    <span class="block py-2 font-bold text-2xl uppercase">
        <span>
            {{ $opinions->count() }}
        </span>
        <h3 class="inline">
            {{ $opinions->count() > 1 ? 'Opinions' : 'Opinions' }}
        </h3>
    </span>

    <div class="flex flex-col pb-8 space-y-8">
        @forelse ($opinions as $opinion)
            <livewire:practice.opinion :opinion="$opinion" :wire:key="$opinion->id" />
        @empty
            <p>Aucune opinion pour le moment.</p>
        @endforelse
    </div>
</div>
