<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\VillaModel;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $villa = VillaModel::all();
        // return view ('products.product', ['villa'=>$villa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.createVilla');
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
            'title'         => 'max:255|min:15',
            'desc'          => 'required|max:255|min:15',
            'street'        => 'required|max:255',
            'village'       => 'required',
            'city'          => 'required',
            'prov'          => 'required',
            'zipCode'       => 'required|min:5|max:5',
            'dateOrdered'   => 'required',
            'price'         => 'required',
        ]);

        $villa = new VillaModel;
        $villa->idMerchant = $request->idMerchant;
        $villa->title = $request->title;
        $villa->desc = $request->desc;
        $villa->street = $request->street;
        $villa->village = $request->village;
        $villa->city = $request->city;
        $villa->prov = $request->prov;
        $villa->zipCode = $request->zipCode;
        $villa->dateOrdered = $request->dateOrdered;
        $villa->price = $request->price;

        $villa->save();

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
