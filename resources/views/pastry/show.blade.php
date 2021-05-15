<x-master>
    <div class="flex items-center justify-center mt-20">
        <div class="grid w-3/4 lg:grid-flow-col lg:auto-cols-auto lg:grid-rows-2 lg:w-2/4">
            <img class="w-full h-96 object-cover lg:pr-8" src="{{ $pastry->img_path }}" alt="">
            <div class="text-center lg:pr-8">
                <h1 class="m-2 text-4xl">{{ $pastry->pastry_name }}</h1>
                <p class="mx-4">{{ $pastry->description }}</p>
            </div>
            <div class="lg:row-span-full border-l-2 border-pink-600">
                <h1 class="pl-8 pt-4 text-pink-600 font-bold uppercase">Ingrediensers</h1>
            </div>
        </div>
    </div>
</x-master>