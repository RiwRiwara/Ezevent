<x-guest-layout>
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="w-1/4 container p-3 bg-white rounded-md">
            <x-breadcrumb :items="$breadcrumbItems" />

            <div class="mb-4 mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <x-forms.input-outline-primary name="email" label="{{__('field_name.email')}}" type="email" required autocomplete="off" />

                <div class="flex items-center justify-end mt-4">
                    <x-button.btn-common type="submit">
                        {{ __('Email Password Reset Link') }}
                    </x-button.btn-common>
                </div>

            </form>
        </div>

    </div>

</x-guest-layout>