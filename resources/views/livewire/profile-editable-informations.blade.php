<div>
    <div class="mb-2">
        <h2 class="text-6xl font-bold">{{ $user->fullname }}</h2>
        <h3 class="text-gray-500 text-xl">{{ $user->name }}</h3>
    </div>
    <p>{{ $user->description }}</p>

    @can('update', $user)
        <button id="btn-edit-informations" class="btn-primary w-full sm:w-auto">
            Editer le profil
        </button>
    @endcan
</div>
