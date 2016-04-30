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
        $ternak = TernakModel::all();
        return view ('products.list.listTernak', ['ternak'=>$ternak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.create.createTernak');
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
            'title'     => 'required|max:255|min:5',
            'desc'      => 'required|max:255|min:5',
            'year'      => 'required',
            'month'     => 'required',
            'day'       => 'required',
            'gender'    => 'required',
            'weight'    => 'required',
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

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ternak = TernakModel::find($id);
        if(!$ternak){
            abort(404);
        }
        return view('products.view.viewTernak')->with('ternak', $ternak);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ternak = TernakModel::find($id);
        if(!$ternak){
            abort(404);
        }
        return view('products.edit.editTernak')->with('ternak', $ternak);
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
        $this->validate($request, [
            'title'     => 'required|max:255|min:5',
            'desc'      => 'required|max:255|min:5',
            'year'      => 'required',
            'month'     => 'required',
            'day'       => 'required',
            'gender'    => 'required',
            'weight'    => 'required',
            'price'     => 'required',
        ]);

        $ternak = TernakModel::find($id);
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

        return redirect('/');
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
