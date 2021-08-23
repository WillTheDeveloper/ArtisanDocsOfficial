<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Artisan Docs | Laravel</title>
</head>

<body class="bg-gray-50">
@livewire('laravel-header')
{{--DOCS GO BELOW HERE--}}


<div class="md:grid md:grid-cols-3 w-full">
    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex justify-center">
        <div class="flex flex-col w-44">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow pb-4 overflow-y-auto">
                <div class="mt-5 flex-grow flex flex-col">
                    <nav class="flex-1 px-2 space-y-1">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="/laravel" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Introduction
                        </a>

                        <a href="/laravel/prerequisites" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Prerequisites
                        </a>

                        <a href="/laravel/installation" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installation
                        </a>

                        <a href="/laravel/versioncontrol" class="bg-red-500 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Version Control
                        </a>

                        <a href="/laravel/folderstructure" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Folder Structure
                        </a>

                        <a href="/laravel/firstproject" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            First Project
                        </a>

                        <a href="/laravel/installingpackages" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installing Packages
                        </a>

                        <a href="/laravel/troubleshooting" class="text-gray-600 hover:bgs-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
                        <p class="text-red-500 text-4xl font-extrabold underline">Version Control</p>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Before we begin</p>
                        <p>Before we begin, we need a few things.</p>
                        <p>We use github in order to keep track of our version control therefore you will first need to make a Github account.</p>
                    </div>
                    <!-- /End replace -->
                </div>
            </div>
        </main>
    </div>
</div>


</body>

@livewire('footer')
