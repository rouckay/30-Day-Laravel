<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <p class=" text-sm leading-6 text-gray-600">We are looking for someone expert here.</p>
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="email">email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" :value="old('email')" required id="email" />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" required id="password" type="password" />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>
