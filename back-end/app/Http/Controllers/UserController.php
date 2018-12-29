<?php

namespace App\Http\Controllers;


use App\Http\Requests\userRequest;
use App\Http\Resources\userResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index() {
        //only admin
        return userResource::collection(User::all());
        //return all user
    }
    public function show (User $user) {
        //return response()->json($user);
        $state_ıd=$user->state_id;
        $state=DB::table('states')->where('id',$state_ıd)->value('name');
        $user['state_id'] = $state;
        $city_id=$user->city_id;
        $city=DB::table('cities')->where('id',$city_id)->value('name');
        $user['city_id'] =$city;
        //return response()->json($user);
        return new userResource($user);
    }

    public function update(userRequest $request, User $user)
    {
        //Admin or OwnUser id

        //$this->ProductUserCheck($product);
        //$request['detail'] = $request->description;
        //unset($request['description']);
        //$product->update($request->all());
        //return response([
            //'data' => new ProductResource($product)
        //],Response::HTTP_CREATED);
        $user->update($request->all());
        return response()->json($user);
    }
    public function store (userRequest $request) {
        $user = new User();
        $user -> name = $request ->name;
        $user -> password = $request -> password;
        $user -> email = $request-> email;
        $user -> state_id = $request -> state_id;
        $user -> city_id = $request -> state_id;
        $user['liked_category_id'] = $request -> liked_category_id;
        $user -> save();
        return response([
            'data' => new userResource($user)
        ],Response::HTTP_CREATED);

    }
}
