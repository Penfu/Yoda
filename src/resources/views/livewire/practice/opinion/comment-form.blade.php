<div class="flex py-4">
    @auth
        <form wire:submit.prevent="post" class="grow group flex flex-col sm:flex-row items-end space-y-2 sm:space-x-2">
            @csrf
            <textarea x-data="{ resize: () => { $el.style.height = '5px'; $el.style.height = $el.scrollHeight + 'px' }}"
                @input="resize()" wire:model.defer="comment" placeholder="Ecrire un commentaire..."
                class="grow w-full h-10 max-h-58 rounded-md outline-none border-none focus:ring-0 outline-2 focus:outline-purple-500 text-base resize-none"></textarea>
            <button type="submit"
                class="w-full sm:w-auto py-2 px-4 bg-purple-500 hover:bg-purple-600 disabled:bg-purple-500 rounded shadow shadow-purple-300 text-white disabled:cursor-not-allowed duration-300">
                Poster
            </button>
        </form>
    @else
        <span>
            Veuillez vous
            <a href="{{ route('login') }}" class="text-purple-500 hover:text-purple-600 duration-300">
                connecter à votre compte
            </a>
            afin de partager votre opinon sur cette pratique.
        </span>
    @endauth
</div>
