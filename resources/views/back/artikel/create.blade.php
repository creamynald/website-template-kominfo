@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Articles management</li>
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item">Add Article</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Article</h5>
                    <a href="{{ route('artikel.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" id="text" placeholder="masukkan judul artikel" name="judul">
                        </div>
                        <div class="col-12">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" name="body" id="editor1"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="kategori" class="form-label">Kategori</label>

                            <select name="kategori_id" class="form-control">
                                @foreach ($kategori as $row) 
                                    <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="gambar" class="form-label">Gambar Artikel</label>
                            <input type="file" class="form-control" name="gambar_artikel">
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