@extends('front.layouts.frontend')

@section('content')
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
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="/img/team/team-2.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->
@endsection
