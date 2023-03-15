<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PresentsController extends Controller
{
    public function index()
    {
        // Return a view that displays all presents

        $data = [
            'present1' => 'Coding Book',
            'message1' => 'Hooray Christmas came early this year!!',
            'present2' => 'Suprise',
            'message2' => 'Sorry but you have to wait until next year!'
        ];
        // Alert::success('Success', 'Data saved successfully!');
        toast('Gifts loaded and ready!','success');
        return view('presents')->with($data);
    }

    public function create()
    {
        // Return a view that displays a form to create a new present
    }

    public function store(Request $request)
    {
        // Process the form data and create a new present
    }

    public function show($id)
    {
        // Return a view that displays a specific present
    }

    public function edit($id)
    {
        // Return a view that displays a form to edit a specific present
    }

    public function update(Request $request, $id)
    {
        // Process the form data and update the specified present
    }

    public function destroy($id)
    {
        // Delete the specified present
    }
}
