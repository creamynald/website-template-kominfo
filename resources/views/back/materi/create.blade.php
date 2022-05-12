@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Articles management</li>
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item">Add Materi</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Materi Video</h5>
                    <a href="{{ route('materi.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('materi.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="judul" class="form-label">Materi Video</label>
                            <input type="text" class="form-control" placeholder="masukkan judul materi video" name="judul_materi">
                        </div>
                        <div class="col-12">
                            <label for="link" class="form-label">ID Video</label><br>
                            <small>masukkan id video youtube, contoh: <i><b>https://www.youtube.com/watch?v=wX2HUsCbYi4</b></i>, cukup input <b>wX2HUsCbYi4</b> saja <br>*Jika tidak ada, masukkan <b>- / (strip)</b></small>
                            <input type="text" class="form-control" placeholder="wX2HUsCbYi4" name="link" required>
                        </div>
                        <div class="col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="editor1"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="playlist" class="form-label">Playlist</label>

                            <select name="playlist_id" class="form-control">
                                @foreach ($playlist as $row) 
                                    <option value="{{ $row->id }}">{{ $row->judul_playlist }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="gambar" class="form-label">Gambar Materi</label>
                            <input type="file" class="form-control" name="gambar_materi">
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select type="text" class="form-control" id="text" name="is_active">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
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