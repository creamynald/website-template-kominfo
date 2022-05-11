@extends('front.layouts.frontend')

@section('content')
<section id="team" class="team mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-3">
                <div class="blog-post">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
                        <li class="breadcrumb-item active">{{ $artikel->kategori->nama_kategori }}</li>
                    </ol>
                    <span><i class="fa-regular fa-clock text-warning mt-4"></i> {{ $artikel->created_at->isoFormat('dddd, D MMMM Y'); }} | Dibaca {{ $artikel->views }} Kali</span>
                    <h2><b>{{ $artikel->judul }}</b></h2>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="d-flex align-items-start">
                                <div class="minipic">
                                    <img src="{{ asset('/img/author.jpg') }}" alt="{{ $artikel->users->name }}" class="mr-2 rounded-circle" style="width:50px;height: 50px;">
                                </div>
                                <div class="member-info p-10" style="margin-left: 5px">
                                  <h6 style="margin-bottom:-5px; margin-top: 10px;"><b>{{ $artikel->users->name }}</b></h6>
                                  <p><small class="text-warning">{{ $artikel->users->id == '1' ? 'Administartor' : 'Editor' }}</small></p>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-2 d-none d-sm-block">
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-print"></i> Print</button>
                        </div>
                    </div>
                </div>
                <div class="blog-body">
                    <div class="thumbnail">
                        <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="detail-body mt-3">
                        <div style="text-align: justify;">
                            {!! $artikel->body !!}
                        </div>  
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
@endsection