<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TaniModel;

class TaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tani = TaniModel::all();
        // return view ('products.product', ['tani'=>$tani]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.createTani');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'max:255|min:15',
            'desc'      => 'required|max:255|min:15',
            'stock'     => 'required|max:255|min:1',
            'massStock' => 'required',
            'price'     => 'required',
            'massSell'  => 'required',
        ]);

        $tani = new TaniModel;
        $tani->idMerchant = $request->idMerchant;
        $tani->title = $request->title;
        $tani->desc = $request->desc;
        $tani->stock = $request->stock;
        $tani->massStock = $request->massStock;
        $tani->price = $request->price;
        $tani->massSell = $request->massSell;

        $tani->save();

        return view ('seller.sellerHome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
