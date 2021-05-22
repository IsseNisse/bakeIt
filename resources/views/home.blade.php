<x-master>
    <div class="flex items-center justify-center mt-14">
        <div class="grid justify-items-start lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 w-7/12">
            <h1 class="col-start-1 col-span-2">Hej & Välkommen</h1>
            <p class="col-start-1 col-span-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis placeat, neque asperiores impedit recusandae magni odio, vel, odit dicta cumque perferendis. Officiis labore magnam est, quibusdam vero necessitatibus nulla quas.</p>
        </div>
    </div>
    <div class="flex items-center justify-center mt-14">
        <div class="grid justify-items-start lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-14 w-7/12">
            @forelse ($pastries as $pastry)
            <a href="/{{ $pastry->name }}">
              <div class="m-0 max-w-xs rounded overflow-hidden shadow-lg">
                <img class="w-full max-h-64 h-64 object-cover" src="{{ $pastry->img_path }}" alt="">
                <div class="px-3 py-4">
                  <div class="font-bold text-xl mb-2">{{ $pastry->name }}</div>
                  <p class="text-gray-700 text-base mb-5">
                    {{ $pastry->summary }}
                  </p>
                  <p>
                      {{ $pastry->price }}
                  </p>
                </div>
                <div class="px-3 pt-4 pb-2">
                  <span class="inline-block bg-pink-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-pink-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-pink-600 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">#winter</span>
                </div>
              </div>
            </a>

            @empty
              <p class="bg-pink-200 p-4 col-span-2">Det finns inga produkter tillgängliga för tillfället</p>
            @endforelse
            <div class="mx-4">
              <a href="{{ route('create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FA00FF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <line x1="12" y1="5" x2="12" y2="19" />
                  <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
              </a>
            </div>
        </div>
    </div>

      <form class="flex justify-center mt-8" method="POST" action="{{ route('home') }}">
      @csrf
      
      <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 w-7/12">
        <div class="flex flex-col mb-4">
          <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="name">Namn:</label>
          <input class="border-0 border-b-2 border-pink-600 py-2 px-3 text-grey-darkest" type="text" name="name" id="name">
        </div>
  
        <div class="flex flex-col mb-4">
          <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="phone">Telefon:</label>
          <input class="border-0 border-b-2 border-pink-600 py-2 px-3 text-grey-darkest" type="text" name="phone" id="phone">
        </div>
  
        <div class="flex flex-col mb-4">
          <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="info">Extra info:</label>
          <textarea class="border-0 border-b-2 border-pink-600 py-2 px-3 text-grey-darkest" name="info" id="info" rows="5" placeholder="T.ex. Allergier etc."></textarea>  
        </div>
      </div>

      </form>
</x-master>