@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Posts management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Posts management</li>
        <li class="breadcrumb-item">Categories</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Kategori</h5>
                        <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah Kategori</a>
                    
                    <!-- Line Chart -->
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <i class="bi bi-check-circle me-1"></i>
                            {{ Session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $row)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $row->nama_kategori }}</td>
                                        <td>{{ $row->slug }}</td>
                                        <td>
                                            <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil-square"></i></a>
                                            <form action="{{ route('kategori.destroy', $row->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-link btn-danger btn-sm">
                                                <i class="bi bi-trash text-white"></i>
                                            </button>                                                
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Data Masih Kosong</td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- End Line Chart -->
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection