@extends('layoutAdmin')
@section('body')

<link rel="stylesheet" href='{{ asset("css/fontawesome.css")}}'>
    <link rel="stylesheet" href='{{ asset("css/templatemo-sixteen.css")}}'>
    <link rel="stylesheet" href='{{ asset("css/owl.css")}}'>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
            @foreach($pembayaran as $Pembayaran)
            <div class="col-md-4">
                <div class="product-item">
                    <form method="post" action="/keranjang/ubah">
                    @csrf
                    <div class="down-content">
                        <a href="#">
                            <h4>{{$Pembayaran->kode_pembayaran}}</h4>
                        </a>
                        <h5>Harga : {{$Pembayaran->harga}}</h5>
                        <h5>Status : {{$Pembayaran-> status_bayar}}</h5>
                        <h5>Bukti : <img width="150px" src="{{ asset('img/bukti/'.$Pembayaran->bukti) }}"></h5>
                        <br>
                        
                        
                    </div>
                    </form>
                </div>
            </div>

            @endforeach
            
            </div>
        <a href="/admin/pembayaran"><button type="button" class="btn btn-outline-danger">Kembali</button></a>
    </div>    

@endsection