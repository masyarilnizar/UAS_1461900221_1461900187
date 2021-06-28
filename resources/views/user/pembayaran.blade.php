@extends('layoutUser')
@section('body')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Products</h2>
                <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
            </div>
        </div>
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Pembelian</h2>
                <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
            </div>
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
                        <br>

                        <a href="/pembayaran/terima/{{$Pembayaran->kode_pembayaran}}"><button type="button" class="btn btn-success">Terima</button></a>
                        <a href="/pembayaran/detail/{{$Pembayaran->kode_pembayaran}}"><button type="button" class="btn btn-danger">Detail</button></a>
                    </div>
                </form>
            </div>
        </div>

        @endforeach

    </div>

    <a href="/user"><button type="button" class="btn btn-outline-danger">Kembali</button></a>

</div>

@endsection