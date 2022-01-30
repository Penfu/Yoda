<div>
    <h3 class="inline-block text-lg">{{ $feedback->points == 1 ? 'Vote pour une opinion' : 'Vote contre une opinion' }}
    </h3>
    <span class="inline ml-2 text-gray-500 text-sm">{{ $feedback->opinion->created_at->diffForHumans() }}</span>

    <div class="p-4 bg-gray-100 rounded-lg">
        <div class="flex items-center space-x-2">
            @if ($feedback->points === 1)
                <div class="h-8 w-8 bg-green-200 rounded-md text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                    </svg>
                </div>
            @elseif ($feedback->points === -1)
                <div class="h-8 w-8 bg-red-200 rounded-md text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            @endif
            <a href="{{ route('practices.byDomain', ['domain' => $feedback->opinion->practice->domain]) }}"
                class="py-1 px-2 bg-purple-200 rounded text font-medium text-purple-500">
                {{ $feedback->opinion->practice->domain->name }}</a>
            <a href="{{ route('practice', ['practice' => $feedback->opinion->practice]) }}"
                class="hover:underline hover:text-purple-500">
                {{ $feedback->opinion->practice->title }}</a>
        </div>

        <!-- Practice -->
        <div class="my-2">
            <p>{{ Str::of($feedback->opinion->description)->words(35) }}</p>
        </div>
    </div>
</div>
