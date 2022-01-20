<nav class="mt-5 flex-1" aria-label="Sidebar">
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <ul class="space-y-6 px-6">
        <li>
            <ul class="text-sm space-y-1 -mx-3">
                <li>
                    <x-layouts.preview.sidebar.link href="#" class="{{ request()->route()->named('preview.backend') ? 'bg-blue-800' : '' }}">
                        <x-icons.outline.home class="h-5 w-5 text-blue-300" />
                        <span>Dashboard</span>
                    </x-layouts.preview.sidebar.link>
                </li>
            </ul>
        </li>

        <li>
            <div class="border-t -mr-6"></div>
        </li>

        <li>
            <p class="font-bold uppercase text-blue-100 text-xs tracking-wider">
                Services
            </p>
            <ul class="text-sm space-y-1 -mx-3 mt-2">
                <li>
                    <x-layouts.preview.sidebar.link href="#" class="{{ request()->route()->named('preview.airtime') ? 'bg-blue-800' : '' }}">
                        <x-icons.outline.phone-outgoing class="h-5 w-5 text-blue-300"/>
                        <span>
                            Appointment
                        </span>
                    </x-layouts.preview.sidebar.link>
                    <x-layouts.preview.sidebar.link href="#" class="{{ request()->route()->named('preview.data') ? 'bg-blue-800' : '' }}">
                        <x-icons.outline.wifi class="h-5 w-5 text-blue-300"/>
                        <span>
                            Notification
                        </span>
                    </x-layouts.preview.sidebar.link>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.switch-horizontal class="h-5 w-5 text-blue-300"/>
                        <span>
                            Message
                        </span>
                    </x-layouts.preview.sidebar.link>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.desktop-computer class="h-5 w-5 text-blue-300"/>
                        <span>
                            Cable TV Subscription
                        </span>
                    </x-layouts.preview.sidebar.link>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.light-bulb class="h-5 w-5 text-blue-300"/>
                        <span>
                            Utility Bills
                        </span>
                    </x-layouts.preview.sidebar.link>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.table class="h-5 w-5 text-blue-300"/>
                        <span>
                            E-Pins
                        </span>
                    </x-layouts.preview.sidebar.link>
                </li>
            </ul>
        </li>

        <li>
            <div class="border-t -mr-6"></div>
        </li>

        <li>
            <p class="font-bold uppercase text-blue-100 text-xs tracking-wider">
                My Account
            </p>

            <ul class="text-sm space-y-1 -mx-3 mt-2">
                <li>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.clock class="h-5 w-5 text-blue-300"/>
                        <span>
                            Transactions
                        </span>
                    </x-layouts.preview.sidebar.link>
                </li>
                <li>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.presentation-chart-bar class="h-5 w-5 text-blue-300"/>
                        <span>
                            Plans
                        </span>
                    </x-layouts.preview.sidebar.link>
                </li>

                <li>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.sort-ascending class="h-5 w-5 text-blue-300 rotate-90"/>
                        <span>
                            Referrals
                        </span>
                    </x-layouts.preview.sidebar.link>
                </li>
                <li>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.cog class="h-5 w-5 text-blue-300"/>
                        <span>
                            Settings
                        </span>
                    </x-layouts.preview.sidebar.link>
                </li>
            </ul>
        </li>

        <li>
            <div class="border-t -mr-6"></div>
        </li>

        <li>
            <p class="font-bold uppercase text-gray-50 text-xs tracking-wider">
                Help
            </p>

            <ul class="text-sm space-y-1 -mx-3 mt-2">

                <li>
                    <x-layouts.preview.sidebar.link href="#">
                        <x-icons.outline.exclamation-circle class="h-5 w-5 text-blue-300"/>
                        <span>
                            Disputes
                        </span>
                    </x-layouts.preview.sidebar.link>
                </li>

                <li>
                    <x-layouts.preview.sidebar.link>
                        <x-icons.outline.chat-alt-2 class="h-5 w-5 text-blue-300"/>
                        <span>
                            Support
                        </span>
                    </x-layouts.preview.sidebar.link>
                </li>
            </ul>
        </li>
    </ul>
</nav>
