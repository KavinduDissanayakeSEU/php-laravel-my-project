<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use domain\Facades\ProductFacade;

class ProductController extends ParentController
{
    //view function
    public function index(){
        $response['items'] = ProductFacade::all();
        // dd($response);
        return view('pages.product.index')->with($response);
    }

    // create function
    public function store(Request $request){
        // dd($request);
        ProductFacade::store($request->all());
        return redirect()->back();
    }

    //delete function
    public function delete($item_id){
        ProductFacade::delete($item_id);
        return redirect()->back();
    }

    //
    public function status($item_id){
        ProductFacade::status($item_id);
        return redirect()->back();
    }

    public function edit(Request $request){
        $response['item'] = ProductFacade::get($request['item_id']);
        return view('pages.product.edit')->with($response);
    }
    public function update(Request $request, $item_id){
        ProductFacade::update($request->all(), $item_id);
        return redirect()->back();
    }
}
