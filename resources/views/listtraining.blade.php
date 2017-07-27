@extends('layouts.dashboard')
@section('page_heading','List Training')
@section('section')

<div class="row">
  <div class="container">
    <div class="col-lg-12">
        <table id="listtraining" class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Training</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Deskripsi</th>
                    <th>Banyak Pertemuan</th>
                    <th>Edit</th>
					          <th>Delete</th>
                </tr>
            </thead>
                <tbody>

                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><a href="#"><button class="btn btn-success">Edit</button></a></td>
					              <td><a href="#"><button class="btn btn-danger">Delete</button></a> </td>
                    </tr>

                </tbody>

        </table>
    </div>
</div>
</div>
@stop
