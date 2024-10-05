<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Hash;
use App\Helpers\Qs;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if(!empty(Auth::check()))
        {
            return redirect()->intended('dashboard');
        }

        return view('auth.login');
    }

    public function AuthLogin(Request $request)  
    {
        // Validate input fields
        $request->validate([
            'identity' => 'required|string',  // Validates that identity is filled
            'password' => 'required|string',  // Validates that password is filled
        ]);
    
        $remember = !empty($request->remember) ? true : false;
    
        // Determine if it's an email or username
        $field = $this->username();
    
        // Attempt to log in using the determined field (email or username)
        if (Auth::attempt([$field => $request->identity, 'password' => $request->password], $remember)) {
            return redirect()->intended('dashboard');  // Redirect to the dashboard if successful
        } else {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Invalid identity or password')->withInput();
        }
    }
    
    public function username()
    {
        $identity = request()->input('identity');
        return filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
      
}
