@push('scripts')
    <script src="{{ mix('js/modal.js') }}" defer></script>
@endpush

<div class="py-4">
    @if (session()->has('alert'))
        <x-alert :message="session('alert')" />
    @endif

    <span class="flex items-center py-2">
        <span class="grow">
            @if (count($references) > 0)
                {{ count($references) }} {{ count($references) == 1 ? 'référence trouvée' : 'références trouvées' }}
            @else
                Aucune référence trouvée
            @endif
        </span>
        @auth
            <button type="button" id="btn-open-modal" class="btn-primary">Ajouter une référence</button>
        @else
            <a href="{{ route('login') }}" class="btn-primary">Ajouter une référence</a>
        @endauth
    </span>

    <div class="my-4 space-y-4">
        @foreach ($references as $reference)
            <div class="py-2 px-4 flex flex-col md:flex-row items-center space-y-4 md:space-y-0 bg-gray-100 rounded">
                <h3 class="md:basis-3/4 text-xl">{{ $reference->title }}</h3>
                <div class="w-full md:basis-1/4 flex items-center justify-end text-center">
                    <a href="{{ $reference->url }}" target="_blank"
                        class="w-full md:w-auto text-purple-500 no-underline hover:underline decoration-solid decoration-2 decoration-purple-500">
                        Voir la référence
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
