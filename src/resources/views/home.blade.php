<x-app-layout>
    <div class="max-w-7xl mx-auto my-20 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 grid-flow-row gap-4">
            <div class="col-span-1">
                <h1 class="text-6xl font-bold uppercase">Best Practices.</h1>
                <p class="py-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi
                    ipsam
                    quasi soluta ut fuga omnis maxime! Quasi dolores voluptatibus atque eligendi, aspernatur doloremque
                    consequuntur, deserunt quas similique magni possimus.</p>
                <div class="flex-none mt-4">
                    <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded drop-shadow">Explore now</a>
                </div>
            </div>
            <div class="col-start-2 col-end-4 md:col-start-3 md:col-end-4">
                <div class="my-4 bg-gray-800 rounded-md">
                    <h2 class="px-4 py-2 text-xl font-bold text-green-500">Good</h2>
                    <code class="block p-4">
                        <span class="-mx-1 text-purple-500">if</span>
                        <span class="ml-1 -mr-1 text-blue-300">(</span>
                        <span class="-mx-1 text-blue-300">'</span>
                        <span class="-mx-1 text-green-500">green</span>
                        <span class="-mx-1 text-blue-300">'</span>
                        <span class="ml-1 -mr-1 text-blue-300">=</span>
                        <span class="-ml-1 mr-1 text-blue-300">=</span>
                        <span class="-mx-1 text-blue-300">$yodaColor</span>
                        <span class="-mx-1 text-blue-300">)</span>
                        <span class="ml-1 text-blue-300">{</span>
                        <span class="ml-6 block text-gray-500">// ...</span>
                        <span class="-mx-1 text-blue-300">}</span>
                    </code>
                </div>
                <div class="my-4 bg-gray-800 rounded-md">
                    <h2 class="px-4 py-2 text-xl font-bold text-red-500">Bad</h2>
                    <code class="block p-4">
                        <span class="-mx-1 text-purple-500">if</span>
                        <span class="ml-1 -mr-1 text-blue-300">(</span>
                        <span class="-mx-1 text-blue-100">$yodaColor</span>
                        <span class="ml-1 -mr-1 text-blue-300">=</span>
                        <span class="-ml-1 mr-1 text-blue-300">=</span>
                        <span class="-mx-1 text-blue-300">'</span>
                        <span class="-mx-1 text-green-500">green</span>
                        <span class="-mx-1 text-blue-300">'</span>
                        <span class="-mx-1 text-blue-300">)</span>
                        <span class="ml-1 text-blue-300">{</span>
                        <span class="ml-6 block text-gray-500">// ...</span>
                        <span class="-mx-1 text-blue-300">}</span>
                    </code>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
