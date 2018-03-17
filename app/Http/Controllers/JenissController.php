<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Jenis;
use Illuminate\Support\Facades\Session;


class JenissController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            $jenis = Jenis::all();
            return Datatables::of($jenis)
                ->addColumn('action',function($jenis){
                    return view('datatable._action',[
                        'model'    => $jenis,
                        'form_url' => route('jenis.destroy',$jenis->id),
                        'edit_url' => route('jenis.edit',$jenis->id),
                        'confirm_message' => 'Yakin Mau Menghapus '.$jenis->id . '?'
                    ]);
                })->make(true);
        

        }
        $html = $htmlBuilder
        ->addColumn(['data'=>'jenis_barang','name'=>'jenis_barang','title'=>'Jenis Barang'])
        ->addColumn(['data'=>'action','name'=>'action','title'=>'','orderable'=>false,'searchable'=>false]);
        return view('jenis.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('jenis.create');
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
         $this->validate($request, [
            'jenis_barang' => 'required|unique:jenis',
            ]);
        $jenis = Jenis::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"info",
            "message"=>"Berhasil menyimpan $jenis->jenis_barang "
            ]);
        return redirect()->route('jenis.index');
    
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
        $jenis = Jenis::find($id);
        return view('jenis.edit')->with(compact('jenis'));
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
         $this->validate($request, ['jenis_barang' =>'required|unique:jenis,jenis_barang,'.$id]);
        $jenis = Jenis::find($id);
        $jenis->update($request->only('jenis_barang'));
        Session::flash('flash_notification', ["level"=>"success", "message"=>"Berhasil mengubah $jenis->jenis_barang"]);
        return redirect()->route('jenis.index');

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

        Jenis::destroy($id);

        Session::flash("flash_notification", ["level"=>"success","message"=>"Jenis Barang berhasil dihapus"]);
        return redirect()->route('jenis.index');
    }
}
