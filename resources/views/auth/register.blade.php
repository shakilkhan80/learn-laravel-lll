<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="first_name" placeholder="Job first_name" name="first_name" type="text"
                                required />
                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="last_name" name="last_name" type="text" required
                                placeholder="$50,000" />
                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="email">E-mail</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" type="email" required placeholder="$50,000" />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" type="password" required
                                placeholder="$50,000" />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmation" name="password_confirmation" type="password"
                                required placeholder="$50,000" />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>

                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
