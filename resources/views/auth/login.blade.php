<style>
    body {
        background-image: url(img/blog/bg.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }

    #login-box {
        background-color: #00000055;
        text-align: center;
        margin: 0 auto;
        width: 350px;
        height: 230px;
        color: aliceblue;
        line-height: 2
    }

    #login-box2 {
        background-color: #00000055;
        text-align: center;
        margin: 0 auto;
        margin-top: 100px;
        width: 350px;
        height: 200px;
        color: aliceblue
    }

    #logo {
        vertical-align: bottom;
        margin-top: 80px;
        width: 200px;
    }
.input-box{
  border-radius:8px;
  outline: none;
  border: none;
  background-image: linear-gradient(-20deg, #f794a4 0%, #fdd6bd 100%);
  width: 200px;
  margin-top: 20px;
}

</style>

<x-jet-authentication-card>
    <div id="login-box">
        <x-slot name="logo">
            <div id="login-box2">
                <img src="img/blog/rabbit.jpg"
                    id="logo">
            </div>
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div >
                <x-jet-label for="username"  />
                <x-jet-input id="username" class="block mt-1 w-full" type="username" name="username" :value="old('username')"
                placeholder="{{ __('Username') }}"
                    required autofocus  style="
                    border:none;
                    background:none;
                    color: #ffffff;
                    height: 30px;
                    outline: none;
                    border-bottom: #ffffff 3px solid;"/>
            </div>

            <div>
                <x-jet-label for="password" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"
                    placeholder="{{ __('Password') }}"
                    required autofocus  style="
                    border:none;
                    background:none;
                    color: #ffffff;
                    height: 30px;
                    margin-bottom:40px;
                    outline: none;
                    border-bottom: #ffffff 3px solid;"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm" style="font-size: 13px;font-family: Heiti TC">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm"  style="color:#ffffff;font-size: 10px"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div>
                <x-jet-button class="input-box" >
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</x-jet-authentication-card>

