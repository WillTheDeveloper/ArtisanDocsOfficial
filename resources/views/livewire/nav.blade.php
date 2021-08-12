<div>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <div x-data="{ mobileMenu: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <div class="-mr-2 flex items-center md:hidden">
                            <button @click="mobileMenu = true" type="button" class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex md:space-x-10">
                    <a href="/" class="font-medium text-gray-500 hover:text-amber-500">Home</a>

                    <a href="/laravel" class="font-medium text-gray-500 hover:text-red-500">Laravel</a>

                    <a href="/tailwind" class="font-medium text-gray-500 hover:text-cyan-500">Tailwind</a>

                    <a href="/livewire" class="font-medium text-gray-500 hover:text-indigo-400">Livewire</a>

                    <a href="/database" class="font-medium text-gray-500 hover:text-blue-500">Database</a>

                    <a href="/support" class="font-medium text-gray-500 hover:text-emerald-400">Support</a>
                </div>
            </nav>
        </div>

        <div x-cloak x-show="mobileMenu"
             x-transition:enter="duration-150 ease-out"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="duration-100 ease-in"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                    </div>
                    <div class="-mr-2">
                        <button @click="mobileMenu = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3">
                    <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

                    <a href="/laravel" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Laravel</a>

                    <a href="/tailwind" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Tailwind</a>

                    <a href="/livewire" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Livewire</a>

                    <a href="/database" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Database</a>

                    <a href="/support" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Support</a>
                </div>
            </div>
        </div>
    </div>
</div>
