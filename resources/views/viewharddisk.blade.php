@extends('master3')

@section('judul_halaman')
    <h3>View Teh</h3>

    <a href="/teh"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            @foreach ($teh as $t)
            <fieldset disabled>
                <form action="/pegawai/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $t->kodeteh }}">
                    <div class = "form-group row">
                        <label for = "merkteh" class = "col-sm-2 control-label align-self-center">Merk Teh:</label>
                        <div class = "col-sm-10">
                            <input type="merkteh" required="required" name="merkteh" value="{{ $t->merkteh }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "stockteh" class = "col-sm-2 control-label align-self-center">Stock Teh:</label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="jabatan" value="{{ $t->stockteh }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group row">
                        <input class="col-1" required="required" type = "checkbox" id = "tersedia"  name="is_checked" {{ $t->tersedia == 'y' ? 'checked' : '' }}>
                        <label for = "tersedia" class = "control-label">Ketersedian barang</label>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" >
                <a href="/teh" class="btn btn-primary w-25">Ok</a>
            </div>
        </div>
    </div>

@endsection
