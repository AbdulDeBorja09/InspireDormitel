<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\User;
use App\Models\Bills;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{   
    public function tenants()
    {   
        $tenants = Customer::get();
        return view('admin.tenants', compact('tenants'));
    }
    public function Addtenant()
    {
        return view('admin.addtenants');
    }
    public function EditTenant($id)
    {   
        $tenant = Customer::where('user_id', $id)->get();
        foreach ($tenant as $item) {
            $item->formatted_since = Carbon::parse($item->since)->format('F j, Y');
        }
        return view('admin.edittenant', compact('tenant'));
    }
    public function SubmitEditTenant(Request $request)
    {   
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'since' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $tenant = Customer::where('user_id', $request->user_id)->first();
        Storage::disk('public')->delete($tenant->image);

        $imagePath = $request->file('image')->store('image', 'public');
        Customer::where('user_id', $request->user_id)->update([
                'name' => $request->name,
                'age' => $request->age,
                'unit' => $request->unit,
                'since' => $request->since,
                'image' => $imagePath,
                'updated_at' => now(),
        ]);
        return redirect()->route('admin.tenants')->with('success', __('validation.addTenanTsucess'));
    }
    public function deleteTenant(Request $request)
    {
        Customer::where('user_id', $request->user_id)->delete();
        User::where('id', $request->user_id)->delete();
        return redirect()->route('admin.tenants')->with('success', __('validation.addTenanTsucess'));
    }
   
    public function bills()
    {   
        $tenants = Customer::get();
        return view('admin.bills', compact('tenants'));
    }
    public function AddBills($id)
    {   
        $tenant = Customer::where('user_id', $id)->get();
        foreach ($tenant as $item) {
            $item->formatted_since = Carbon::parse($item->since)->format('F j, Y');
        }
        return view('admin.addbills', compact('tenant'));
    }
    public function SubmitTenant(Request $request)
    {   
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|min:8',
            'age' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'since' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
         $imagePath = $request->file('image')->store('image', 'public');
        $existingUser = User::where('email', $request->email)->first();
        if($existingUser){
            return redirect()->back()->with('error',  __('validation.addTenanTerror'));
        }else{
            $newuser = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => now(),
            ]);

            Customer::create([
                'user_id' => $newuser->id,
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'unit' => $request->unit,
                'since' => $request->since,
                'image' => $imagePath,
                'created_at' => now(),
            ]);
            return redirect()->route('admin.Addtenant')->with('success', __('validation.addTenanTsucess'));
        }
    }
    
    public function SubmitBills(Request $request)
    {   
        $request->validate([
            'user_id' => 'required',
            'month' => 'required',
            'rent' => 'required|numeric',
            'water' => 'required|numeric',
            'internet' => 'required|numeric',
            'electricity' => 'required|numeric',
            'due' => 'required|string',
        ]);
        $receiptNumber = Bills::generateReceiptNumber();

        $existingbill = Bills::where('month', $request->month)->where('user_id', $request->user_id)->latest('id')->first();
        if($existingbill ){
            Bills::where('month', $request->month)->where('user_id', $request->user_id)->update([
                'rent' => $request->rent,
                'water' => $request->water,
                'internet' => $request->internet,
                'electricity' => $request->electricity,
                'total' => $request->rent + $request->water + $request->internet + $request->electricity,
                'due' => $request->due,
                'updated_at' => now(),
            ]);
        }else{
            Bills::create([
                'user_id' =>  $request->user_id,
                'receipt' => $receiptNumber,
                'month' =>  $request->month,
                'rent' => $request->rent,
                'water' => $request->water,
                'internet' => $request->internet,
                'electricity' => $request->electricity,
                'total' => $request->rent + $request->water + $request->internet + $request->electricity,
                'due' => $request->due,
                'created_at' => now(),
            ]);
        }
        return redirect()->route('admin.bills')->with('success', __('validation.addTenanTsucess'));
    }
}
