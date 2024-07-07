<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *, ::after, ::before { 
            box-sizing: border-box; 
            border-width: 0; 
            border-style: solid; 
            border-color: #e5e7eb; 
        }
        ::after, ::before { --tw-content: ''; }
        :host, html { 
            line-height: 1.5; 
            -webkit-text-size-adjust: 100%; 
            -moz-tab-size: 4; 
            tab-size: 4; 
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; 
            font-feature-settings: normal; 
            font-variation-settings: normal; 
            -webkit-tap-highlight-color: transparent; 
        }
        body { 
            margin: 0; 
            line-height: inherit; 
        }

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

        /* Body styles to ensure full page application */
        body, html {
            height: 100%;
            overflow: auto;
        }
    </style>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <link rel="stylesheet" href="build/assets/app-ix0mzfeY.css">
    </head>
    <body>
        <div class="font-sans antialiased bg-gray-600 dark:text-white/50 m-0">
            <div class="bg-gray-50 text-black/50 bg-gray-400 dark:text-white/50 m-0">
            <header class="w-screen border-b-rounded grid grid-cols-2 items-center py-10 lg:grid-cols-3 bg-gray-800">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight pl-10">Gage's Portfolio</span>
            </div>
                            <div class="flex lg:justify-center lg:col-start-2"></div>
                            
                            <?php if(Route::has('login')): ?>
                                <nav class="-mx-3 flex flex-1 justify-end pr-10 text-white">
                                    <?php if(auth()->guard()->check()): ?>
                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <button type="button" class="text-white mr-5 bg-gray-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-700 dark:hover:bg-white dark:focus:ring-white dark:hover:text-black">
                                        <a href="mailto:gage.php@proton.me">Contact Me</a>
                                        </button>
                                        <button class="text-white"type="submit">Logout</button>
                                    </form>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('login')); ?>" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Log in
                                        </a>

                                        <?php if(Route::has('register')): ?>
                                            <a href="<?php echo e(route('register')); ?>" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                Register
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </nav>
                            <?php endif; ?>
                        </header>
                <div class="relative min-h-screen min-w-screen flex flex-col items-center justify-center selection:bg-red-400 selection:text-white bg-gray-100">
                    <div class="relative w-full m-0 max-w-2xl px-6 lg:max-w-7xl bg-">
                        
                        
                        <div class="flex items-center justify-center mt-0 sm:-mt-20 min-h-screen bg-gray-100">
                            <div class="max-w-sm bg-gray-800 border border-gray-900 rounded-lg overflow-hidden">
                                <a href="#">
                                    <img class="w-full rounded-t-lg" src="<?php echo e(asset('images/computer.jpg')); ?>" alt="Default Image">
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome To My Portfolio!</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        My name is Gage and I'm a freelance software developer from Ontario, Canada. I have
                                        experience with multiple programming languages and frameworks such as
                                        Python (Django, Flask, PyGame), PHP(Laravel), WordPress and Javascript. Click below to view a variety of
                                        projects I have put together as a solo developer!
                                    </p>
                                    <a href="/projects" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        View Projects
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                            Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/markus/laravel-app/main-app/resources/views/welcome.blade.php ENDPATH**/ ?>