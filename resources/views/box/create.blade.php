<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('addCaja') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="caja" class="block mt-1 w-full" type="number" name="caja" :value="old('caja')" required autofocus />
            </div>            

            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"> --}}
                    {{-- {{ __('Already registered?') }}
                </a> --}}

                <x-button class="ml-4">
                    {{ __('Guardar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
