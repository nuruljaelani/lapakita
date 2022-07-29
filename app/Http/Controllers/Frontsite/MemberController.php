<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    public function index()
    {
        $profile = Profile::active()->first();
        $user = User::active()->first();
        return view('frontsite.user.profile', compact('profile', 'user'));
    }

    public function store(Request $request)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        $request->validate([
            'phone' => 'required|without_spaces|min:11',
            'gender' => 'nullable',
            'birthdate' => 'nullable'
        ], [
            'phone.without_spaces' => 'Whitespace not allowed'
        ]);
        $user = User::active()->first();
        // dd($profile);
        
        Profile::updateOrCreate(['user_id' => $user->id], [
            'phone' => Str::of($request->phone)->trim( ),
            'gender' => $request->gender,
            'birthdate' => $request->birthdate
        ]);

        return redirect()->route('frontsite.member.profile');
    }
}
