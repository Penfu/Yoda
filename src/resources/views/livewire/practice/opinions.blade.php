<div>
    <!-- Opinions -->
    <div class="py-4">
        <span class="flex items-center py-2">
            <h3 class="grow font-bold text-2xl uppercase">
                {{ $opinions->count() }} {{ $opinions->count() > 1 ? 'Opinions' : 'Opinions' }}
            </h3>
            <a href="#my-opinion"
                class="py-2 px-4 bg-purple-500 hover:bg-purple-600 rounded shadow shadow-purple-300 text-white duration-300">
                {{ isset($userOpinion) ? 'Voir mon opinion' : 'Ajouter une opinion' }}
            </a>
        </span>

        <div class="flex flex-col space-y-8">
            @forelse ($opinions as $opinion)
                <livewire:practice.opinion :opinion="$opinion" :wire:key="$opinion->id" />
            @empty
                <p>Aucune opinion pour le moment.</p>
            @endforelse
            @if (session()->has('alert'))
                <x-alert :message="session('alert')" delay="5" />
            @endif
        </div>
    </div>

    <!-- Opinon Form -->
    <div class="pt-4 pb-16">
        @isset($userOpinion)
        @else
            <h1 class="font-bold text-2xl uppercase">Votre opinion</h1>
            @if (Auth::check())
                <form wire:submit.prevent="post">
                    @csrf
                    <div class="inline-block group my-2 select-none hover:cursor-help">
                        <span
                            class="inline-block my-1 py-1 px-2 rounded shadow font-semibold text-gray-800 {{ $errors->has('description') ? 'bg-red-200 shadow-red-300' : 'bg-emerald-200 shadow-emerald-300' }}">
                            {{ strlen($description) }} / 5000
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="inline-block h-4 w-4 -mt-3 -mr-1 font-normal text-gray-700" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <div role="tooltip"
                            class="hidden group-hover:inline-block group-hover:animate-fast-fade py-1 px-2 bg-gray-200 rounded shadow font-medium italic">
                            @error('description')
                                <span>{{ $message }}</span>
                            @else
                                <span>L'opinion saisie est valide, vous pouvez la poster à tout moment!</span>
                            @enderror
                        </div>
                    </div>

                    <textarea wire:model="description" id="my-opinion"
                        class="w-full min-h-[64px] h-64 p-4 bg-gray-100 rounded border-2 border-gray-200 outline-none focus:ring-0 focus:border-purple-500 duration-300"
                        placeholder="Votre opinion..."></textarea>
                    <button type="submit" {{ $errors->has('description') ? 'disabled' : '' }}
                        class="w-full sm:w-auto py-2 px-4 bg-purple-500 hover:bg-purple-600 disabled:bg-purple-500 rounded shadow shadow-purple-300 text-white disabled:cursor-not-allowed duration-300">
                        Poster l'opinion
                    </button>
                </form>
            @else
                <span>Veuillez vous</span>
                <a href="{{ route('login') }}" class="text-purple-500 hover:text-purple-600 duration-300">connecter à
                    votre compte</a>
                <span>afin de voir ou partager votre opinon sur cette pratique.</span>
            @endif
        @endisset
    </div>
</div>
