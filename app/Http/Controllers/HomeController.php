<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Customer;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->user_type === 'admin') {
            return redirect()->route('admin.home');
        }
        return view('user.home');
    }

    public function adminHome()
    {

        return view('admin.home');
    }
    public function profile()
    {
        $id = Auth::id();
        $profile = Customer::where('user_id', $id)->get();

        foreach ($profile as $item) {
            $item->formatted_since = Carbon::parse($item->since)->format('F j, Y');
        }
        return view('user.profile', compact('profile'));
    }
    public function transaction()
    {

        return view('user.transaction');
    }
    public function bill()
    {

        return view('user.bill');
    }
}
