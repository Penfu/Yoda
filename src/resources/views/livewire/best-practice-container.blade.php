<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @foreach ($bestPractices as $bestPractice)
        @livewire('best-practice-card', ['bestPractice' => $bestPractice], key($bestPractice->id))
    @endforeach
</div>
