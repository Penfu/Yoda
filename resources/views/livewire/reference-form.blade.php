<div wire.ignore id="modal" class="hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Modal background -->
        <div id="modal-background" class="fixed inset-0 bg-black bg-opacity-50" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <!-- Modal -->
        <div
            class="w-full sm:my-8 sm:align-middle sm:max-w-xl inline-block align-bottom rounded-lg text-left overflow-hidden bg-white shadow-xl transform transition-all">
            <!-- Header -->
            <div class="px-6 py-4 bg-gray-200">
                <h3 class="text-lg leading-6 font-bold text-center sm:text-left uppercase">
                    Ajout d'une référence
                </h3>
            </div>
            <!-- Content -->
            <form wire:submit.prevent="post" class="px-6">
                <div class="py-4">
                    <div class="py-4 w-full">
                        <label for="title" class="block">* Titre</label>
                        <textarea wire:model.defer="title" id="title" name="title" required autofocus
                            class="w-full min-h-[32px] h-32 px-4 py-2 bg-gray-50 rounded border-2 border-gray-200 outline-none focus:ring-0 focus:border-purple-500 duration-300"></textarea>
                        <label for="url" class="block mt-2">Url</label>
                        <input wire:model.defer="url" type="text" name="url" id="url" autocomplete="off"
                            class="w-full px-4 py-2 bg-gray-50 rounded border-2 border-gray-200 outline-none focus:ring-0 focus:border-purple-500 duration-300">
                    </div>
                </div>
                <!-- Footer -->
                <div class="sm:flex sm:flex-row-reverse py-4">
                    <button type="submit" class="btn-primary w-full sm:w-auto sm:ml-3">
                        Valider
                    </button>
                    <button type="button" id="btn-cancel"
                        class="w-full px-4 py-2 mt-3 inline-flex justify-center bg-gray-200 rounded font-medium sm:mt-0 sm:ml-3 sm:w-auto">
                        Annuler
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
