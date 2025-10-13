@include('header');

      <main>

        <!-- hero area start  -->
        <section class="hero-2-area">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-indicators">
             @php
            $slider = DB::table('slider')->where('status',1)->get();
            @endphp
            @foreach($slider as $key => $data)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="{{ $key==0 ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$key}}"></button>
            @endforeach
          </div>
          <div class="carousel-inner">
            @php
            $slider = DB::table('slider')->where('status',1)->get();
            @endphp
            @foreach($slider as $key => $data)
            <div class="carousel-item {{ $key==0 ? 'active' : ''}}">
              <a href="{{$data->url}}">
                <img src="{{url('public/media/uploads/slider/'.$data->image)}}" class="d-block w-100" alt="">
              </a>
            </div>
            @endforeach
                  </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>    
        </section>
        <!-- hero area end  -->

                <!-- breadcrumb area end -->
<style>
  .product-img {
    width: 100%;              /* parent width ke hisaab se adjust */
    height: 200px;            /* apni required fixed height set karo (e.g., 200px) */
    object-fit: cover;        /* image crop hoke container ko fill karegi */
    border-radius: 6px;       /* optional styling */
}

</style>

        <section class="feature-1-area pt-5 pb-5">
          <div class="container rr-container-1410">
            <div class="row justify-content-center">

              <div class="col-12 mb-3">
                <div class="section-title-wrapper">
                    <div class="title-wrapper text-center">
                      <h2 class="section-title">Our Core Products.</h2>
                    </div>
                  </div>
              </div>
              @php
                $getproduct = DB::table('product')->where('status',1)->get();
              @endphp
               @foreach($getproduct as $data)
              <div class="col-3">
                <div class="team-box rr-bg-white fade-anim">
                    <div class="thumb">
                      <a href="{{ url($data->slug) }}">
                        <img class="product-img" src="{{ asset('public/media/uploads/product/'.$data->image) }}" alt="image">
                      </a>
                    </div>
                    <div class="content">
                      <h5 class="namde">
                        <a href="{{ url($data->slug) }}">{{ @$data->name }}</a>
                      </h5>
                    </div>
                  </div>
              </div>
              @endforeach

             



            </div>
          </div>
        </section>

        <div class="about-process-group pb-4">
          <div class="about-process-group-bg">
            <div class="area-shape-1" data-speed="0.7">
              <img src="{{url('')}}/assets/imgs/shape/shape-12.webp" alt="image">
            </div>
            <div class="area-shape-2" data-speed="0.8">
              <img src="{{url('')}}/assets/imgs/shape/shape-13.webp" alt="image">
            </div>
            <img src="{{url('')}}/assets/imgs/shape/shape-11.webp" alt="image">
          </div>
          <!-- about-2 area start  -->
          <section class="about-2-area">
            <div class="container rr-container-1410">
              <div class="about-2-area-inner section-spacing-top">

                <div class="about-2-thumb-wrapper fade-anim" data-direction="left">
                  <div class="appointment-3-contact-wrap fade-anim" data-spgfdgfeed="0.9">
                    <h3 class="contact-title">Book Appointment Now</h3>
                    <div class="comment-form-box">
                  <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="comment-formwrap">
                      <div class="comment-formfield">
                        <input type="text" name="name" id="Name" placeholder="Your Name">
                        <i class="fa-regular fa-user"></i>
                      </div>
                      <div class="comment-formfield">
                        <input type="text" name="email" id="Email" placeholder="Email Address">
                        <i class="fa-regular fa-envelope"></i>
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="mobile" id="Phone" placeholder="Your Phone">
                        <i class="fa-regular fa-phone"></i>
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="subject" id="Phone" placeholder="Your Subject" value="">
                        <i class="fa-regular fa-pen"></i>
                      </div>
                      <div class="comment-formfield span-2">
                        <textarea name="message" id="message"
                          placeholder="Tell us about your project..."></textarea>
                        <i class="fa-regular fa-pen"></i>
                      </div>
                    </div>
                    <div class="submit-btn">
                      <button type="submit" class="rr-btn" name="submit">
                        <span class="btn-wrap">
                          <span class="text-one">Send Enquiry</span>
                          <span class="text-two">Send Enquiry</span>
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
                  </div>
                </div>

                <div class="about-2-content fade-anim" data-direction="right">
                  <div class="section-title-wrapper">
                    <div class="subtitle-wrapper">
                      <span class="section-subtitle"><span class="start-shape"></span><span class="text">About Our
                          Company</span><span class="end-shape"></span></span>
                    </div>
                    <div class="title-wrapper">
                      <h2 class="section-title">Welcome to <br>Globle Building Products.</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text">After serving more than 35 years in the interior solutions industry, I have decided to start my own venture under the name Globle Building Products. Over the years, I have had the privilege of working with some of the most challenging and prestigious projects across India, including:</p>
                  </div>
                
                  <div class="btn-wrapper">
                    <a href="{{url('about')}}" class="rr-btn">
                      <span class="btn-wrap">
                        <span class="text-one">Read More</span>
                        <span class="text-two">Read More</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

      
        




      </main>
@include('footer');
