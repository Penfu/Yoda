<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <div>
            <h1 class="text-6xl font-bold uppercase">Best Practices.</h1>
            <p class="py-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi
                ipsam
                quasi soluta ut fuga omnis maxime! Quasi dolores voluptatibus atque eligendi, aspernatur doloremque
                consequuntur, deserunt quas similique magni possimus.
            </p>
            <div class="pt-2">
                <a href="{{ route('domains') }}" class="px-4 py-2 bg-purple-500 text-white rounded shadow-xl">
                    En voir plus
                </a>
            </div>
        </div>

        <div class="py-12">
            <livewire:practice.practice-container :days="$days" />
        </div>
    </div>
</x-app-layout>
