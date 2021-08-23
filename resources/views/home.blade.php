<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Artisan Docs | Home</title>
</head>

<body class="bg-gray-50">
@livewire('home-header')

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
                        <a href="/laravel"
                           class="bg-amber-500 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Welcome
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
                        <p class="text-amber-500 text-3xl font-extrabold">Welcome</p>
                        <p>So you want to learn Laravel? Well you have to come to the right place. Although something I
                            should mention is that these are the unofficial documentation for it.
                            I dedicated to make this site as part of something to do in my free time.</p>
                        <p>There is a git repository for this website so if you would like to suggest any changes then
                            they are welcome. Might be kept private until its initially completed.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>

@livewire('footer')
