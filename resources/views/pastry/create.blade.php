<x-master>
    <div class="flex items-center justify-center mt-5">
        <form method="POST" action="/create" enctype="multipart/form-data">
            @csrf
    
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="name">Namn:</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name">

                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>            
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="img_path">Bild</label>
                <input class=""type="file" name="img_path" id="img_path">

                @error('img_path')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>            
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="price">Pris:</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="price" id="price">

                @error('price')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>            
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="summary">Sammanfattning:</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="summary" id="summary">

                @error('summary')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>            
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="description">Beskrivning:</label>
                <textarea class="border py-2 px-3 text-grey-darkest" name="description" id="description" rows="5"></textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>            
                @enderror
            </div>
    
            <button class="bg-pink-600 p-2 rounded-lg" type="submit">Create</button>
        </form>
    </div>
</x-master>