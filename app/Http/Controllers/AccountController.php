<?php
/**
 * Created by PhpStorm.
 * User: olivia
 * Date: 2/10/18
 * Time: 1:41 PM
 */

namespace App\Http\Controllers;

use App;
use Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->method() === 'POST') {
            $mood = $request->post('mood');

            if ($mood) {
                $user = Auth::user();
                $user->mood = $mood;
                $user->save();

                $request->session()->flash('result', 'success');
                $request->session()->flash('message', 'Successfully updated your profile!');
            }
        }

        return view('account/settings');
    }
}