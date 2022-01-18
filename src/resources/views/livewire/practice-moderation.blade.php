<a href="{{ route('practice', ['practice' => $practice->id]) }}">
    <div
        class="flex flex-col h-full p-6 group hover:cursor-pointer transition duration-300 bg-white rounded-md shadow hover:shadow-lg animate-fade-in-down">
        @empty(session('domain'))
            <h2 class="my-2 font-bold text-xl text-gray-900 uppercase">{{ $practice->domain->name }}</h2>
        @endempty

        <p class="my-2 grow text-gray-700 group-hover:text-gray-900">{{ Str::of($practice->description)->words(35) }}
        </p>

        <div>
            <span
                class="my-1 px-2 py-1 bg-purple-200 rounded-md shadow shadow-purple-300 text-purple-500 hover:text-purple-600 duration-300">
                {{ $practice->publicationState->name }}
            </span>
            <span class="float-right italic">
                Modifié le {{ $practice->updated_at->translatedFormat('j F Y') }}
            </span>
        </div>
    </div>
</a>
