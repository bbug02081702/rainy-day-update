<?php

namespace App\Http\Controllers;
use App\Models\Girl;
use Illuminate\Http\Request;

class GirlController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //phan trang la 5
        $girl = Girl::paginate(5);
        // lay cac thong tin sv tra ve view
        return view('index', compact('girl'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tra ve view create
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //lay tat ca cac data gui len tu client
        Girl::create($request->all());
        // dd($request);
        //dieu huong view sang indec
        return redirect()->route('girls.index')->with('Thong bao','Them girl thanh cong');
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
    public function edit(Girl $girl)
    {
        //tra ve trang edit girl
        return view('edit', compact('girl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Girl $girl)
    {
        //update lay data update 
        $girl->update($request->all());
        // dd($girl);
        return redirect()->route('girls.index')->with('Thongbao','Cap nhat girl thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Girl $girl)
    {
        //
        $girl->delete();
        return redirect()->route('girls.index')->with('Thongbao','Xoa girl thanh cong');
    }
}
