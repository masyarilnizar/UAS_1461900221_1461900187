@extends('layoutAdmin')
@section('body')
<br></br>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Tambah Baju</h1>

    </div>
</div>


<form action="/tambah_baju/upload" method="post" enctype="multipart/form-data">
	@csrf
	<!-- <div class="form-group">                                    
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kode Baju <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="kode_baju" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br> -->
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nama Baju <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="nama_baju" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Deskripsi <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="deskripsi" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Harga Baju <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="harga" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Stok <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="stok" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> File <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="file" name="file" required="required" class="form-control col-md-7 col-xs-12">
		</div>
	</div>
</br>
	<br><button type="submit">Unggah</button></br>
	<!-- <table style="border : 1px solid #CCC; border-collapse: collapse;" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
				<th>Kode Baju</th>
				<th><input type="text" name="kode_baju"></th>
			</tr>
			<tr>
				<th>Nama Baju</th>
				<th><input type="text" name="nama_baju"></th>
			</tr>
			<tr>
				<th>Deskripsi</th>
				<th><input type="text" name="deskripsi"></th>
			</tr>
			<tr>
				<th>Harga Baju</th>
				<th><input type="text" name="harga"></th>
			</tr>
			<tr>
				<th>File</th>
				<th><input type="text" name="file"></th>
			</tr>
			<tr>
				<th>Stok</th>
				<th><input type="text" name="Stok"></th>
			</tr>

		</thead>
</table> -->

		
	
	<!-- <br>Nama Baju : <input type="text" name="nama_baju"></br>
	<br>Deskripsi : <input type="text" name="deskripsi"></br>
	<br>Harga Baju : <input type="text" name="harga"></br>
	<br>File : <input type="text" name="file"></br>
	<br>Stok : <input type="text" name="Stok"></br>
	<br></br> -->
	
</form>

<!-- </div>
    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">
        <div class="form-group">
            <input type="hidden" name="nama_baju" class="form-control"  value="nama_baju"  readonly>
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> nama baju <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="nama_baju" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <form action="/upload" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
</div> -->
@endsection