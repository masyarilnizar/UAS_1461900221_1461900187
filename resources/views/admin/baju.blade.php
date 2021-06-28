@extends('layoutAdmin')
@section('title','admin')
@section('body')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Baju</h1>

    </div>
</div>
<div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Baju</th>
                                            <th>Nama Baju</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th width="120">File</th>
                                            
                                            
                                        </tr>
                                    </thead>                                   

                                    <tbody>
                            
                                    @foreach ($baju as $Baju)
                                    <tr>
                                        <td>{{ $Baju->kode_baju }}</td>
                                        <td>{{ $Baju->nama_baju }}</td>
                                        <td>{{ $Baju->deskripsi }}</td>
                                        <td>{{ $Baju->harga }}</td>
                                        <td>{{ $Baju->stok }}</td>
                                        <td><img width="150px" src="{{ asset('img/baju/'.$Baju->file) }}"></td>
                                        <!-- <td><a href="#">Edit</a> | 
                                            <a href="#">Hapus</a>
                                        </td> -->
                                    </tr>
                                    @endforeach
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
        @yield('tambah_baju')
                

@endsection