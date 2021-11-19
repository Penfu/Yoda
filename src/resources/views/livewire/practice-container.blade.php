<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($practices as $practice)
            @livewire('practice-card', ['practice' => $practice], key($practice->id))
        @endforeach
    </div>

    <div class="mt-4">
        {{ $practices->links() }}
    </div>
</div>