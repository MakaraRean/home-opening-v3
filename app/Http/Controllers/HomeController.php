<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $customers = DB::table('customers')->orderByDesc('id')->get();
        $addresses = Address::all();
        $count = DB::table('customers')->count('id');
        return view('index',['customers' => $customers,'addresses' => $addresses,'count' => $count]);
    }

    public function add(Request $request,Customer $customer){
        // $this->validate($request,[

        // ]);
        $customer->create([
            'khName' =>request()->khName,
            'enName' => request()->enName,
            'rielCurrency' => request()->rielCurrency,
            'usdCurrency' => request()->usdCurrency,
            'address_id' => request()->address_id,
            'other' => request()->other
        ]);

        return redirect()->route('home')
                ->with('success','ទិន្នន័យបានរក្សាទុក');
    }

    public function newAddress(){
        return view('new-address');
    }

    public function saveNewAddress(Address $address,Request $request){
        // $this->validate($request,[
        //     'name' => 'required'
        // ]);

        $address->create([
            'name' => request()->addressName,
            'desc' => request()->desc
        ]);

        if($address){
            return redirect()->route('home')->with('success','New address has been added');
        }

        return abort(403);
    }

    public function delete(Customer $id){
        $id->delete();
        return redirect()->route('home')
         ->with('success','Data has been deleted.');
    }

    public function edit(Customer $id){
        $addresses = Address::all();
        return view('edit',['addresses' => $addresses,'customer' => $id]);
    }

    public function update(Customer $id){
        $id->update([
            'khName' =>request()->khName,
            'enName' => request()->enName,
            'rielCurrency' => request()->rielCurrency,
            'usdCurrency' => request()->usdCurrency,
            'address_id' => request()->address_id,
            'other' => request()->other
        ]);
        return redirect()->route('home')->with('success','Your data has been updated');
    }

    public function report(){
        $customers = Customer::all();
        $amountRiel = DB::table('customers')->sum('rielCurrency');
        $amountUsd = DB::table('customers')->sum('usdCurrency');
        $count = DB::table('customers')->count('id');
        return view('report',['customers' => $customers,'amountRiel' => $amountRiel,'amountUsd' => $amountUsd,'count' => $count]);
    }


    public function search(){
        if (request()->method() == 'GET')
            return view('search');
        $search = request()->search;
        $customers = DB::table('customers')->where('khName','like','%'.$search.'%')->orWhere('enName','like','%'.$search.'%')->get();
        $addresses = Address::all();
        $count = $customers->count();
        return $customers;
    }

    public function address($id){
        $data = DB::table('addresses')->where('id','=',$id)->first();
        return $data;
    }

    public function login(){
        return view('login');
    }
}
