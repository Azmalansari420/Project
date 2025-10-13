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
                  <h1 class="breadcrumb-title">Contact Us</h1>
                </div>
                <div class="breadcrumb-wrapper">
                  <ul class="rr-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Contact Us</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact area start  -->
        <div class="contact-area">
          <div class="container rr-container-1410">
            <div class="contact-area-inner section-spacing">
              <div class="contact-wrapper">
                <div class="contact-box fade-anim">
                  <div class="contact-text">
                    <div class="link">Our Address:</div>
                    <p class="text">{{$sitesetting->address}}</p>
                  </div>
                </div>
                <div class="contact-box fade-anim">
                  <div class="contact-text">
                    <div class="link"><a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}} ,{{$sitesetting->alt_email}}</a></div>
                    <p class="text">Email us anytime for any kind of query.</p>
                  </div>
                </div>
                <div class="contact-box fade-anim">
                  <div class="contact-text">
                    <div class="link">Hotline: <a href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}} , {{$sitesetting->alt_mobile}}</a></div>
                    <p class="text">Call us anytime when it’s urgent</p>
                  </div>
                </div>
              </div>
              <div class="contact-form-wrapper-box fade-anim">
                <div class="contact-form-wrapper">
                  <div class="contact-form-content">
                    <div class="section-title-wrapper">
                      <div class="subtitle-wrapper">
                        <span class="section-subtitle"><span class="start-shape"></span><span class="text">Get in
                            touch</span><span class="end-shape"></span></span>
                      </div>
                      <div class="title-wrapper">
                        <h2 class="section-title">Hi, how you doing today? <br>
                          Let's talk now.</h2>
                      </div>
                    </div>
                    <div class="main-contact-wrap">
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
                  <div class="contact-map">
                    {!! @$sitesetting->map !!}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- contact area end  -->


      </main>

@include('footer');
