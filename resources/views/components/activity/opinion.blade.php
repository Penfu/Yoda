<div>
    <h3 class="inline-block text-lg">
        Ajout d'une opinion sur une
        <a href="{{ route('practice', ['practice' => $opinion->practice]) }}" class="font-semibold">
            pratique
        </a>
    </h3>
    <span class="inline ml-2 text-gray-500 text-sm">{{ $opinion->created_at->diffForHumans() }}</span>

    <div class="p-4 bg-gray-100 rounded-lg">
        <a href="{{ route('practices.byDomain', ['domain' => $opinion->practice->domain]) }}"
            class="py-1 px-2 bg-purple-200 rounded text font-medium text-purple-500">
            {{ $opinion->practice->domain->name }}</a>
        <a href="{{ route('practice', ['practice' => $opinion->practice]) }}"
            class="ml-2 hover:underline hover:text-purple-500">
            {{ $opinion->practice->title }}</a>

        <div class="my-2">
            <p>{{ Str::of($opinion->description)->words(35) }}</p>
        </div>
    </div>
</div>
