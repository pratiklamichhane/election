<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:255'],
            'nagrita_number' => ['required', 'string', 'max:255'],
            'nagrita_front' => ['required', 'image', 'max:1024'],
            'nagrita_back' => ['required', 'image', 'max:1024'],
        ]);

        try{
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        Kyc::create([
            'user_id' => $user->id,
            'nagrita_number' => $request->nagrita_number,
            'nagrita_front' => $this->uploadNagritaFile($request->file('nagrita_front')),
            'nagrita_back' => $this->uploadNagritaFile($request->file('nagrita_back')),
        ]);

        event(new Registered($user));
        return redirect()->route('login')->with('error', '
        Your account is on pending status. Please wait for the admin to approve your account.
        ');  
        } catch (\Exception $e) {
        dd($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    private function uploadNagritaFile($file)
    {
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        return $filePath;
    }
}
