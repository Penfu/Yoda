<a href="{{ route('practice', ['practice' => $practice->id]) }}">
    <div
        class="flex flex-col h-full p-6 hover:scale-105 hover:cursor-pointer transition duration-300 bg-gray-100 rounded-xl shadow animate-fade-in-down">
        @empty(session('domain'))
            <h2 class="my-2 font-bold text-xl">{{ $practice->domain->name }}</h2>
        @endempty

        <p class="my-2 flex-grow">{{ Str::of($practice->description)->words(35) }}</p>
        <span class="justify-self-end text-right">
            Modifié le {{ $practice->updated_at->translatedFormat('j F Y') }}
        </span>
    </div>
</a>
