<x-master>

    @foreach ($orders as $order)
        <h1>{{ $order->id }}</h1>
        @foreach ($order->pastries as $pastry)
            <h3>{{ $pastry->name }}</h3>
        @endforeach
    @endforeach

</x-master>