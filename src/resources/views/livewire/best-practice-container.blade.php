<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-y-4 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($bestPractices as $bestPractice)
            @livewire('best-practice-card', ['bestPractice' => $bestPractice], key($bestPractice->id))
        @endforeach
    </div>

    <div class="mt-4">
        {{ $bestPractices->links() }}
    </div>
</div>