<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <!-- Domain -->
        <a href="{{ route('domain.domain', ['domain' => $practice->domain->slug]) }}" class="group inline-block">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="hidden group-hover:flex h-11 w-11 mr-1 group-hover:border-r-4 border-purple-500 animate-fade-in-left"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                </svg>
                <h1 class="text-6xl font-bold uppercase">{{ $practice->domain->name }}</h1>
            </div>
        </a>

        <!--- Practice -->
        <div>
            <p class="my-4 text-lg">{{ $practice->description }}</p>
            <div class="inline-block mr-1 my-1 px-2 py-1 bg-gray-100 rounded-md">
                <span>Créé le</span>
                <span>{{ $practice->created_at->translatedFormat('j F Y') }}</span>
            </div>
            <div class="inline-block mr-1 my-1 px-2 py-1 bg-gray-100 rounded-md">
                <span>Modifié le</span>
                <span>{{ $practice->updated_at->translatedFormat('j F Y') }}</span>
            </div>
            <a href="#"
                class="inline-block mr-1 my-1 px-2 py-1 bg-purple-200 rounded-md text-purple-600 hover:text-purple-500">
                <span>{{ $practice->user->fullname }}</span>
            </a>
        </div>

        <livewire:practice.opinions :opinions="$practice->opinions" />
      
    </div>
</x-app-layout>
