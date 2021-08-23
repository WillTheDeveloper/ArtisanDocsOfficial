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
                        <a href="/laravel" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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

                        <a href="/laravel/folderstructure" class="bg-red-500 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
                        <p class="text-red-500 text-4xl font-extrabold underline">Folder Structure</p>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">Structure overview</p>
                        <p>The folder structure of Laravel can be quite confusing if you have never used it before so I have made an easy to follow guide below.</p>
                        <br>
                        <b class="text-red-500">Root Directory ( / )</b>
                        <ul class="pl-6 list-disc">
                            <li><b>/app</b> - Core components of project</li>
                            <li><b>/bootstrap</b> - Everything that gets bootstrapped</li>
                            <li><b>/config</b> - Config files</li>
                            <li><b>/database</b> - Database migrations are stored here</li>
                            <li><b>/public</b> - Public directory that can be accessed in browser.</li>
                            <li><b>/resources</b> - Your blade views are stored in here.</li>
                            <li><b>/routes</b> - Where you define all your applications routes.</li>
                            <li><b>/storage</b> - Compiled blade views and logs</li>
                            <li><b>/tests</b> - Your application tests are stored here</li>
                            <li><b>/vendor</b> - Contains composer dependencies</li>
                        </ul>
                        <br>
                        <b class="text-red-500">App directory ( /app/ )</b>
                        <ul class="pl-6 list-disc">
                            <li><b>/broadcasting</b></li>
                            <li><b>/console</b></li>
                            <li><b>/events</b></li>
                            <li><b>/exceptions</b></li>
                            <li><b>/http</b></li>
                            <li><b>/jobs</b></li>
                            <li><b>/listeners</b></li>
                            <li><b>/mail</b></li>
                            <li><b>/models</b></li>
                            <li><b>/notifications</b></li>
                            <li><b>/policies</b></li>
                            <li><b>/providers</b></li>
                            <li><b>/rules</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</body>

@livewire('footer')
