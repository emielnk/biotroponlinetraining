@extends('layouts.dashboard')
@section('page_heading')
{{ $judul->nama_training }}
@endsection
@section('section')

<div class="col-md-12 col-lg-12">
    <a href="./detailtraining/newpertemuan"><button style="margin-bottom:20px"type="button" class="btn btn-primary" name="Pertemuan Baru">Tambah Pertemuan</button></a>
    <a href="./detailtraining/newtest"><button style="margin-bottom:20px"type="button" class="btn btn-primary" name="Test Baru">Tambah Test</button></a>
    <a href="./detailtraining/evaluasi"><button style="margin-bottom:20px"type="button" class="btn btn-primary" name="Eval Baru">Tambah Evaluasi</button></a>
</div>

                  <!-- buat pre-test -->

                    <!-- <div class="col-lg-12 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#"><button style="margin:5px; float:right" type="submit" class="btn btn-danger">Delete</button></a>
                                        <a href="#"><button style="margin:5px; float:right" class="btn btn-success">Edit</button></a>
                                        <a href="./detailtraining/test/show"><h2>Test</h2></a>
                                    </div>
                                </div>
                                <p>Mengukur pemahaman peserta training terhadap materi</p>
                            </div>
                        </div>
                    </div> -->


                @if($cari)
                  @foreach($cari as $caripertemuan)
                    <div class="col-lg-12 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-12">
                  				              <a href="{{ route('destroytemu', ['id_train'=>$caripertemuan->id_training, 'id_per'=> $caripertemuan->id_pertemuan]) }}"><button style="margin:5px; float:right" type="submit" class="btn btn-danger">Delete</button></a>
                                        <a href="{{ route('editpertemuan', ['id_train'=>$caripertemuan->id_training, 'id_per'=> $caripertemuan->id_pertemuan]) }}"><button style="margin:5px; float:right" class="btn btn-success">Edit</button></a>
                                        <h2>{{$caripertemuan->tanggal_pelaksanaan}}</h2>
                                    </div>
                                </div>
                                <p>{!!$caripertemuan->deskripsi_pertemuan!!}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                @endif
                  <!-- buat post-test -->
                    <!-- <div class="col-lg-12 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#"><button style="margin:5px; float:right" type="submit" class="btn btn-danger">Delete</button></a>
                                        <a href="#"><button style="margin:5px; float:right" class="btn btn-success">Edit</button></a>
                                        <a href="./detailtraining/post-test"><h2>Post-Test</h2></a>
                                    </div>
                                </div>
                                <p>Mengukur pemahaman peserta training terhadap materi yang sudah di sampaikan</p>
                            </div>
                        </div>
                    </div> -->

                    <!-- buat evaluasi -->
                      <!-- <div class="col-lg-12 col-md-4">
                          <div class="thumbnail">
                              <div class="caption">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <a href="#"><button style="margin:5px; float:right" type="submit" class="btn btn-danger">Delete</button></a>
                                          <a href="#"><button style="margin:5px; float:right" class="btn btn-success">Edit</button></a>
                                          <a href="./detailtraining/evaluasi"><h2>Evaluasi Training</h2></a>
                                      </div>
                                  </div>
                                  <p>Mengevaluasi pelaksanaan training, agar pelaksanaan training semakin efektif dan bermanfaat</p>
                              </div>
                          </div>
                      </div> -->

@stop
