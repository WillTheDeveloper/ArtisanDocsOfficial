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
        <div class="flex flex-col w-44 border-r border-gray-200">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow pb-4 overflow-y-auto">
                <div class="mt-5 flex-grow flex flex-col">
                    <nav class="flex-1 px-2 space-y-1">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="#" class="bg-red-500 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Prerequisites
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installation
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Version Control
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            First Project
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            Installing Packages
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorem enim expedita ipsam nobis, non quod vitae. Cupiditate eaque esse ipsam ipsum laudantium odit provident similique sit soluta sunt. Ab alias amet beatae deserunt dignissimos earum eligendi id laborum magni, maiores necessitatibus nesciunt nostrum obcaecati odit, quam qui ratione reprehenderit rerum sapiente veniam veritatis voluptates, voluptatibus. Accusamus modi nam repudiandae. Eligendi enim excepturi iusto magni nihil, pariatur ratione voluptatem! Aliquam amet dolores error explicabo itaque iure laborum non qui. Cupiditate deserunt esse incidunt praesentium quaerat. Animi asperiores assumenda dolorem ducimus fugit ipsam natus nostrum quam, quas reiciendis suscipit, temporibus unde. Alias atque ea, fugiat ipsum labore praesentium quo quod sed sit totam. Accusantium architecto consectetur eius itaque officiis reiciendis saepe ut vitae? Ab est excepturi fugit molestias odio optio similique. Laborum magni neque nobis, obcaecati qui recusandae reiciendis vitae. Ab aliquid aspernatur deleniti dolores est, fuga impedit nisi nulla omnis voluptas. Animi, atque consectetur consequatur consequuntur corporis cum deserunt explicabo incidunt ipsa itaque modi molestias nam natus nemo quo repellat reprehenderit saepe sed sequi similique sunt ut voluptatem voluptatum! Animi necessitatibus placeat praesentium temporibus voluptatibus. Aut beatae deleniti laudantium magnam perspiciatis quas qui, quod recusandae rerum tempore. Alias, est et!</p>
                    </div>
                    <!-- /End replace -->
                </div>
            </div>
        </main>
    </div>
</div>


</body>
