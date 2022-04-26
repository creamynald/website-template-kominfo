@extends('front.layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="div">
                <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" alt="" class="img-fluid">
            </div>
            <div class="detail-content mt-2 p-4">
                <div class="detail-badge">
                    <a href=""><span class="badge bg-warning">{{ $artikel->kategori->nama_kategori }}</span></a>
                    <a href=""><span class="badge bg-primary">{{ $artikel->users->name }}</span></a>
                </div>
                <h2>{{ $artikel->judul }}</h2>
                <div class="detail-body">
                    <p>
                        {!! $artikel->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4">
            <div class="detail-sidebar-banners">
                <h4>{{ $bannerS->judul }}</h4>
                <hr>
                <a href="">
                    <img src="{{ asset('uploads/'.$bannerS->gambar_banner) }}" alt="" style="width: 100%">
                </a>
            </div>
            <div class="detail-sidebar-kategori mt-4">
                <h4>Kategori</h4>
                <hr>
                <div class="sidebar-kategori d-flex flex-wrap">
                    @foreach ($kategori as $kat)
                    <a href="" style="text-decoration: none;">
                        <p>{{ $kat->nama_kategori }}</p>
                    </a>
                    <div class="text-right">
                        <p class="ml-auto float-right">
                            <span class="badge bg-dark">{{ $kat->artikel->count() }}</span>
                        </p>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="detail-sidebar-artikel mt-4">
                <h4>Artikel Terbaru</h4>
                <hr>
                @foreach ($postinganTerbaru as $row)
                <ul class="list-unstyled">
                    <li class="media">
                      <img class="mr-3" src="{{ asset('uploads/'.$row->gambar_artikel) }}" style="width: 20%" alt="Generic placeholder image">
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">{{ $row->judul }}</h6>
                        </div>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection