<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TernakModel;

class TernakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ternak = TernakModel::all();
        // return view ('products.product', ['ternak'=>$ternak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.createTernak');
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
            'year'      => 'required|max:255',
            'month'     => 'required',
            'day'       => 'required',
            'gender'    => 'required',
            'weight'    => 'required|min:1',
            'price'     => 'required',
        ]);

        $ternak = new TernakModel;
        $ternak->idMerchant = $request->idMerchant;
        $ternak->title = $request->title;
        $ternak->desc = $request->desc;
        $ternak->year = $request->year;
        $ternak->month = $request->month;
        $ternak->day = $request->day;
        $ternak->gender = $request->gender;
        $ternak->weight = $request->weight;
        $ternak->price = $request->price;

        $ternak->save();

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
