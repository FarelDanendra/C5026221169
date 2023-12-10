@extends('master3')
@section('judulhalaman','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Nilai</h3>

	<a href="/harddisk"> Kembali</a>

	<br/>
	<br/>

	<form action="/harddisk/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkharddisk" class="col-xl-1 col-form-label mr-2">merk harddisk</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" id="merkharddisk" name="merkharddisk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockharddisk" class="col-xl-1 col-form-label mr-2">stock harddisk</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" id="stockharddisk" name="stockharddisk">
            </div>
        </div>
        <div class = "form-group d-flex flex-row">
            <input class="col-1"  name="is_checked" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
            <label for = "tersedia" class = "control-label">Ketersedian barang</label>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
    @endsection
