<div>
    {{-- The whole world belongs to you. --}}
    <div class="grid grid-cols-1 md:grid-cols-5 gap-14">
        <div class="col-span-1 sm:col-span-3">
            <div class="mb-10">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Last 30 days
                </h3>
                <dl class="mt-5 grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Upcoming Appointments
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            300
                        </dd>
                    </div>

                    <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Ongoing Appointments
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            10
                        </dd>
                    </div>

                    <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Closed Appointments
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            400
                        </dd>
                    </div>
                </dl>
            </div>

            <x-buttons.secondary class="m-6 w-full py-3 text-center justify-center">Upcoming (20)</x-buttons.secondary>
            <x-buttons.secondary class="m-6 w-full py-3 text-center justify-center bg-white">Ongoing (20)</x-buttons.secondary>
            <x-buttons.secondary class="m-6 w-full py-3 text-center justify-center">Completed (20)</x-buttons.secondary>

        </div>

        <div class="sm:col-span-2">
            @livewire('widgets.calendar', ['markers' => ['']])
        </div>
    </div>
</div>
