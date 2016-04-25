<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\WisataModel;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $wisata = WisataModel::all();
        // return view ('merchant.product', ['wisata'=>$wisata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.createWisata');
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
            'ticketStock'   => 'required|min:1',
            'price'         => 'required',
        ]);

        $wisata = new WisataModel;
        $wisata->idMerchant = $request->idMerchant;
        $wisata->title = $request->title;
        $wisata->desc = $request->desc;
        $wisata->street = $request->street;
        $wisata->village = $request->village;
        $wisata->city = $request->city;
        $wisata->prov = $request->prov;
        $wisata->zipCode = $request->zipCode;
        $wisata->ticketStock = $request->ticketStock;
        $wisata->price = $request->price;

        $wisata->save();

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
