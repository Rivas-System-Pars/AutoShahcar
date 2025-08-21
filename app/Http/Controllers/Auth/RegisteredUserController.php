<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $view = config('front.pages.register');

        if (!$view) {
            abort(404);
        }

        return view($view);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        if ($request->level == 'admin') {
            $data = $request->validated();

            $data['password'] = Hash::make($data['password']);
            // $data["level"] = "admin";
            $user = User::create($data);
            DB::table("role_user")->insert([
                "role_id"   =>  4,
                "user_id"   =>  $user->id,
                "created_at"    =>  Carbon::now(),
                "updated_at"    =>  Carbon::now(),
            ]);

            event(new Registered($user));

            Auth::login($user);

            return response('success');
        }
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);


        event(new Registered($user));

        Auth::login($user);

        return response('success');
    }
}
