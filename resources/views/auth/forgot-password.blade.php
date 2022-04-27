<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <div class="d-flex justify-content-center ">

            <img src="{{ asset('assets/images/logo_login.png') }}" alt="" width="300">

        </div>

        <div class="mb-4 mt-3  text-sm text-gray-600" style="text-align: right">
            {{ __('نسيت رقمك السري؟ لا مشكلة. فقط أخبرنا بعنوان بريدك الإلكتروني وسنرسل لك رابط إعادة تعيين كلمة المرور عبر البريد الإلكتروني الذي سيسمح لك باختيار عنوان جديد') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block ">
                <x-jet-label for="email" class="flex items-center justify-end" value="{{ __('بريدك الالكتروني') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('رابط إعادة تعيين كلمة مرور البريد الإلكتروني') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
