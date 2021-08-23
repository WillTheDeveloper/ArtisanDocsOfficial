<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Artisan Docs | Tailwind</title>
</head>

<body class="bg-gray-50">
@livewire('tailwind-header')

<div class="md:grid md:grid-cols-3 w-full">
    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex justify-center">
        <div class="flex flex-col w-44">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow pb-4 overflow-y-auto">
                <div class="mt-5 flex-grow flex flex-col">
                    <nav class="flex-1 px-2 space-y-1">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="/tailwind" class="bg-cyan-500 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Introduction
                        </a>

                        <a href="/tailwind/prerequisites" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Prerequisites
                        </a>

                        <a href="/tailwind/installation" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installation
                        </a>

                        <a href="/tailwind/troubleshooting" class="text-gray-600 hover:bgs-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Troubleshooting
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <main class="overflow-y-auto">
            <div>
                <div>
                    <!-- Replace with your content -->
                    <div class="py-4">
                        <p class="text-cyan-500 text-4xl font-extrabold underline">Introduction</p>
                        <br>
                        <p class="text-cyan-500 text-3xl font-extrabold">Getting started</p>
                        <p>You created your first Laravel project and you want to make it look really good. You came to the right place. We will cover how to get started and all the different tailwind properties.</p>
                        <p>The pre-made assets from tailwind are paid for so you will not find them on this website but we will go through other things that are custom made by me.</p>

                    </div>
                    <!-- /End replace -->
                </div>
            </div>
        </main>
    </div>
</div>


</body>

@livewire('footer')
