<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dht11;

class Dht11Controller extends Controller
{

    public function index()
    {
        $dht11 = Dht11::all();

        $message = [
             'status' => true,
             'data' => $dht11
        ];
        return $message;
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        Dht11::create($request->all());
    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
