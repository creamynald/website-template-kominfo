@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Articles management</li>
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item">Edit Materi</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Materi {{ $materi->judul_materi }}</h5>
                    <a href="{{ route('materi.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('materi.update', $materi->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul Materi</label>
                            <input type="text" class="form-control" id="text" name="judul_materi" value="{{ $materi->judul_materi }}">
                        </div>
                        <div class="col-12">
                            <label for="link" class="form-label">ID Video</label>
                            <small>masukkan id video youtube, contoh: <i><b>https://www.youtube.com/watch?v=wX2HUsCbYi4</b></i>, cukup input <b>wX2HUsCbYi4</b> saja</small>
                            <input type="text" class="form-control" id="text" name="link" value="{{ $materi->link }}">
                        </div>
                        <div class="col-12">
                            <label for="body" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="editor1">{{ $materi->deskripsi }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="playlist" class="form-label">Playlist</label>

                            <select name="playlist_id" class="form-control">
                                @foreach ($playlist as $row) 
                                    @if ($row->id == $materi->playlist_id)
                                        <option value="{{ $row->id }}" selected='selected'>{{ $row->judul_playlist }}</option>
                                    @else   
                                    <option value="{{ $row->id }}">{{ $row->judul_playlist }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select type="text" class="form-control" id="text" name="is_active">
                                <option value="1" {{ $materi->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $materi->is_active == '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="gambar" class="form-label">Gambar Artikel</label>
                            <input type="file" class="form-control mb-2" name="gambar_materi">
                            <label for="gambar">Gambar saat ini</label><br>
                            <img src="{{ asset('uploads/' . $materi->gambar_materi) }}" alt="" class="card-img img-thumbnail w-25">
                        </div>
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form><!-- Vertical Form -->
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection