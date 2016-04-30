<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\EdukasiModel;

class EdukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edukasi = EdukasiModel::all();
        return view ('products.list.listEdukasi', ['edukasi'=>$edukasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.create.createEdukasi');
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
            'street'        => 'required',
            'village'       => 'required',
            'city'          => 'required',
            'prov'          => 'required',
            'zipCode'       => 'required|min:5|max:5',
            'dateOrdered'   => '',
            'quota'         => 'required',
            'price'         => 'required',
        ]);

        $edukasi = new EdukasiModel;
        $edukasi->idMerchant = $request->idMerchant;
        $edukasi->title = $request->title;
        $edukasi->desc = $request->desc;
        $edukasi->street = $request->street;
        $edukasi->village = $request->village;
        $edukasi->city = $request->city;
        $edukasi->prov = $request->prov;
        $edukasi->zipCode = $request->zipCode;
        $edukasi->dateOrdered = $request->dateOrdered;
        $edukasi->quota = $request->quota;
        $edukasi->price = $request->price;

        $edukasi->save();

        return view ('products.list.listEdukasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edukasi = EdukasiModel::find($id);
        if(!$edukasi){
            abort(404);
        }
        return view('products.view.viewEdukasi')->with('edukasi', $edukasi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edukasi = EdukasiModel::find($id);
        if(!$edukasi){
            abort(404);
        }
        return view('products.edit.editEdukasi')->with('edukasi', $edukasi);
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
            'street'        => 'required',
            'village'       => 'required',
            'city'          => 'required',
            'prov'          => 'required',
            'zipCode'       => 'required|min:5|max:5',
            'dateOrdered'   => '',
            'quota'         => 'required',
            'price'         => 'required',
        ]);

        $edukasi = EdukasiModel::find($id);
        $edukasi->idMerchant = $request->idMerchant;
        $edukasi->title = $request->title;
        $edukasi->desc = $request->desc;
        $edukasi->street = $request->street;
        $edukasi->village = $request->village;
        $edukasi->city = $request->city;
        $edukasi->prov = $request->prov;
        $edukasi->zipCode = $request->zipCode;
        $edukasi->dateOrdered = $request->dateOrdered;
        $edukasi->quota = $request->quota;
        $edukasi->price = $request->price;

        $edukasi->save();

        return view ('products.list.listEdukasi');
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
