<h1>
    Hello <?=$name?>
</h1>
<form method="POST" action="/">
    <div class="w-full">
        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
        <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus bg-white" name="name" id="name">
    </div>
    <div class="">
        <input class="shadow bg-blue-400 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" value="Envoyer"/>
    </div>
</form>