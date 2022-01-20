<div>
    {{-- Be like water. --}}
    <div class="min-h-full flex">
            <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                <div class="mx-auto w-full max-w-sm lg:w-96">
                    <div>
                        <x-logo-image-white class="text-blue-700 h-12 w-auto" />
                        <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                            Sign in to your account
                        </h2>
                    </div>

                    <div class="mt-4">

                        <div class="mt-4">
                            <form wire:submit.prevent="submit" class="space-y-6 p-2 relative">
                                <x-livewire-loading wire:target="submit" class="opacity-70" />
                                <div>
                                    <x-form.label>Email Address</x-form.label>
                                    <div class="mt-1">
                                        <x-form.input wire:model="email" type="email" />
                                        <x-form.input-error for="email" />
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <x-form.label>Password</x-form.label>
                                    <div class="mt-1">
                                        <x-form.input wire:model="password" type="password" />
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <input wire:model="remember" value="true" id="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                                            Forgot your password?
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Sign in
                                    </button>
                                </div>
                            </form>
                            <div class="text-sm w-full p-4 m-4">
                                Not Registered?
                                <a href="{{ route('doctor.register') }}" class="text-right font-medium text-blue-600 hover:text-blue-500">
                                    Create an account
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block relative w-0 flex-1">
                <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
            </div>
        </div>

</div>
