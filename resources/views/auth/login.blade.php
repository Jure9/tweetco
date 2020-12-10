@component('components.master')
<div class="container mx-auto flex justify-center">
    <div class="px-14 py-8 bg-gray-300 border border-gray-400 rounded-lg">
        <div class="col-md-8">
            
                <div class="font-bold text-lg mb-6">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" 
                            class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                Email
                            </label>

                            <input type="email" name="email" id="email" autocomplete="email"
                            value="{{ old('email')}}" 
                            class="border border-gray-400 p-2 w-full"
                            required>

                            @error('email')
                                <p class=" text-red-500 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" 
                            class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                Password
                            </label>

                            <input type="password" name="password"
                            id="password" 
                            class="border border-gray-400 p-2 w-full"
                            autocomplete="current-password"
                            required>

                            @error('password')
                                <p class=" text-red-500 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div>
                                <input class="mr-1"
                                type="checkbox" 
                                name="remember" 
                                id="remember" 
                                {{ old('remember') ? 'checked' : '' }}>

                                <label class="text-xs text-gray-700 font-bold uppercase" 
                                for="remember">
                                   remember me
                                </label>
                            </div>

                            @error('remmember')
                                <p class=" text-red-500 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit" 
                            class="px-4 py-2 mr-2 rounded bg-blue-500 hover:bg-blue-600 text-white">
                                Login
                            </button>

                            <a href="{{ route('password.request') }}" 
                            class="text-xs text-gray-700 hover:text-gray-900">
                                Forgot Your Password?
                            </a>
                            </div>
                        </div>
                    </form>
            
        </div>
    </div>
</div>
@endcomponent
