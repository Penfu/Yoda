<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <div class="">
            <h2 class="my-2 font-bold text-xl">{{ $practice->domain->name }}</h2>
            <p class="my-2 flex-grow">{{ $practice->description }}</p>
            <span class="justify-self-end text-right">{{ $practice->updated_at->translatedFormat('j F Y') }}</span>
        </div>
    </div>
</x-app-layout>
