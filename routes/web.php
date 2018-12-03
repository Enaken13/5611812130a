<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//use Illuminate\Http\Request;
//use App\Address;


Route::post('/', 'AddressController@store');
Route::get('/','AddressController@show');
Route::delete('/{address}','AddressController@delete');


//Route::get('/', function () {
//    return view('addresses');
//});


//Route::post('/', function (Request $request) {
//    $validator = Validator::make($request->all(), [
//        'name' => 'required|max:255',
//        'city' => 'max:255',
//        'area' => 'max:255',
//        'street' => 'required|max:255',
//        'house' => 'max:255',
//        'information' => 'max:255',
//
//    ]);
//
//    if ($validator->fails()) {
//        return redirect('/')
//            ->withInput()
//            ->withErrors($validator);
//    }
//    $address = new Address;
//    $address->name = $request->name;
//    $address->city = $request->city;
//    $address->area = $request->area;
//    $address->street = $request->street;
//    $address->house = $request->house;
//    $address->information = $request->information;
//    $address->save();
//
//    return redirect('/');
//});


//Route::get('/', function () {
//    $addresses = DB::table('addresses')->select('*')->get();
//
//    return view('addresses', [
//        'addresses' => $addresses
//    ]);
//});



//Route::delete('/{address}', function (Address $address) {
//    $address->delete();
//
//    return redirect('/');
//});