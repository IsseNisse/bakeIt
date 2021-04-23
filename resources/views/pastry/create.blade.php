<x-master>
    <form class="container" method="POST" action="/">
        @csrf

        <label for="name">Namn:</label>
        <input type="text" name="name" id="name">

        <label for="name">Image Path:</label>
        <input type="text" name="name" id="name">

        <label for="name">Price:</label>
        <input type="text" name="name" id="name">

        <label for="name">Description:</label>
        <input type="text" name="name" id="name">

        <button class="bg-pink-600 p-2 rounded-lg" type="submit">Create</button>
    </form>
</x-master>