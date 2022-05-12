@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Articles management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Articles management</li>
        <li class="breadcrumb-item">Articles</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Article</h5>
            <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah Artikel</a>
            
            <!-- Table with stripped rows -->
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                  {{ Session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="table-responsive">
                <table class="table datatable">
                  <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Post</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Author</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($artikel as $row)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $row->judul }}</td>
                            <td>{{ $row->kategori->nama_kategori }}</td>
                            <td>{{ $row->users->name }}</td>
                            <td><img src="{{ asset('uploads/' . $row->gambar_artikel) }}" width="80" class="img-thumbnail"></td>
                            <td>
                                <a href="{{ route('artikel.edit', $row->id) }}" class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil-square d-inline"></i></a>
                                <form action="{{ route('artikel.destroy', $row->id) }}" method="post" class="d-inline">
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
                            <td colspan="7" class="text-center">Data Masih Kosong</td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection