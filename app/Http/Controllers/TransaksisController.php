<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Transaksis;
use Illuminate\Support\Facades\Session;
use App\Barang;
class TransaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        //
        
         if ($request->ajax()){
            $transaksis = Transaksis::with(['barang']);
            return Datatables::of($transaksis)
             
            ->addColumn('action', function($transaksi){
                return view('datatable._action', [
                'model' => $transaksi,
                'form_url' => route('transaksis.destroy',$transaksi->id), 
                'edit_url' => route('transaksis.edit',$transaksi->id),
                'confirm_message' => 'Yakin mau Menghapus'. $transaksi->id .'?'
                ]);
        })->make(true);
        }
        $html = $htmlBuilder

         ->addColumn(['data'=>'nama_pembeli','name'=>'nama_pembeli','title'=>'Nama Pembeli'])
         ->addColumn(['data'=>'no_tlp','name'=>'no_tlp','title'=>'No Telepon'])
         ->addColumn(['data'=>'alamat_pembeli','name'=>'alamat_pembeli','title'=>'Alamat Pembeli'])
         ->addColumn(['data'=>'tgl_membeli','name'=>'tgl_membeli','title'=>'Tanggal Pembelian'])
         ->addColumn(['data'=>'barang.nama_barang','name'=>'barang.nama_barang','title'=>'Barang'])
         ->addColumn(['data'=>'jumlah_barang','name'=>'jumlah_barang','title'=>'Jumlah Barang'])
          //->addColumn(['data'=>'total_harga','name'=>'total_harga','title'=>'Total Harga']);

         ->addColumn(['data'=>'total_harga','name'=>'total_harga','title'=>'Total Harga'])
         ->addColumn(['data'=>'action','name'=>'action','title'=>'','orderable'=>false,'searchable'=>false]);
         return view('transaksis.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transaksis.create');
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
       
       if(Barang::find($request->barang_id)->jumlah_barang < $request->jumlah_barang){
             Session::flash("flash_notification",["level"=>"danger","message"=>"Mohon maaf Stock barang habis"]);
        return redirect()->route('transaksis.index');
        }else{
        $transaksis= new Transaksis();
        $transaksis->nama_pembeli=$request->nama_pembeli;
        $transaksis->no_tlp=$request->no_tlp;
        $transaksis->alamat_pembeli=$request->alamat_pembeli;
        $transaksis->tgl_membeli=date("Y-m-d H:i:s");
        $transaksis->barang_id=$request->barang_id;
        $transaksis->jumlah_barang=$request->jumlah_barang;
        $barang = Barang::find($request->barang_id);
        $barang->jumlah_barang = $barang->jumlah_barang - $request->jumlah_barang;
        $barang->save();
        $harga = $barang->harga;
        $total_harga = $harga * $request->jumlah_barang;
        $transaksis->total_harga=$total_harga;
        $transaksis->save();
        Session::flash("flash_notification",["level"=>"success","message"=>"Berhasil menyimpan $transaksis->nama_pembeli"]);
        return redirect()->route('transaksis.index');    
           }
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
         $transaksis = Transaksis::find($id);
        return view('transaksis.edit')->with(compact('transaksis'));
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
          $transaksis=Request::all();
          $transaksis->nama_pembeli=$request->get('nama_pembeli');
          $transaksis->no_tlp=$request->get('no_tlp');
          $transaksis->nama_pembeli=$request->get('nama_pembeli');
          $transaksis->nama_pembeli=$request->get('nama_pembeli');

        Session::flash('flash_notification', ["level"=>"success", "message"=>"Berhasil mengubahn $transaksis->id"]);
        return redirect()->route('transaksis.index');

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
        Transaksis::destroy($id);

        Session::flash("flash_notification", ["level"=>"success","message"=>"Data Transaksi berhasil dihapus"]);
        return redirect()->route('transaksis.index');
    }
}
