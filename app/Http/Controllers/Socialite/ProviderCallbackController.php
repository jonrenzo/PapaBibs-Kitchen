<?php

namespace App\Http\Controllers\Socialite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderCallbackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $provider)
    {
        if (!in_array($provider, ['facebook', 'google'])) {
            return redirect(route('user.login'))->withErrors(['provider' => 'Invalid provider']);
        }

        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();

            $fullName = explode(' ', $socialUser->name, 2);
            $firstName = $fullName[0];
            $lastName = $fullName[1] ?? '';

            $user = User::updateOrCreate([
                'provider_id' => $socialUser->id,
                'provider_name' => $provider,
            ], [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $socialUser->email,
                'provider_token' => $socialUser->token,
                'provider_refresh_token' => $socialUser->refreshToken
            ]);

            Auth::login($user);

            return redirect()->route('user.account.edit', ['user' => $user->id]);
        } catch (\Exception $e) {
            return redirect(route('user.login'))->withErrors(['provider' => 'Authentication failed: ' . $e->getMessage()]);
        }
    }
}
