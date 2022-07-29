<?php

namespace App\Http\Controllers\Frontsite;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Http\Requests\SellerRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SellerController extends Controller
{
    use PasswordValidationRules;

    public function index()
    {
        return view('frontsite.seller.index');
    }

    public function login()
    {
        return view('frontsite.seller.login');
    }

    public function register()
    {
        return view('frontsite.seller.register');
    }

    public function dashboard()
    {
        $user = User::active()->with('addresses')->first();
        // dd($user->addresses->count());
        return view('frontsite.seller.dashboard', compact('user'));
    }

    public function create(SellerRegistrationRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = 2;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('seller.register')->with('success', 'Registrasi kamu berhasil! Silahkan login untuk mulai berbelanja.');
    }
}
