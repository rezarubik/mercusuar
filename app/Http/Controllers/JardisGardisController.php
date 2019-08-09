<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JardisGardisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu/jardis_dan_gardis');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createJardis()
    {
        return view('form/inputJardis');
    }

    public function createGardis()
    {
        return view('form/inputGardis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeJardis(Request $request)
    {
        //
    }

    public function storeGardis(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showJardis($id)
    {
        return view('detail/detailJardis');
    }

    public function showGardis($id)
    {
        return view('detail/detailGardis');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editJardis($id)
    {
        return view('form/editJardis');
    }

    public function editGardis($id)
    {
        return view('form/editGardis');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateJardis(Request $request, $id)
    {
        //
    }

    public function updateGardis(Request $request, $id)
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

    public function approve($id){
        return view('detail/approvalJardisDanGardis');
    }
}
