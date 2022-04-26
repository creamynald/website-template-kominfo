@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Website management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Website management</li>
        <li class="breadcrumb-item">Slide</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Slider</h5>
            <a href="{{ route('slide.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah Slider</a>
            
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
                        <th scope="col">ID</th>
                        <th scope="col">Judul Slide</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                        <th scope="col">gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($slide as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->judul_slide }}</td>
                            <td>{{ $row->link }}</td>
                            <td>
                                @if ($row->status == '1')
                                    Active
                                @else
                                    Draft
                                @endif
                            </td>
                            <td><img src="{{ asset('uploads/' . $row->gambar_slide) }}" width="80" class="img-thumbnail"></td>
                            <td>
                                <form action="{{ route('slide.destroy', $row->id) }}" method="post" class="d-inline">
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

