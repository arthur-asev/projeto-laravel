<link href="{{ url('css/index.css')}}" rel="stylesheet">
<div class="container justify-content-center ">
    <x-guest-layout>
        <x-auth-card>

            <!-- Session Status -->
            <x-auth-session-status :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors" />

            <form method="post" class="login-flex" action="{{ route('login') }}">
                @csrf
                <h4 class="mt-2">Login</h4>
                <!-- Email Address -->
                <x-label for="email" :value="__('Email')" />
                <div>


                    <x-input class="input-w400" id="email" type="email" name="email" :value="old('email')" required
                        autofocus />
                </div>


                <x-label for="password" :value="__('Password')" />
                <div>


                    <x-input class="input-w400" id="password" type="password" name="password" required
                        autocomplete="current-password" />
                </div>


                <div>
                    <span>
                        <label for="remember_me">
                            <input id="remember_me" type="checkbox" class="rounded" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </span>
                </div>



                <div>
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                    @endif
                </div>


                <div><button class="btn btn-block btn-outline-success ">
                        {{ __('Log in') }}
                    </button></div>

            </form>
</div>
</x-auth-card>
</x-guest-layout>


</div>
