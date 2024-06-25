<!DOCTYPE html>
<html>

<head>
    <title>List Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-right justify-between mx-auto p-4">
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/listbuilder" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Manage</a>
                    </li>
                    <li>
                        <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                    </li>
                    <li>
                        <a href="/register" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-8 px-4">

        <div class="bg-yellow-400 p-4 rounded-lg shadow-lg md:p-6 dark:bg-gray-800">
            <h1 class="text-4xl font-bold mb-4 bg-yellow-500 text-white p-2.5 rounded-lg text-center">List Builder</h1>

            <p>Hello <span class="font-semibold">{{ $name }}</span>, please begin building your list of items.</p>
            <p>When you are done, you can <a href="/logout" class="text-blue-500 hover:underline">logout</a>.</p>

            <form action="/newitem" method="post" class="mt-6">
                @csrf
                <div class="mb-4">
                    <label for="item" class="block mb-2">Item:</label>
                    <input type="text" name="item" id="item" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" />
                </div>

                <div class="mb-4">
                    <label for="description" class="block mb-2">Description:</label>
                    <input type="text" name="description" id="description" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" />
                </div>

                <div class="mb-4">
                    <label for="due_date" class="block mb-2">Due Date:</label>
                    <input type="datetime-local" name="due_date" id="due_date" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" />
                </div>

                <button type="submit" class="bg-yellow-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 mt-3">Add Item</button>
                <a href="/saveitem"> <button type="button" class="bg-yellow-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 mt-3">Save</button> </a>
                <a href="/emailitem"> <button type="button" class="bg-yellow-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 mt-3">Email</button> </a>


            </form>

            <hr class="my-8">

            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-4">List</h2>
            </div>

            @if ($items->isNotEmpty())
            <table class="mt-4 w-full border-collapse">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Item</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr class="bg-white shadow-md border-yellow-400 border-2 rounded-lg">
                        <td class="px-4 py-3 rounded-tl-lg rounded-bl-lg text-center">{{ $item->name }}</td>
                        <td class="px-4 py-3 text-center">{{ $item->description }}</td>
                        <td class="px-4 py-3 rounded-tr-lg rounded-br-lg text-center">{{ $item->due_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="italic text-gray-500 mt-4">No items added yet!</p>
            @endif


        </div>
        <br>
        <br>
        <div class="overflow-x-auto">
            <h2 class="text-2xl font-bold mb-4">Unsaved List</h2>
            <a href="/clearList" class="text-blue-500 hover:underline">Clear List</a>
            <table class="table-auto border-collapse border border-gray-800 w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-800 px-4 py-2">Name</th>
                        <th class="border border-gray-800 px-4 py-2">Description</th>
                        <th class="border border-gray-800 px-4 py-2">Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($session_items as $item)
                    <tr class="border border-gray-800">
                        <td class="border border-gray-800 px-4 py-2">{{ $item['name'] }}</td>
                        <td class="border border-gray-800 px-4 py-2">{{ $item['description'] }}</td>
                        <td class="border border-gray-800 px-4 py-2">{{ $item['due_date'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 w-full">
            <div class="max-w-2xl mx-auto">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#" class="hover:underline" target="_blank">Ahmet Tech Enterprises™</a>. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 sm:mt-0">
                    <li>
                        <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:underline dark:text-gray-400">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>