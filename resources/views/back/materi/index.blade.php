@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Articles management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Articles management</li>
        <li class="breadcrumb-item">Playlist</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Playlist</h5>
            <a href="{{ route('materi.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah Playlist</a>
            
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
                        <th scope="col">Materi</th>
                        <th scope="col">Url</th>
                        <th scope="col">Playlist</th>
                        <th scope="col">Status</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($materi as $row)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $row->judul_materi  }}</td>
                            <td><a href="https://www.youtube.com/watch?v={{ $row->link }}">https://www.youtube.com/watch?v={{ $row->link }}</a></td>
                            <td>{{ $row->playlist->judul_playlist }}</td>
                            <td>
                                @if ($row->is_active == '1')
                                    Active
                                @else
                                    Draft
                                @endif
                            </td>
                            <td><img src="{{ asset('uploads/' . $row->gambar_materi) }}" width="80" class="img-thumbnail"></td>
                            <td>
                                <a href="{{ route('materi.edit', $row->id) }}" class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil-square d-inline"></i></a>
                                <form action="{{ route('materi.destroy', $row->id) }}" method="post" class="d-inline">
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

