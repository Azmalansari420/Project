@include('header');


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
                  <h1 class="breadcrumb-title">{{@$EDITDATA->name}}</h1>
                </div>
                <div class="breadcrumb-wrapper">
                  <ul class="rr-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>{{@$EDITDATA->name}}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- service-details area start  -->
        <section class="service-details-area">
          <div class="container rr-container-1410">
            <div class="service-details-area-inner section-spacing">
              <div class="service-details-content fade-anim" data-direction="left">
                
                <div class="text-wrapper">
                  {!! @$EDITDATA->content !!}
                </div>
                <div class="btn-wrapper">
                  <a href="#contnt-form" class="rr-btn">
                    <span class="btn-wrap">
                      <span class="text-one">Talk to an Expert <i class="fa-solid fa-arrow-right"></i></span>
                      <span class="text-two">Talk to an Expert <i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="service-details-thumb-wrappper fade-anim" data-direction="right">
                <div class="service-details-thumb">
                  <img src="{{url('public/media/uploads/product/'.$EDITDATA->image)}}" alt="image">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- service-details area end  -->

     

        <!-- process-3 area start  -->
        <section class="process-3-area" id="contnt-form">
          <div class="container rr-container-1410">
            <div class="comment-form-wrapper-box">
              <div class="comment-form-wrapper">
                <h3 class="comment-form-title">Enquiry Now</h3>
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
                        <input type="text" name="subject" id="Phone" placeholder="Your Subject" value="{{@$EDITDATA->name}}">
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
                
          </div>
        </section>
        <!-- process-3 area end  -->

      </main>


@include('footer');