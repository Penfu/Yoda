<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <div class="my-4">
            <livewire:profile-editable-informations :user="$user" />
        </div>
        <div class="my-4">
            <livewire:profile-activities :user="$user" />
        </div>
    </div>
</x-app-layout>
