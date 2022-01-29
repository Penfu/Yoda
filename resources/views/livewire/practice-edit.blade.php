<div>
    <h2 class="inline text-xl">{{ $practice->title }}</h2>

    @can('edit', $practice)
        <button wire:click="openTitleEdition" class="inline ml-1 p-1 bg-gray-200 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
        </button>

        @if (session()->has('alert'))
            <x-alert :message="session('alert')" />
        @endif

        @if ($isEditing)
            <form wire:submit.prevent="editTitle">
                <div class="py-4">
                    <div class="w-full">
                        @error('title')
                            <span
                                class="pt-2 pb-1 px-2 bg-red-200 rounded shadow text-red-500 font-medium italic">{{ $message }}</span>
                        @enderror
                        <label for="title" class="block">Titre</label>
                        <input type="text" wire:model="title" name="title" id="title" required autofocus autocomplete="off"
                            value="{{ $practice->title }}"
                            class="w-full px-4 py-2 bg-gray-50 rounded border-2 border-gray-200 outline-none focus:ring-0 focus:border-purple-500 duration-300">

                        @error('reason')
                            <span
                                class="pt-2 pb-1 px-2 bg-red-200 rounded shadow text-red-500 font-medium italic">{{ $message }}</span>
                        @enderror
                        <label for="reason" class="block mt-2">Raison du changement</label>
                        <textarea wire:model="reason" name="reason" id="reason" autocomplete="off"
                            class="w-full min-h-[32px] h-32 px-4 py-2 bg-gray-50 rounded border-2 border-gray-200 outline-none focus:ring-0 focus:border-purple-500 duration-300"></textarea>

                        <button type="submit" class="btn-primary w-full sm:w-auto">
                            Valider
                        </button>
                    </div>
                </div>
            </form>
        @endif
    @endcan
</div>
