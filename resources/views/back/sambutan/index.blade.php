@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Website management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Website management</li>
        <li class="breadcrumb-item">Greetings Text</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Greetings Text</h5>
            {{-- <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah Banner</a> --}}
            
            <!-- Table with stripped rows -->
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                        {{ Session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Body</th>
                        <th scope="col">Body Full</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($sambutan as $row)
                        <tr>
                            <td>{{ $row->judul }}</td>
                            <td>{!!\Illuminate\Support\Str::limit($row->body, 300, '...')!!}</td>
                            <td>{!!\Illuminate\Support\Str::limit($row->body_full, 300, '...')!!}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jabatan }}</td>
                            <td><img src="{{ asset('uploads/' . $row->foto) }}" width="80" class="img-thumbnail"></td>
                            <td>
                                <a href="{{ route('sambutan.edit', $row->id) }}" class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil-square d-inline"></i></a>
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

