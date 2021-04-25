<x-master>
    <div class="flex items-center justify-center mt-5">
        <form method="POST" action="/" enctype="multipart/form-data">
            @csrf
    
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="name">Namn:</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image">Bild</label>
                <input class=""type="file" name="image" id="image">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="price">Pris:</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="price" id="price">    
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="description">Beskrivning:</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="description" id="description">    
            </div>
    
            <button class="bg-pink-600 p-2 rounded-lg" type="submit">Create</button>
        </form>
    </div>
</x-master>