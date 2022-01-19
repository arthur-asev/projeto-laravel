<x-guest-layout>
    <x-auth-card>
    
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Obrigado por se cadastrar! Antes de começar, verifique seu endereço de email clicando no link que foi enviado no seu endereço de email Se você não recebeu o email , ficaremos felizes em enviar outro.') }}
        </div> 

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
