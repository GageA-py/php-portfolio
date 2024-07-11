<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gage's Portfolio</title>

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
    <link rel="stylesheet" href="<?php echo e(secure_asset('build/assets/app-ix0mzfeY.css')); ?>">
    <script src="<?php echo e(secure_asset('build/assets/app-Bg1aHGgo.js')); ?>" defer></script>
    </head>

    <header class="w-screen border-b-rounded flex items-center justify-between py-4 bg-gray-800">
    <div class="flex items-center text-white pl-4">
        <a href="/projects"><span class="font-semibold text-xl tracking-tight whitespace-nowrap">Gage's Portfolio</span></a>
    </div>
    <div class="hidden lg:flex lg:flex-grow lg:justify-center"></div>
    <?php if(Route::has('login')): ?>
        <nav class="flex items-center justify-end pr-4 space-x-2">
            <?php if(auth()->guard()->check()): ?>
                <div class="relative">
                    <button type="button" class="text-white hover:text-blue-300 focus:outline-none dark:text-gray-300" id="userDropdown">
                        <?php echo e(Auth::user()->name); ?> (<?php echo e(Auth::user()->email); ?>)
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg overflow-hidden z-10 hidden" id="dropdown">
                        <div class="px-4 py-2">
                        <a href="<?php echo e(route('subscribe.page')); ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Subscribe</a>
                            <a href="mailto:<?php echo e(Auth::user()->email); ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Contact Me</a>
                        </div>
                        <div class="border-t border-gray-200"></div>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900 focus:outline-none">Logout</button>
                        </form>
                        <?php if(Auth::user()->subscribed): ?>
                            <div class="border-t border-gray-200"></div>
                            <a href="<?php echo e(route('unsubscribe.page')); ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Unsubscribe</a>
                        <?php else: ?>
                            <div class="border-t border-gray-200"></div>
                            
                        <?php endif; ?>
                    </div>
                </div>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const userDropdown = document.getElementById('userDropdown');
        const dropdown = document.getElementById('dropdown');

        userDropdown.addEventListener('click', function() {
            dropdown.classList.toggle('hidden');
        });

        // Close dropdown if clicked outside
        document.addEventListener('click', function(event) {
            if (!dropdown.contains(event.target) && !userDropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });
</script>

    <div class="text-center py-8 bg-gray-100">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <h1 class="text-xl font-semibold p-4"><?php echo e($project->title); ?></h1>
                    <img class="w-full h-auto object-cover" src="<?php echo e(asset($project->image)); ?>" alt="<?php echo e($project->title); ?>">
                    <div class="p-4">
                        <p><?php echo e($project->description); ?></p>
                        <a href="<?php echo e($project->link); ?>" class="text-blue-500 hover:underline">View Project Source Code On GitHub</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>



<?php /**PATH /home/markus/laravel-app/main-app/resources/views/test.blade.php ENDPATH**/ ?>