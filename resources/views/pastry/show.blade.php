<x-master>
    <div class="flex items-center justify-center mt-8">
        <div class="grid w-3/4 lg:grid-flow-col lg:auto-cols-auto lg:grid-rows-2 lg:w-2/4">
            <div>
                <img class="w-full h-96 object-cover lg:pr-8" src="{{ $pastry->img_path }}" alt="">
            </div>
            <div class=" lg:pr-8 relative">
                <h1 class="m-2 text-center text-4xl">{{ $pastry->name }}</h1>
                <p class="mx-4">{{ $pastry->description }}</p>
                <div class="lg:absolute lg:bottom-0 lg:right-0 pr-8 pt-8 mx-4 flex">
                    <a href="/{{ $pastry->name }}/edit">
                        <button class="font-medium italic px-2 py-2 hover:underline">Edit</button>
                    </a>
                    <form method="POST" action="/{{ $pastry->name }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-red-600 font-bold hover:underline px-2 py-2">Delete</button>
                    </form>
                </div>
            </div>
            <div class="lg:row-span-full border-l-2 border-pink-600 mt-14 lg:mt-0">
                <h1 class="pl-8 pt-4 text-pink-600 font-bold uppercase">Ingrediensers</h1>
            </div>
        </div>
    </div>
</x-master>