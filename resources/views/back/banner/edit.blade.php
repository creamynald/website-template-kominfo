@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Website management</li>
        <li class="breadcrumb-item">Banners</li>
        <li class="breadcrumb-item">Edit Banner</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Banner <b>{{ $banner->judul }}</b></h5>
                    <a href="{{ route('banner.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul Banner</label>
                            <input type="text" class="form-control" id="text" name="judul" value="{{ $banner->judul }}">
                        </div>
                        <div class="col-12">
                            <label for="link" class="form-label">link</label>
                            <input type="text" class="form-control" id="text" name="link" value="{{ $banner->link }}">
                        </div>
                        <div class="col-12">
                            <label for="status" class="form-label">Status</label>
                            <select type="text" class="form-control" id="text" name="status">
                                <option value="1" {{ $banner->status == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $banner->status == '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="gambar" class="form-label">Gambar Banner</label>
                            <input type="file" class="form-control mb-2" name="gambar_banner">
                            <label for="gambar">Gambar saat ini</label><br>
                            <img src="{{ asset('uploads/' . $banner->gambar_banner) }}" alt="" class="card-img img-thumbnail w-25">
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