<?php

namespace App\Http\Controllers;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Quotation;

class AddressController extends Controller
{
    public function index()
    {
        return view('addresses');
    }

    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'city' => 'required|max:255',
            'area' => 'required|max:255',
            'street' => 'max:255',
            'house' => 'max:255',
            'information' => 'max:255',

        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        $address = new Address;
        $address->name = $request->name;
        $address->city = $request->city;
        $address->area = $request->area;
        $address->street = $request->street;
        $address->house = $request->house;
        $address->information = $request->information;
        $address->save();

        return redirect('/');
    }

    public function select()
    {
        $addresses = DB::table('addresses')->select('*')->orderBy('name')->get();

        return view('addresses', [
            'addresses' => $addresses
        ]);
    }


    public function delete(Address $address)
    {
        $address->delete();

        return redirect('/');

    }
}
