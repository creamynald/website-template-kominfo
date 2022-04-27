@extends('front.layouts.frontend')

@section('content')

  @include('front.includes.slide')
<!-- ======= sambutan kadis Section ======= -->
<section id="team" class="team">
  <div class="container">
    <div class="row">

      <div class="col-lg-8">
        <div class="sambutan">
          <div class="member align-items-start">
            <h3><b>Sambutan Kepala Dinas</b></h3>
            <p>Pertama dan utama sekali, mari kita panjatkan puji syukur ke hadirat Allah SWT., Tuhan Yang Maha Kuasa, karena berkat cucuran rahmat dan nikmat-Nya, Dinas Komunikasi, Informatika dan Statistik, sebagai salah satu Perangkat Daerah di Pemerintah Kabupaten (Pemkab) Bengkalis, masih bisa dan terus berupaya untuk eksis dalam mendukung terwujudnya visi Kabupaten Bengkalis, yakni; <br><br> “Terwujudnya Kabupaten Bengkalis yang Bermarwah, Maju dan Sejahtera”, khususnya melalui transparansi dan keterbukaan informasi publik“</p>
            <div class="d-flex align-items-start mt-3">
              <div class="minipic"><img src="{{ asset('img/kepaladinas.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Hendrik Dwi Yatmoko, S.Sos, MT</h4>
                <span>Kepala Dinas</span>
              </div>
            </div>
          </div>
        </div>

        {{-- berita --}}
        @foreach ($artikel as $row)
        <div class="artikel mt-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="portfolio-wrap">
                  <a href="{{ route('detail-artikel', $row->slug) }}"><img src="{{ asset('uploads/' . $row->gambar_artikel) }}" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="col-lg-6">
                <span><i class="fa-regular fa-clock text-danger"></i> {{ $row->created_at }}</span>
                <h4><a href="{{ route('detail-artikel', $row->slug) }}"><b>{{ $row->judul }}</b></a></h4>
                <p>{!!\Illuminate\Support\Str::limit($row->body, 200, '...')!!}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{-- end berita --}}
      </div>
      {{-- end left --}}

      {{-- right --}}
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="member-info">
            <h3><i class="fa-thin fa-hashtag"></i> Topik Populer</h3>
            <div class="social">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="member d-flex align-items-start mt-2">
          <div class="member-info">
            <h3><i class="fa-thin fa-hashtag"></i> Profil Pegawai</h3>
            <img src="{{ asset('uploads/'.$bannerS->gambar_banner) }}" alt="" style="width: 100%">
          </div>
        </div>
        
        <div class="member d-flex align-items-start mt-2">
          <div class="member-info">
            <h3><i class="fa-thin fa-hashtag"></i> Info Bengkalis</h3>
            <div class="social">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
                <li class="list-group-item"><i class="fa-thin fa-hashtag text-warning"></i> Lorem ipsum dolor sit amet. Lorem</li>
              </ul>
            </div>
          </div>
        </div>
      </div>         

    {{-- end row --}}
    </div>

</section><!-- End Team Section -->
@endsection
