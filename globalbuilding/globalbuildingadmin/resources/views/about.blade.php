@include('header');
@php
$about = DB::table('content')->where('id','1')->first();
@endphp

      <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb-area">
          <div class="breadcrumb-area-inner">
            <div class="breadcrumb-bg">
              <img src="{{url('')}}/assets/imgs/gallery/gallery-29.webp" alt="image">
            </div>
            <div class="container rr-container-1410">
              <div class="breadcrumb-content">
                <div class="title-wrapper">
                  <h1 class="breadcrumb-title">About Our Company</h1>
                </div>
                <div class="breadcrumb-wrapper">
                  <ul class="rr-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>About Us</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- feature-3 area start  -->
        <section class="feature-3-area">
          <div class="container rr-container-1410">
            <div class="feature-3-area-inner section-spacing">
              <div class="feature-3-thumb-wrapper fade-anim" data-direction="left">
                <div class="text-center">
                  <img src="{{url('public/media/uploads/content/'.@$about->logo)}}" alt="image" style="border-radius: 50%;">
                </div>
              {{--   <div class="feature-3-thumb-2" data-speed="0.9">
                  <img src="{{url('')}}/assets/imgs/gallery/gallery-28.webp" alt="image">
                </div> --}}
              </div>
              <div class="feature-3-content fade-anim" data-direction="right">
                {!! @$about->content !!}               
              </div>
            </div>
          </div>
        </section>
        <!-- feature-3 area end  -->

     

     

      </main>

@include('footer');