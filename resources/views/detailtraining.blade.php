@extends('layouts.dashboard')
@section('page_heading')
{{ $judul->nama_training }}
@endsection
@section('section')

<table class="table table-striped">
    <thead>
        <tr>
            <th>Tanggal Pelaksanaan</th>
            <th>Deskripsi Training</th>
        </tr>
    </thead>
        <tbody>
          @foreach ($cari as $caripertemuan)
          <tr>
                <td> {{ $caripertemuan->tanggal_pelaksanaan }} </td>
                <td> {{ $caripertemuan->deskripsi_pertemuan }} </td>
            </tr>
          @endforeach
        </tbody>

</table>

@stop
