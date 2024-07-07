<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gage's Portfolio</title>
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Custom Scrollbar Styles */
        ::-webkit-scrollbar {
            width: 12px; /* Width of the scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: #333; /* Color of the scrollbar track */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #888; /* Color of the scrollbar thumb */
            border-radius: 10px; /* Roundness of the scrollbar thumb */
            border: 3px solid #333; /* Adds a border around the thumb */
        }

        /* For Firefox */
        * {
            scrollbar-width: thin; /* Scrollbar width */
            scrollbar-color: #888 #333; /* Scrollbar thumb color and track color */
        }
    </style>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link rel="stylesheet" href="<?php echo e(secure_asset('build/assets/app-D8tMRP4W.css')); ?>">
    <script src="<?php echo e(secure_asset('build/assets/app-Bg1aHGgo.js')); ?>" defer></script>
</head>
<body class="bg-gray-100">
<header class="w-screen border-b-rounded flex items-center justify-between py-4 bg-gray-800">
    <div class="flex items-center text-white pl-4">
        <span class="font-semibold text-xl tracking-tight whitespace-nowrap">Gage's Portfolio</span>
    </div>
    <div class="hidden lg:flex lg:flex-grow lg:justify-center"></div>
    <?php if(Route::has('login')): ?>
        <nav class="flex items-center justify-end pr-4 space-x-2">
            <?php if(auth()->guard()->check()): ?>
                <form method="POST" action="<?php echo e(route('logout')); ?>" class="flex space-x-2">
                    <?php echo csrf_field(); ?>
                    <button type="button" class="text-white bg-gray-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-700 dark:hover:bg-white dark:focus:ring-white dark:hover:text-black">
                        <a href="mailto:gage.php@proton.me">Contact Me</a>
                    </button>
                    <button type="submit" class="text-white bg-gray-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-700 dark:hover:bg-white dark:focus:ring-white dark:hover:text-black">
                        Logout
                    </button>
                </form>
            <?php else: ?>
                <div class="flex space-x-2">
                    <a href="<?php echo e(route('login')); ?>" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white whitespace-nowrap">
                        Log in
                    </a>
                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white whitespace-nowrap">
                            Register
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </nav>
    <?php endif; ?>
</header>

<div class="main-content bg-gray-200 py-8 px-6 flex justify-center items-center min-h-screen">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg text-center">
        <img class="w-full rounded-t-lg" src="<?php echo e(asset('images/computer.jpg')); ?>" alt="Default Image">
        <h5 class="my-4 text-2xl font-bold text-gray-900">Welcome To My Portfolio!</h5>
        <p class="mb-4 text-gray-700">
            My name is Gage and I'm a freelance software developer from Ontario, Canada. I have
            experience with multiple programming languages and frameworks such as
            Python (Django, Flask, PyGame), PHP (Laravel), WordPress, and JavaScript. Click below to view a variety of
            projects I have put together as a solo developer!
        </p>
        <a href="/projects" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            View Projects
            <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
</body>
</html>
<?php /**PATH /home/markus/laravel-app/main-app/resources/views/welcome.blade.php ENDPATH**/ ?>