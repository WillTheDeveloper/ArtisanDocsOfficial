<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Artisan Docs</title>
</head>

<body class="bg-gray-50">

@livewire('laravel-header')

@livewire('development-banner')

<div class="md:grid md:grid-cols-3 w-full">
    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex justify-center">
        <div class="flex flex-col w-44">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow pb-4 overflow-y-auto">
                <div class="mt-5 flex-grow flex flex-col">
                    <nav class="flex-1 px-2 space-y-1">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="/laravel" class="bg-red-500 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Introduction
                        </a>

                        <a href="/laravel/prerequisites" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Prerequisites
                        </a>

                        <a href="/laravel/installation" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installation
                        </a>

                        <a href="/laravel/versioncontrol" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
                    <div class="py-4">
                        <p class="text-red-500 text-4xl font-extrabold underline">Creating resources</p>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Creating the model</p>
                        <p>For every resource that we make inside of nova, we need to create a model. This will aid you when creating relationships with other resources.</p>
                        <p>In order to create a model you need to use this command in the command line from the root of your project.</p>
                        <p>You need to use the singular format for all the words when naming the model. Please note that the model name will be the exact same as the resource name.</p>
                        <p>Run this command: <b class="bg-red-300 text-white">php artisan make:model Post</b></p>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Creating the resource</p>
                        <p>It is important to make sure this is singular as Laravel will automatically interpret the plural format of it when accessing the dashboard.</p>
                        <p>Run this command to create the resource: <b class="bg-red-300 text-white">php artisan nova:resource Post</b></p>
                        <br>
                        <p>Now the resource should appear inside the Nova dashboard.</p>
                        <br>
                        <p>Find out how to create fields inside of the resources by going to <a class="font-bold text-red-500" href="resourcefields">here</a>.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>