<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $address = Address::create([
            'user_id' => $user->id,
            'city_id' => $request->city_id,
            'street' => $request->street,
            'number' => $request->number
        ]);

        return ['message' => 'ok'];
    }

    public function update(Request $request, $id)
    {
        return User::where('id', $id)->update($request->all());
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }

    public function findByCity($city_id)
    {
        $addresses = Address::where('city_id', $city_id)->get();
        $users = [];

        foreach ($addresses as $address){
            $users[] = $address->user;
        }

        return  $users;
    }

    public function findByState($state_id)
    {
        $cities = City::where('state_id', $state_id)->with('addresses')->get();
        $users = [];
        foreach ($cities as $city){
             foreach ($city->addresses as $address){
                 $users[] = $address->user;
             }
        }
        return $users;
    }
}
