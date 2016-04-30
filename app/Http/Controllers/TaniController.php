<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TaniModel;

use Validator;

class TaniController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tani = TaniModel::all();
        return view ('products.list.listTani', ['tani'=>$tani]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.create.createTani');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(), [
            'title'     => 'required|max:255|min:5',
            'desc'      => 'required|max:255|min:5',
            'stock'     => 'required|max:255|min:1',
            'massStock' => 'required',
            'price'     => 'required',
            'massSell'  => 'required',
        ]);
        // dd($validator->errors());
         if ($validator->fails()) {
            return redirect('produkTani/create')
                        ->withErrors($validator->errors())
                        ->withInput($request->all());
        }

        $tani = new TaniModel;
        $tani->idMerchant = $request->idMerchant;
        $tani->title = $request->title;
        $tani->desc = $request->desc;
        $tani->stock = $request->stock;
        $tani->massStock = $request->massStock;
        $tani->price = $request->price;
        $tani->massSell = $request->massSell;

        $tani->save();

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
        $tani = TaniModel::find($id);
        if(!$tani){
            abort(404);
        }
        return view('products.view.viewTani')->with('tani', $tani);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tani = TaniModel::find($id);
        if(!$tani){
            abort(404);
        }
        return view('products.edit.editTani')->with('tani', $tani);
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
            'stock'     => 'required|max:255|min:1',
            'massStock' => 'required',
            'price'     => 'required',
            'massSell'  => 'required',
        ]);

        $tani = TaniModel::find($id);
        $tani->idMerchant = $request->idMerchant;
        $tani->title = $request->title;
        $tani->desc = $request->desc;
        $tani->stock = $request->stock;
        $tani->massStock = $request->massStock;
        $tani->price = $request->price;
        $tani->massSell = $request->massSell;

        $tani->save();

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
