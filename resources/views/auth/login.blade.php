<x-guest-layout>
    <div class="mt-4 text-center">
        <span class="text-sm">Върни се към сайта! - </span>
        <a class="text-sm text-blue-500 hover:text-blue-700" href="{{ route('home') }}">
            Към сайта
        </a>
    </div>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-center text-xl font-semibold mb-6">Вход в профил</h2>
        @if ($errors->any())
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-center text-xl font-semibold mb-6 text-red-700">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Имейл</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required autofocus>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Парола</label>
                <input type="password" name="password" id="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>

            <!-- Remember Me -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-900">Запомни ме</label>
            </div>

            <!-- Login Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Вход
                </button>
            </div>
        </form>

        <!-- Reset Password Link -->
        <div class="mt-4 text-center">
            @if (Route::has('password.request'))
                <a class="text-sm text-blue-500 hover:text-blue-700" href="{{ route('password.request') }}">
                    Забравена парола?
                </a>
            @endif
        </div>

        <!-- Register Link -->
        <div class="mt-4 text-center">
            <span class="text-sm">Нямаш акаунт? </span>
            <a class="text-sm text-blue-500 hover:text-blue-700" href="{{ route('register') }}">
                Регистрирай се
            </a>
        </div>
    </div>
</x-guest-layout>
