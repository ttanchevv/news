<?php

namespace App\Http\Controllers\Auth;

use     App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     * @throws ValidationException
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Опитваме се да логнем потребителя
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $user = Auth::user();

            // Пренасочване в зависимост от ролята
            if ($user->is_admin) {
                // Пренасочване към администраторския дашборд
                return redirect()->route('dashboard');
            }else{
                // Пренасочване към началната страница за нормални потребители
                return redirect()->route('home');
            }
        }

        // Ако автентикацията не успее, ще хвърлим грешка
        throw ValidationException::withMessages([
            'email' => ['Грешен имейл или парола.'],
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
