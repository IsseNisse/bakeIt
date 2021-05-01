<x-master>
    <div class="flex items-center justify-center mt-14">
        <div class="grid justify-items-start grid-cols-3 gap-2 w-7/12">
            <h1 class="col-start-1 col-span-2">Hej & Välkommen</h1>
            <p class="col-start-1 col-span-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis placeat, neque asperiores impedit recusandae magni odio, vel, odit dicta cumque perferendis. Officiis labore magnam est, quibusdam vero necessitatibus nulla quas.</p>
        </div>
    </div>
    <div class="flex items-center justify-center mt-14">
        <div class="grid justify-items-center lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-14 w-7/12">
            @foreach ($pastries as $pastry)
            <a href="#">
              <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('storage/' . $pastry->img_path) }}" alt="">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">{{ $pastry->pastry_name }}</div>
                  <p class="text-gray-700 text-base mb-5">
                    {{ $pastry->description }}
                  </p>
                  <p>
                      {{ $pastry->price }}
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-pink-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-pink-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-pink-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#winter</span>
                </div>
              </div>
            </a>
            @endforeach
        </div>
    </div>
</x-master>