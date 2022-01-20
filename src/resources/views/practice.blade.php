<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <!-- Domain -->
        <a href="{{ route('practices.byDomain', ['domain' => $practice->domain->slug]) }}" class="group inline-block">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="md:h-12 w-0 md:group-hover:w-12 duration-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                </svg>
                <!--- Split line -->
                <div class="my-2 self-stretch border-purple-500 group-hover:border-l-4 duration-100"></div>
                <h1 class="text-6xl font-bold uppercase duration-500">{{ $practice->domain->name }}</h1>
            </div>
        </a>

        <!--- Practice -->
        <div>
            <p class="my-4 text-lg">{{ $practice->description }}</p>
            <div class="inline-block mr-1 my-1 px-2 py-1 bg-gray-100 rounded-md shadow">
                <span>Créé le</span>
                <span>{{ $practice->created_at->translatedFormat('j F Y') }}</span>
            </div>
            <div class="inline-block mr-1 my-1 px-2 py-1 bg-gray-100 rounded-md shadow">
                <span>Modifié le</span>
                <span>{{ $practice->updated_at->translatedFormat('j F Y') }}</span>
            </div>
            @can('moderate')
                <div class="inline-block mr-1 my-1 px-2 py-1 bg-gray-100 rounded-md shadow">
                    <span>{{ $practice->publicationState->name }}</span>
                </div>
            @endcan
            <a href="#"
                class="inline-block mr-1 my-1 px-2 py-1 bg-purple-200 rounded-md shadow shadow-purple-300 text-purple-500 hover:text-purple-600 duration-300">
                <span>{{ $practice->user->fullname }}</span>
            </a>
        </div>

        <livewire:practice.opinions :practice="$practice" />

    </div>
</x-app-layout>
