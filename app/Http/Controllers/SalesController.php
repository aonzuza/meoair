<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Salepage;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Salepage::orderBy('created_at','desc')->paginate(10);

        return view('admin.sales.index')->with('sales',$sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

         $sale = new Salepage;
         $sale->title = $request['title'];
         $sale->body  = '';
         $sale->created_at = time();
         $response = $sale->save();

         return response()->json($response);

         //return redirect('admin/sales/show')->with('pageID',$sale->pageID);
         // return view('admin.sales.create')->with('pageID',$sale->pageID);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pageID = $request['pageID'];
        // $title  = $request['title'];
        $body   = $request['body'];

        $sale = Salepage::find($pageID);

        $sale->body = $body;

        $response = $sale->save();

        return response()->json($response);


    }
    public function storeTemp(Request $request)
    {
        //
        $pageID = $request['pageID'];

        $body   = $request['body'];

        $sale = Salepage::find($pageID);

        $sale->tempBody = $body;

        $response = $sale->save();

        return response()->json($response);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pageID)
    {
        $sale = Salepage::find($pageID);
        return view('salesShow')->with('html',$sale->body);
    }
    public function showTemp($pageID)
    {
      $sale = Salepage::find($pageID);
      return view('salesShow')->with('html',$sale->tempBody);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pageID)
    {

        $sale = Salepage::find($pageID);
        return view('admin.sales.edit')->with('sale',$sale);
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
    public function destroy($pageID)
    {
      $sale = Salepage::find($pageID);
      $sale->delete();
      return redirect('admin/sales');

    }
}
