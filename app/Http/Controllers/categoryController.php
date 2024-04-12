<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class categoryController extends Controller
{

    public function index()
    {
        $categories = categories::all();

        return response()->json([
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $categories = categories::find($id);

        return response()->json([
            'categories' => $categories
        ]);
    }

    public function create(Request $request)
    {
        $categories = new categories;

        $categories->name = $request->input('name');
        $categories->status = $request->input('status');
        $categories->save();

        return response()->json([
            'message' => 'Created successfully',
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $categories = categories::find($id);

        $categories->name = $request->input('name');
        $categories->status = $request->input('status');
        $categories->save();

        return response()->json([
            'message' => 'Updated successfully',
            'categories' => $categories
        ]);
    }

    public function delete() 
    {
        
    }

}
