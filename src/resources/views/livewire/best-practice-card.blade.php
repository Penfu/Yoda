<div class="p-8 hover:scale-105 hover:cursor-pointer transition duration-300 my-8 bg-gray-100 rounded-xl shadow">
    <h2 class="my-2 font-bold text-xl"> {{ $bestPractice->name }}</h2>
    <p class="my-2"> {{$bestPractice->description }} </p>
    <div class="text-right">
        <button wire:click="delete" class="px-4 py-2 bg-red-500 uppercase font-bold text-sm text-white rounded">Supprimer</button>
    </div>
</div>
