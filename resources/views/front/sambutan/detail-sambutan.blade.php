@extends('front.layouts.frontend')

@section('content')
<section id="team" class="team mt-5">
    <div class="container">
        @foreach ($sambutan as $row)
        <div class="row">
            <div class="col-lg-8 mt-3">
                <div class="blog-post">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                    <h2><b>{{ $row->judul }}</b></h2>
                </div>
                <div class="blog-body">
                    <div class="thumbnail">
                        <img src="#" alt="" class="img-fluid w-100">
                    </div>
                    <div class="detail-body">
                        <div style="text-align: justify;"><img style="width: 200px; height: 231px; float: left; margin-left: 0px; margin-right: 10px; margin-bottom: 10px; border: 5px solid #a9a9a9;" src="{{ asset('uploads/' . $row->foto) }}" alt="" />
                            {!! $row->body_full !!}
                        </div>
                        <p class="mt-5"><b>{{ $row->nama }}</b><br>
                        {{ $row->jabatan }}</p>  
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
        @endforeach
    </div>
</section>
@endsection