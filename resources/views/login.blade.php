<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- <nav class="border-gray-200 dark:bg-gray-900">
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
    </nav> -->
</head>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body>
    <div class="bg-white flex justify-center items-center h-screen">
        <div class="flex items-center justify-center w-1/2 h-1/2 bg-white">
            <img src="{{ asset('userLoginPic.png') }}" alt="Placeholder Image" class="h-full">
        </div>
        <div class="bg-yellow-400 h-full w-1/2 flex flex-col items-center justify-center">

            <div>
                <h1 class="text-8xl m-4 font-extrabold leading-none tracking-tight">LISTMKR</h1>
            </div>
            <div>
                <h1 class="text-2xl font-semibold mb-4">Log in to your Account</h1>
                <h3 class="text-1xl font-semibold text-gray-700 text-center">Make your list today!</h3>
            </div>
            <div class="w-1/2">
                <form action="/attempt_login" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block m-2 text-gray-600">Email</label>
                        <input type="text" id="username" name="email" class="w-full text-base border border-gray-300 rounded-full py-2 px-5 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block m-2 text-gray-600">Password</label>
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-full py-2 px-5 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="text-blue-500">
                        <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
                    </div>
                    <div class="mb-6 text-blue-500">
                        <a href="#" class="hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
                </form>
            </div>

            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="mt-6 text-blue-500 text-center">
                <a href="/register" class="hover:underline">Sign up Here</a>
            </div>
        </div>
    </div>

    <!-- <div class="py-16 bg-yellow-400">
        <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
            <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-yellow-900">Graphic Design</h3>
                        <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                        <a href="#" class="block font-medium text-yellow-600">Know more</a>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-yellow-900">UI Design</h3>
                        <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                        <a href="#" class="block font-medium text-yellow-600">Know more</a>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/ui-design.svg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-yellow-900">UX Design</h3>
                        <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                        <a href="#" class="block font-medium text-yellow-600">Know more</a>
                    </div>
                    <img src="https://tailus.io/sources/blocks/end-image/preview/images/ux-design.svg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
                </div>
            </div>
        </div>
    </div> -->

    <footer class="p-4 rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 w-full">
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

</body>

</html>