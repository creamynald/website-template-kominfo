@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Articles management</li>
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item">Add Playlist</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Playlist Video <b>{{ $playlist->judul_playlist }}</b></h5>
                    <a href="{{ route('playlist.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('playlist.update', $playlist->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="judul" class="form-label">Playlist</label>
                            <input type="text" value="{{ $playlist->judul_playlist }}" class="form-control" id="text" placeholder="masukkan judul playlist video" name="judul_playlist">
                        </div>
                        <div class="col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="editor1">{{ $playlist->deskripsi }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select type="text" class="form-control" id="text" name="is_active">
                                <option value="1" {{ $playlist->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $playlist->is_active == '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>
                        {{-- <div class="col-12">
                            <label for="gambar" class="form-label">Gambar Playlist</label>
                            <input type="file" class="form-control" name="gambar_playlist">
                            <label for="gambar" class="mt-2">Gambar saat ini</label><br>    
                            <img src="{{ asset('uploads/' . $playlist->gambar_playlist) }}" alt="" class="card-img img-thumbnail w-25">
                        </div> --}}
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