<div>
    <div class="min-h-full flex">
            <div class="hidden lg:block relative w-0 flex-1">
                <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
            </div>
            <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-10 xl:px-14">
                <div class="mx-auto w-full max-w-sm lg:max-w-lg lg:w-full">
                    <div>
                        <x-logo-image-white class="h-10 w-auto text-blue-700"></x-logo-image-white>
                        <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                            Create your account
                        </h2>
                    </div>

                    <div class="mt-8">

                        <div class="mt-6">
                            <form wire:submit.prevent="submit" class="space-y-6 relative">

                                <x-livewire-loading wire:target="submit" class="opacity-50 rounded" />

                                <div class="p-2 space-y-6">

                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <x-form.input-with-label wire:model="firstname" label="First Name" placeholder="" autofocus />
                                            <x-form.input-error for="firstname" />
                                        </div>

                                        <div class="col-span-1">
                                            <x-form.input-with-label wire:model="lastname" label="Last Name" placeholder="" />
                                            <x-form.input-error for="lastname" />
                                        </div>
                                    </div>

                                    <div>
                                        <x-form.input-with-label wire:model="mobile" label="Mobile Number" placeholder="080xxxxxxxx" />
                                        <x-form.input-error for="mobile" />
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium text-gray-900">Gender</label>
                                        <fieldset class="mt-4">
                                            <legend class="sr-only">Gender choice</legend>
                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input wire:model="gender" value="female" id="female" type="radio" checked class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                    <label for="female" class="ml-3 block text-sm font-medium text-gray-700">
                                                        Female
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input wire:model="gender" value="male" id="male" type="radio" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                                    <label for="male" class="ml-3 block text-sm font-medium text-gray-700">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <x-form.input-error for="gender" />
                                    </div>

                                    <div>
                                        <x-form.input-with-label wire:model="email" label="Email Address" placeholder="email@example.net" />
                                        <x-form.input-error for="email" />
                                    </div>

                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <x-form.input-with-label wire:model="password" label="Password" type="password" />
                                            <x-form.input-error for="password" />
                                        </div>
                                        <div class="col-span-1">
                                            <x-form.input-with-label wire:model="password_confirmation" label="Password confirmation" type="password" />
                                        </div>
                                    </div>

                                    <div>
                                        <x-label>Area of Specialization</x-label>
                                        <select wire:model="area_of_specialization" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                            <option value="">Select One</option>
                                            <option value="general physician">General Physician</option>
                                            <option value="oncology">Oncology</option>
                                            <option value="obstetrician & gynecologist">Obstetrician & Gynecologist</option>
                                            <option value="optometrist">Optometrist</option>
                                        </select>
                                        <x-form.input-error for="area_of_specialization" />
                                    </div>

                                    <div>
                                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Continue
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <x-divider>Or</x-divider>
                    </div>
                </div>
            </div>
        </div>

    <div class="min-h-full flex sr-only">
        <div class="flex-1 flex justify-center">
            <div class="border rounded max-w-md w-full">
                something dey here
            </div>
        </div>
    </div>
</div>
