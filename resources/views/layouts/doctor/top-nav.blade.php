<nav x-data="{ profileDropdownOpen: false, mobileMenuOpen: false }" class="bg-[#D7D7FF]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-24">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8 hidden" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                    <x-logo-image-white class="h-8 w-auto"></x-logo-image-white>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-1">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="bg-[#00008B] text-white px-6 py-2 rounded-md text-sm font-medium flex items-center justify-center" aria-current="page">
                            <x-icons.outline.home class="h-6 w-6 inline-flex" /> <span class="text-base ml-2">Dashboard</span>
                        </a>

                        <a href="#" class="text-gray-800 px-6 py-2 rounded-md text-sm font-medium flex items-center justify-center hover:text-gray-600">
                            <x-icons.outline.calendar class="h-6 w-6 inline-flex" /> <span class="text-base ml-2">Appointments</span>
                        </a>

                        <a href="#" class="text-gray-800 px-6 py-2 rounded-md text-sm font-medium flex items-center justify-center hover:text-gray-600">
                            <x-icons.outline.clipboard-list class="h-6 w-6 inline-flex" /> <span class="text-base ml-2">Sessions</span>
                        </a>

                        <a href="#" class="text-gray-800 px-6 py-2 rounded-md text-sm font-medium flex items-center justify-center hover:text-gray-600">
                            <x-icons.outline.bell class="h-6 w-6 inline-flex" /> <span class="text-base ml-2">Notifications</span>
                        </a>

                        <a href="#" class="text-gray-800 px-6 py-2 rounded-md text-sm font-medium flex items-center justify-center hover:text-gray-600">
                            <x-icons.outline.mail class="h-6 w-6 inline-flex" /> <span class="text-base ml-2">Messages</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <button type="button" class="bg-blue-800 p-1 rounded-full text-gray-100 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        <div>
                            <button @click="profileDropdownOpen = !profileDropdownOpen" type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>

                        <div x-show="profileDropdownOpen" x-cloak @click.outside="profileDropdownOpen = false"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                             role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">{{ auth('doctor')->user()->firstname }}</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button @click.prevent="mobileMenuOpen = !mobileMenuOpen" type="button" class="bg-blue-700 inline-flex items-center justify-center p-2 rounded-md text-gray-200 hover:text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <template x-if="!mobileMenuOpen">
                        <x-icons.outline.menu class="w-6 h-6"></x-icons.outline.menu>
                    </template>
                    <template x-if="mobileMenuOpen">
                        <x-icons.outline.x class="w-6 h-6"></x-icons.outline.x>
                    </template>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-cloak x-show="mobileMenuOpen" class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-blue-800 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

            <a href="#" class="text-gray-100 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Appointments</a>

            <a href="#" class="text-gray-100 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Notifications</a>

            <a href="#" class="text-gray-100 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Messages</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-white">Dr. Kola Oyewole</div>
                    <div class="text-sm font-medium text-blue-300">kola.oyewole@example.com</div>
                </div>
                <button type="button" class="ml-auto bg-blue-700 flex-shrink-0 p-1 rounded-full text-gray-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <x-icons.outline.bell class="w-6 h-6"></x-icons.outline.bell>
                </button>
            </div>
            <div class="mt-3 px-2 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-100 hover:text-white hover:bg-blue-700">Your Profile</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-100 hover:text-white hover:bg-blue-700">Settings</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-100 hover:text-white hover:bg-blue-700">Sign out</a>
            </div>
        </div>
    </div>
</nav>
