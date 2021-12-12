<div>
    <!-- Opinions -->
    <div class="py-4">
        <span class="flex items-center py-2">
            <h3 class="grow font-bold text-2xl uppercase">
                {{ $opinions->count() }} {{ $opinions->count() > 1 ? 'Opinions' : 'Opinions' }}
            </h3>
            @isset($userOpinion)
                <a href="#my-opinion" class="py-2 px-4 bg-purple-500 hover:bg-purple-600 rounded text-white duration-300">
                    Voir mon opinion
                </a>
            @else
                <a href="#my-opinion" class="py-2 px-4 bg-purple-500 hover:bg-purple-600 rounded text-white duration-300">
                    Ecrire une opinion
                </a>
            @endisset
        </span>

        <div class="flex flex-col space-y-8">
            @forelse ($opinions as $opinion)
                @if (session()->has('opinion-status') && $opinion->user == Auth::user())
                    <div x-data="{ show: true }" x-show="show"
                        class="flex items-center p-4 bg-emerald-100 rounded font-semibold text-emerald-500" role="alert">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="grow">{{ session('opinion-status') }}</span>
                        <button type="button" data-dismiss="alert" aria-label="Close" @click="show = false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                @endif
                <livewire:practice.opinion :opinion="$opinion" :wire:key="$opinion->id" />
            @empty
                <p>Aucune opinion pour le moment.</p>
            @endforelse
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
                            class="inline-block my-1 py-1 px-2 rounded font-semibold text-gray-800 {{ $errors->has('description') ? 'bg-red-200' : 'bg-emerald-200' }}">
                            {{ strlen($description) }} / 5000
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-3 -mr-1 text-gray-800"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <div role="tooltip"
                            class="hidden group-hover:inline-block group-hover:animate-fast-fade py-1 px-2 bg-gray-200 rounded font-medium italic">
                            @error('description')<span>{{ $message }}</span>
                            @else
                                <span>L'opinion saisie est valide, vous pouvez la poster à tout moment!</span>
                            @enderror
                        </div>
                    </div>

                    <textarea wire:model="description" id="my-opinion"
                        class="w-full min-h-[64px] h-64 p-4 bg-gray-100 rounded border-2 border-gray-200 outline-none focus:ring-0 focus:border-purple-500 duration-300"
                        placeholder="Votre opinion..."></textarea>
                    <button type="submit" {{ $errors->has('description') ? 'disabled' : '' }}
                        class="w-full sm:w-auto py-2 px-4 bg-purple-500 hover:bg-purple-600 disabled:bg-purple-500 rounded text-white disabled:cursor-not-allowed duration-300">
                        Poster l'opinion
                    </button>
                </form>
            @else
                <span>Veuillez vous</span>
                <a href="{{ route('login') }}" class="text-purple-500 hover:text-purple-600 duration-300">
                    connecter à votre compte
                </a>
                <span>afin de voir ou partager votre opinon sur cette pratique.</span>
            @endif
        @endisset
    </div>
</div>
