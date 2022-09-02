<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;

class customController extends Controller
{
    public function create(Request $request)
    {
        $data = $this->validateForm($request);
        Custom::create($data);
    }
    public function read()
    {
        return Custom::all();
    }
    public function readOne($id)
    {
        return Custom::find($id);
    }
    public function delete($id)
    {
        Custom::find($id)->delete();

    }
    public function edit(Request $request, $id)
    {
        $data = $this->validateForm($request);
        Custom::find($id)->update($data);
    }
    public function validateForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number'=> 'required',

        ]);
        return $validated;
    }
}
