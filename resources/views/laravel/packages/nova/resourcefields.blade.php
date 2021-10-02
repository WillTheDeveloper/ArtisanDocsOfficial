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

                        <a href="/laravel/installation" class="bg-red-500 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
                    <!-- Replace with your content -->
                    <div class="py-4">
                        <p id="top" class="text-red-500 text-4xl font-extrabold underline">Resource Fields</p>
                        <br>
                        <p class="text-red-500 text-3xl font-extrabold">List of fields</p>
                        <p>Click on the relevant field in the list below to access the relevant information.</p>
                        <ul class="list-disc pl-6">
                            <li><a href="#text">Text</a></li>
                            <li><a href="#textarea">Text area</a></li>
                            <li><a href="#select">Select</a></li>
                        </ul>
                        <br>

                        <p id="text" class="text-red-500 text-3xl font-extrabold">Text</p>
                        <p>Text fields would be created if you want to be able to input a small amount of text.</p>
                        <p>Make sure to import the class otherwise this will not work.</p>
                        <p class="bg-red-300 text-white font-extrabold">Text::make('NAME OF FIELD', 'NAME OF DATABASE COLUMN')</p>
                        <p class="text-xs text-red-500"><a href="#top">Go back to top</a></p>
                        <br>

                        <p id="textarea" class="text-red-500 text-3xl font-extrabold">Text Area</p>
                        <p>Text areas are larger text boxes that are easier to use when inputting paragraphs or large amounts of text.</p>
                        <p class="bg-red-300 text-white font-extrabold">Textarea::make('NAME OF FIELD', 'NAME OF DATABASE COLUMN')</p>
                        <p class="text-xs text-red-500"><a href="#top">Go back to top</a></p>
                        <br>

                        <p id="select" class="text-red-500 text-3xl font-extrabold">Select</p>
                        <p>Select would be used for a drop down that allows you to pick from options that you define.</p>
                        <p class="bg-red-300 text-white font-extrabold">Select::make('NAME OF FIELD', 'NAME OF DATABASE COLUMN')</p>
                        <p class="text-xs text-red-500"><a href="#top">Go back to top</a></p>
                        <br>

                    </div>
                    <!-- /End replace -->
                </div>
            </div>
        </main>
    </div>
</div>
