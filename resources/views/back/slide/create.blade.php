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
                    <h5 class="card-title">Data Slide</h5>
                    <a href="{{ route('slide.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('slide.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="judul_slide" class="form-label">Judul Slide</label>
                            <input type="text" class="form-control" placeholder="masukkan judul materi video" name="judul_slide">
                        </div>
                        <div class="col-12">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" placeholder="masukkan link gambar" name="link">
                        </div>
                        <div class="col-12">
                            <label for="gambar" class="form-label">Gambar Slide</label>
                            <input type="file" class="form-control" name="gambar_slide">
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select type="text" class="form-control" id="text" name="status">
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