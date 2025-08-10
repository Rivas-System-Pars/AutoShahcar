<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use App\Models\UserPlan;
use Carbon\Carbon;

class UserOfferCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $user = User::find(auth()->user->id);
        if(auth()->user()->level == 'admin'){
            $userPlan = UserPlan::where('user_id',auth()->user()->id)->where('status','active')->first();
            if($userPlan && $userPlan->end_date < Carbon::now()){
                $userPlan->status = 'expired';
                $userPlan->save();
                abort(403);
                
            }
            if(!$userPlan)
            {
                abort(403);
            }
            

        }
        return $next($request);
        // abort(403);
    }
}
