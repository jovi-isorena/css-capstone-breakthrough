<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900">Welcome to Breakthrough, {{ auth()->user()->name}}!</h2>
                <p class="mt-1 text-sm text-gray-600">This is your first time to login your account. We've given you a temporary password, but to properly secure your account, you have to choose a new password.</p>
                <p class="mt-1 text-sm text-gray-600">Ensure your account is using a long, random password to stay secure.</p>
            </header>
        
            <form method="post" action="{{ route('password.firstupdate') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
        
                
        
                <div>
                    <x-input-label for="password" :value="__('New Password')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
        
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
        
                    @if (session('status') === 'password-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600"
                        >Saved.</p>
                    @endif
                </div>
            </form>
        </section>

    </x-auth-card>
</x-guest-layout>





