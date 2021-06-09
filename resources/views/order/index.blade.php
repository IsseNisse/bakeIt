<x-master>

    <div class="m-0 max-w-4xl rounded overflow-hidden shadow-lg">
        
        <div class="flex justify-between">
            <div class="flex m-2">
                <h1 class="mr-2">Name</h1>
                <h2 class="opacity-40 font-bold">0725462666</h2>
            </div>
            <div class="flex m-2">
                <div class="flex flex-col items-center">
                    <h4>20:41</h4>
                    <h4>2021-06-08</h4>
                </div>
                <button class="collapsible m-2" type="button">drop</button>
            </div>
        </div>

        <div class="flex hidden overflow-hidden">
            <div class="max-w-xs m-2">
                <h3>Extra Info:</h3>
                <p>Inga nötter, ingen gluten, ingen laktos och två satser kärleksmums tack!</p>
            </div>
            <ul class="m-2">
                <li>Kärleksmums</li>
                <li>Rulltårta</li>
            </ul>
        </div>
    </div>

    @foreach ($orders as $order)
        <h1>{{ $order->id }}</h1>
        @foreach ($order->pastries as $pastry)
            <h3>{{ $pastry->name }}</h3>
        @endforeach
    @endforeach

</x-master>