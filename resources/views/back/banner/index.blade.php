@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Website management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Website management</li>
        <li class="breadcrumb-item">Banners</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Banners</h5>
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
                <table class="table datatable">
                  <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Banner</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                        <th scope="col">gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($banner as $row)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $row->judul }}</td>
                            <td>{{ $row->link }}</td>
                            <td>
                                @if ($row->status == '1')
                                    Active
                                @else
                                    Draft
                                @endif
                            </td>
                            <td><img src="{{ asset('uploads/' . $row->gambar_banner) }}" width="80" class="img-thumbnail"></td>
                            <td>
                                <a href="{{ route('banner.edit', $row->id) }}" class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil-square d-inline"></i></a>
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

