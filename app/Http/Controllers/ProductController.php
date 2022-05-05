<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product as RequestsProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $all = Product::all();
        return response()->json([
            'data' => $all
        ]);
    }


    public function create()
    {
        //
    }


    public function store(RequestsProduct $request)
    {

        $model = new Product();
        $model->name = $request->name;
        $model->price = $request->price;
        $model->description = $request->description;
        $model->idCate = $request->idCate;
        $model->status = $request->status;
        $model->image = $request->image;
        $model->save();
        return response()->json(200);
    }


    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }


    public function edit($id)
    {

    }


    public function update(RequestsProduct $request, $id)
    {

        $model = Product::find($id);
        $model->name = $request->name;
        $model->price = $request->price;
        $model->description = $request->description;
        $model->idCate = $request->idCate;
        $model->status = $request->status;
        $model->image = $request->image;
        $model->view = 0;
        $model->save();
    }

    public function destroy($id)
    {
        if (!($product = Product::find($id))) return abort(404);
        $product->delete();
        return redirect()->back();
    }
}
