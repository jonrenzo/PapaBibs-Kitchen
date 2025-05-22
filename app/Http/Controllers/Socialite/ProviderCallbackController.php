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

            $firstName = $socialUser->user['given_name'] ?? $socialUser->name ?? '';
            $lastName = $socialUser->user['family_name'] ?? '';

            if (empty($firstName)) {
                if (!empty($socialUser->name)) {
                    $nameParts = explode(' ', trim($socialUser->name), 2);
                    $firstName = $nameParts[0] ?? '';
                    $lastName = $nameParts[1] ?? $lastName;
                } elseif (!empty($socialUser->email)) {
                    $firstName = explode('@', $socialUser->email)[0];
                }
            }

            $user = User::firstOrCreate([
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
