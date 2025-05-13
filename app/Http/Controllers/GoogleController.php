<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
          
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            
            // Log the user data for debugging
            Log::info('Google user data:', ['user' => $user]);
            
            // Validasi email
            if (!$user->email || !filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                Log::error('Invalid email from Google:', ['email' => $user->email]);
                return redirect()->route('login')
                    ->with('error', 'Email tidak valid. Silakan gunakan email Google yang valid.');
            }

            // Validasi domain email (harus dari Google)
            if (!preg_match('/@gmail\.com$/', $user->email)) {
                Log::error('Non-Gmail email used:', ['email' => $user->email]);
                return redirect()->route('login')
                    ->with('error', 'Hanya email Gmail yang diperbolehkan.');
            }

            // Cek apakah email sudah terverifikasi di Google
            if (!isset($user->user['email_verified']) || !$user->user['email_verified']) {
                Log::error('Unverified email from Google:', ['email' => $user->email]);
                return redirect()->route('login')
                    ->with('error', 'Email belum diverifikasi di Google. Silakan verifikasi email Anda terlebih dahulu.');
            }

            // Validasi token dan ID token
            if (!$user->token || !$user->id) {
                Log::error('Invalid Google OAuth response:', ['user' => $user]);
                return redirect()->route('login')
                    ->with('error', 'Respon autentikasi Google tidak valid.');
            }
            
            $finduser = User::where('google_id', $user->id)->first();
         
            if($finduser) {
                if (is_null($finduser->email_verified_at)) {
                    Auth::login($finduser);
                    $finduser->sendEmailVerificationNotification();
                    return redirect('/email/verify')->with('resent', true);
                }
                Auth::login($finduser);
                Log::info('Existing user logged in:', ['user_id' => $finduser->id]);
                return redirect()->intended('home');
            } else {
                $newUser = User::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'name' => $user->name,
                        'google_id' => $user->id,
                        'password' => Hash::make(Str::random(16)),
                        'email_verified_at' => null
                    ]
                );
                Auth::login($newUser);
                $newUser->sendEmailVerificationNotification();
                return redirect('/email/verify')->with('resent', true);
            }
        
        } catch (Exception $e) {
            Log::error('Google login error:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('login')
                ->with('error', 'Terjadi kesalahan saat login dengan Google. Silakan coba lagi.');
        }
    }
}