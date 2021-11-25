<div
    class="flex flex-col p-6 hover:scale-105 hover:cursor-pointer transition duration-300 bg-gray-100 rounded-xl shadow animate-fade-in-down">
    <h2 class="my-2 font-bold text-xl"> {{ $practice->domain->name }}</h2>
    <p class="my-2 flex-grow"> {{ $practice->description }} </p>
    <span class="justify-self-end text-right"> {{ $practice->updated_at->translatedFormat('j F Y'); }} </span>
</div>
