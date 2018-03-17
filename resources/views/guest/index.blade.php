@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">

          <div class="col-md-8 col-md-offset-2">
 
                            

               <div class="panel panel-default">
                    <div class="panel-heading" style="height: 66px; font-size: 30px;">DAFTAR BARANG
                        <div class=" panel-title pull-right">
                            <form class="form-inline" action="{{url('/filter/barang')}}" method="get">
                                <input type="text" name="search" class="form-control">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    @if(isset($filter))
                     <div class="panel-body">
                        @foreach ($filter as $data)
                        <div class="panel panel-body"> 
                            
                           
                        <div class="item">
                            <center><img src="{{asset('/img/'.$data->cover)}}" alt="" height="250px" width="400px">
                        </div>
                             <div >
                             <center>
                             <h4>
                                <font color="black">
                              <b>
                             Nama Barang:
                             {!! $data ->nama_barang!!}
                             </div>

                             <h4>
                                <font color="black">
                              <b>
                             <div>
                             <center>

                             Harga Barang:
                             {!! $data ->harga!!}
                             </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="panel-body">
                        @foreach ($barang as $data)
                        <div class="panel panel-body"> 
                            
                           
                        <div class="item">
                            <center><img src="img/{{$data->cover}}" alt="" height="250px" width="400px">
                        </div>
                             <div >
                             <center>
                             <h4>
                                <font color="black">
                              <b>
                             Nama Barang:
                             {!! $data ->nama_barang!!}
                             </div>

                             <h4>
                                <font color="black">
                              <b>
                             <div>
                             <center>

                             Harga Barang:
                             {!! $data ->harga!!}
                             </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
               </div>
          </div>
     </div>
</div>
@endsection
