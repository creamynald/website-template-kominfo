@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Posts management</li>
        <li class="breadcrumb-item">Categories</li>
        <li class="breadcrumb-item">Edit Category</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Kategori <b>{{ $kategori->nama_kategori }}</b></h5>
                    <a href="{{ route('kategori.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('kategori.update', $kategori->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="text" value="{{ $kategori->nama_kategori }}"  placeholder="masukkan kategori" name="nama_kategori">
                        </div>
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form><!-- Vertical Form -->
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection