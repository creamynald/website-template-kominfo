<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        @foreach ($slide as $key => $row)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{ asset('uploads/' . $row->gambar_slide) }});">
          <div class="carousel-container">
            <div class="carousel-content">
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->