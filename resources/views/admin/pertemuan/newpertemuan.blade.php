@extends('layouts.dashboard')
@section('page_heading','Pertemuan Baru')
@section('section')
<div class="col-sm-12">
<div class="row">
  <div class="col-lg-6">
      <form method="POST" action="{{ route('savepertemuan') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" name="id_training" value="{{ $cari->id_training }}">

          <div class="form-group">
              <label>Nama Training</label>
              <p class="form-control-static">{{$cari->nama_training}}</p>
          </div>

          <div class="form-group">
              <label>Tanggal Pelaksanaan</label>
              <input name="tanggal_pelaksanaan" class="form-control" type="text">
          </div>

          <div class="form-group">
              <label>Deskripsi Pertemuan</label>
              <textarea name="deskripsi_pertemuan" class="form-control" rows="3"></textarea>
          </div>

          <div class="form-group">
              <label>File Bahan Ajar</label>
              <input name="filebahan" id="filebahan" class="file" type="file">
          </div>

          <button name="submit" value="save" type="submit" class="btn btn-success">Submit Button</button>
            <button type="reset" class="btn btn-danger">Reset Button</button>
        </form> <br>
    </div>
</div>
</div>


@stop
