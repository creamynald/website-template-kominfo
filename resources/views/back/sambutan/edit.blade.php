@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Website management</li>
        <li class="breadcrumb-item">Greetings Text</li>
        <li class="breadcrumb-item">Edit</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Text <b>{{ $sambutan->judul }}</b></h5>
                    <a href="{{ route('sambutan.index') }}" class="btn btn-warning mb-3 in-line btn-sm text-white"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                    
                    <!-- Vertical Form -->
                    <form method="post" class="row g-3" action="{{ route('sambutan.update', $sambutan->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul Sambutan</label>
                            <input type="text" class="form-control" id="text" name="judul" value="{{ $sambutan->judul }}">
                        </div>
                        <div class="col-12">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control editor1" name="body" id="editor1">{{ $sambutan->body }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="body_full" class="form-label">Body Full</label>
                            <textarea class="form-control editor1" name="body_full" id="editor2">{{ $sambutan->body_full }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="text" name="nama" value="{{ $sambutan->nama }}">
                        </div>
                        <div class="col-12">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="text" name="jabatan" value="{{ $sambutan->jabatan }}">
                        </div>
                        <div class="col-12">
                            <label for="foto" class="form-label">Pilih Foto {{ $sambutan->jabatan }}</label>
                            <input type="file" class="form-control mb-2" name="foto">
                            <label for="foto">foto {{ $sambutan->jabatan }} saat ini</label><br>
                            <img src="{{ asset('uploads/' . $sambutan->foto) }}" alt="" class="card-img img-thumbnail w-25">
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