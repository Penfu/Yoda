<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-6xl font-bold uppercase">{{ $domain->name ?? 'Tous les domaines' }}</h1>
        <div class="py-12">
            <livewire:practices :domain="$domain ?? null" />
        </div>
    </div>
</x-app-layout>
