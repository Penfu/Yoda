<div>
    <h3 class="inline-block text-lg">
        Ajout d'une
        <a href="{{ route('practice', ['practice' => $practice]) }}" class="font-semibold">
            pratique
        </a>

    </h3>
    <span class="inline ml-2 text-gray-500 text-sm">{{ $practice->created_at->diffForHumans() }}</span>

    <div class="p-4 bg-gray-100 rounded-lg">
        <a href="{{ route('practices.byDomain', ['domain' => $practice->domain]) }}"
            class="py-1 px-2 bg-purple-200 rounded text font-medium text-purple-500">
            {{ $practice->domain->name }}</a>
        <a href="{{ route('practice', ['practice' => $practice]) }}" class="ml-2 font-semibold hover:text-purple-500">
            {{ $practice->title }}</a>

        <p class="my-2">{{ Str::of($practice->description)->words(35) }}</p>
    </div>
</div>
