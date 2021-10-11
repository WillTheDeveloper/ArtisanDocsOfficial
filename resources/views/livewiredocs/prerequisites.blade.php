<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Artisan Docs | Livewire</title>
</head>

<body class="bg-gray-50">
@livewire('livewire-header')

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
                        <a href="/livewire" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Introduction
                        </a>

                        <a href="/livewire/prerequisites" class="bg-indigo-400 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Prerequisites
                        </a>

                        <a href="/livewire/installation" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installation
                        </a>

                        <a href="/livewire/components" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Components
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
                        <p class="text-indigo-400 text-4xl font-extrabold underline">Prerequisites</p>
                        <br>
                        <p class="text-indigo-400 text-3xl font-extrabold">Before we begin</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis, consectetur cum doloribus error est et eveniet ex facilis incidunt minus molestias nesciunt optio sapiente sed, tempora temporibus voluptates? Quibusdam?</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
