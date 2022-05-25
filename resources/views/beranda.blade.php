
@extends('layouts.main')

@section('konten')

{{-- headLine[0] --}}
<div class="container-fluid">
    <div class="container">

      <div class="row">
        {{-- <img src="https://i.ytimg.com/vi/r8DMHagemHI/maxresdefault.jpg" class="img-fluid h-50 w-100 shadow-lg mt_-1" alt="..."> --}}
      </div>

      <div class="row pt-5">
        <div class="col-12">
          <div class="row">
            <h2 class="fs-2 fw-bold text-center text-light">Untuk Anda Hari ini</h2>
            <div class="row d-flex justify-content-center mt-1 mx-auto">
              <div class="col-1 bg-warning mx-2" style="padding: 2px"></div>
              <div class="col-1 bg-warning" style="padding: 2px"></div>
            </div>
          </div>
        </div>
      </div>
        <div class="album py-4 py-md-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
              {{-- card akan di looping atau sesuai isi dengan jumlah data --}}
                @if($headLine->count())
                <div class="col">
                    <div class="card shadow-lg">
                        <div class="py-1 px-1 py-md-2 px-md-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/berita?kategori={{ $headLine[0]->kategori->name }}" class="text-decoration-none text-light"> {{ $headLine[0]->kategori->name }}</a>
                        </div>
                      <img class="rounded-2" src="https://source.unsplash.com/700x400?mosque,muslim" alt="">
                      <div class="card-body">

                         <a href="/berita/{{ $headLine[0]->slug }}" class="text-decoration-none" style="font-family: Times New Roman, Times, serif;"><h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $headLine[0]->title }}</h5></a>

                         <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/berita?author={{ $headLine[0]->user->username }}">{{ $headLine[0]->user->name }}</a></small>

                         <hr class="w-100 clearfix mt-2" />

                        <p class="card-text">{{ $headLine[0]->excerpt }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted"><span class="fw-bold">Diposting:</span> {{ $headLine[0]->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="/berita/{{ $headLine[0]->slug }}" class="btn text-decoration-none btn-primary mt-2 mb-1">Selengkapnya..</a>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card shadow-lg">
                        <div class="py-1 px-1 py-md-2 px-md-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/berita?kategori={{ $headLine[0]->kategori->name }}" class="text-decoration-none text-light"> {{ $headLine[1]->kategori->name }}</a>
                        </div>
                      <img class="rounded-2" src="https://source.unsplash.com/700x400?mosque,muslim" alt="">
                      <div class="card-body">

                         <a href="/berita/{{ $headLine[1]->slug }}" class="text-decoration-none" style="font-family: Times New Roman, Times, serif;"><h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $headLine[1]->title }}</h5></a>

                         <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/berita?author={{ $headLine[1]->user->username }}">{{ $headLine[1]->user->name }}</a></small>

                         <hr class="w-100 clearfix mt-2" />

                        <p class="card-text">{{ $headLine[1]->excerpt }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted"><span class="fw-bold">Diposting:</span> {{ $headLine[1]->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="/berita/{{ $headLine[1]->slug }}" class="btn text-decoration-none btn-primary mt-2 mb-1">Selengkapnya..</a>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card shadow-lg">
                        <div class="py-1 px-1 py-md-2 px-md-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/berita?kategori={{ $headLine[0]->kategori->name }}" class="text-decoration-none text-light"> {{ $headLine[2]->kategori->name }}</a>
                        </div>
                      <img class="rounded-2" src="https://source.unsplash.com/700x400?mosque,muslim" alt="">
                      <div class="card-body">

                         <a href="/berita/{{ $headLine[2]->slug }}" class="text-decoration-none" style="font-family: Times New Roman, Times, serif;"><h5 class="card-text fw-semibold text-decoration-none text-dark">{{ $headLine[2]->title }}</h5></a>

                         <small class="fw-normal font-Roboto">Oleh: <a class="text-decoration-none" href="/berita?author={{ $headLine[0]->user->username }}">{{ $headLine[2]->user->name }}</a></small>

                         <hr class="w-100 clearfix mt-2" />

                        <p class="card-text">{{ $headLine[2]->excerpt }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted"><span class="fw-bold">Diposting:</span> {{ $headLine[2]->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="/berita/{{ $headLine[2]->slug }}" class="btn text-decoration-none btn-primary mt-2 mb-1">Selengkapnya..</a>
                      </div>
                    </div>
                  </div>
                  @else
                  <h1 class="text-center">Tidak Ada Berita</h1>
                @endif
            </div>
        </div>
          <div class="row pt-5">
            <div class="col-12">
              <div class="row">
                <h2 class="fs-2 fw-bold text-center text-light">Tenaga Pendidik</h2>
                <div class="row d-flex justify-content-center mt-1 mx-auto">
                  <div class="col-1 bg-warning mx-2" style="padding: 2px"></div>
                  <div class="col-1 bg-warning" style="padding: 2px"></div>
                </div>
              </div>
            </div>
          </div>



          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-3 py-5 ms-md-auto">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                <img src="https://source.unsplash.com/500x500?person" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                  <p class="fs-4 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg" style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1 ">
                <img src="https://source.unsplash.com/500x500?person" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                  <p class="fs-4 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg " style="background-color:rgba(0, 0, 0, 0.10);">
              <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1 ">
                <img src="https://source.unsplash.com/500x500?person" class="w-70 h-75 img-fluid rounded rounded-circle mx-auto shadow-lg img-thumbnail" alt="...">
                <div class="h-50 w-100 mt-4 mb-3">
                  <p class="fs-4 text-center pt-3 fw-bold" style="text-color: rgb(220, 229, 237)">Ustd. Imam Junaidi</p>
                </div>
              </div>
              </div>
          </div>
      </main>
      <div class="row d-flex justify-content-center mx-auto my-5">
        <div class="col-md-4 col-6">
            <button type="button" class="btn btn-success">Pendidik</button>
        </div>
      </div>
    </div>
</div>
@endsection
