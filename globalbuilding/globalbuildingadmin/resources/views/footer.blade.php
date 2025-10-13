     <!-- footer-2 area start  -->
      <footer class="footer-area">
        <div class="footer-widget-wrapper-box">
          <div class="container rr-container-1410">
            <div class="footer-widget-wrapper">
              <div class="footer-widget-box">
                <div class="footer-logo">
                  <a href="index.html"><img src="{{url('public/media/uploads/site_setting/'.$sitesetting->logo)}}" alt="image"></a>
                </div>
                <div class="footer-text">
                  <p class="text">At Globle Building Products, my focus is simple: delivering Price, Quality, and Service you can trust.  </p>
                </div>
                <div class="footer-social">
                  <a href="{{$sitesetting->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="{{$sitesetting->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                  <a href="{{$sitesetting->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                  <a href="{{$sitesetting->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                </div>
              </div>
              
              <div class="footer-widget-box">
                <h2 class="footer-widget-title">Quick Links</h2>
                <ul class="footer-nav-list">
                  <li><a href="{{url('')}}"><i class="fa-solid fa-chevron-right"></i>Home</a></li>
                  <li><a href="{{url('about')}}"><i class="fa-solid fa-chevron-right"></i>About Us</a></li>
                  <li><a href="{{url('product')}}"><i class="fa-solid fa-chevron-right"></i>Product</a></li>
                  <li><a href="{{url('project')}}"><i class="fa-solid fa-chevron-right"></i>Projects</a></li>
                  <li><a href="{{url('contact')}}"><i class="fa-solid fa-chevron-right"></i>Contact Us</a></li>
                </ul>
              </div>

              <div class="footer-widget-box">
                <h2 class="footer-widget-title">Our Category</h2>
                <ul class="footer-nav-list">
                  @php
                  $cate = DB::table('categories')->where('status',1)->get();
                  @endphp
                  @foreach($cate as $data)
                  <li><a href="{{@$data->slug}}"><i class="fa-solid fa-chevron-right"></i> {{@$data->name}}</a></li>
                  @endforeach

                </ul>
              </div>

             

              <div class="footer-widget-box">
                <h2 class="footer-widget-title">Contact Us</h2>
                <ul class="footer-meta-list">
                  <li><span class="icon"><i class="fa-solid fa-location-dot"></i></span><span class="text"> {{$sitesetting->address}}</span></li>
                  <li><span class="icon"><i class="fa-solid fa-phone"></i></span><span class="text"> Call Us : <a
                        href="tel:{{$sitesetting->mobile}}">{{$sitesetting->mobile}} , {{@$sitesetting->alt_mobile}}</a></span>
                  </li>
                  <li><span class="icon"><i class="fa-solid fa-envelope"></i></span><span class="text"> Mail: <a
                        href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}} , {{$sitesetting->alt_email}}</a></span>
                  </li>
                  {{-- <li><span class="icon"><i class="fa-solid fa-clock"></i></span><span class="text"> Office : 8:00 AM -
                      7:00 PM</span></li> --}}
                </ul>
              </div>

            </div>
          </div>
        </div>
      <!--   <div class="footer-newsletter-box">
          <div class="container rr-container-1410">
            <div class="footer-newsletter-wrapper">
              <div class="footer-newsletter-content">
                <div class="icon">
                  <img src="{{url('')}}/assets/imgs/icon/icon-26.webp" alt="image">
                </div>
                <div class="content">
                  <h3 class="title">Sign Up To Our Newsletters.</h3>
                  <p class="text">Subscribe to our Newsletter & Event Right Now to be Updated</p>
                </div>
              </div>
              <div class="footer-newsletter-form">
                <form action="#" class="footer-subscribe-form">
                  <div class="input-field">
                    <input type="email" placeholder="Enter Your Email">
                    <button type="submit" class="rr-btn">
                      <span class="btn-wrap">
                        <span class="text-one">Subscribe Now</span>
                        <span class="text-two">Subscribe Now</span>
                      </span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> -->
        <div class="copyright-area">
          <div class="container rr-container-1410">
            <div class="copyright-area-inner">
              <div class="copyright-text">
                <p class="text">Copyright @ 2025 <a href="#">Globle Building Products</a>. All Rights Received.</p>
              </div>
              <!-- <div class="copyright-link">
                <a href="contact.html">Privacy policy</a>
                <a href="contact.html">Terms of use</a>
                <a href="contact.html">Site map</a>
              </div> -->
            </div>
          </div>
        </div>
      </footer>
      <!-- footer-2 area end  -->

    </div>
  </div>



  <!-- Dependencies JS Files -->
  <script src="{{url('')}}/assets/js/jquery-3.6.0.min.js"></script>
  <script src="{{url('')}}/assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('')}}/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="{{url('')}}/assets/js/swiper-bundle.min.js"></script>
  <script src="{{url('')}}/assets/js/odometer.min.js"></script>
  <script src="{{url('')}}/assets/js/waypoints.min.js"></script>
  <script src="{{url('')}}/assets/js/progressbar.js"></script>
  <script src="{{url('')}}/assets/js/gsap.min.js"></script>
  <script src="{{url('')}}/assets/js/ScrollSmoother.min.js"></script>
  <script src="{{url('')}}/assets/js/ScrollTrigger.min.js"></script>
  <script src="{{url('')}}/assets/js/SplitText.min.js"></script>
  <script src="{{url('')}}/assets/js/TextPlugin.js"></script>
  <script src="{{url('')}}/assets/js/customEase.js"></script>
  <script src="{{url('')}}/assets/js/jquery.meanmenu.min.js"></script>
  <script src="{{url('')}}/assets/js/backToTop.js"></script>
  <script src="{{url('')}}/assets/js/jquery.nice-select.min.js"></script>
  <script src="{{url('')}}/assets/js/wow.min.js"></script>
  <!-- Template Main JS File -->
  <script src="{{url('')}}/assets/js/main.js"></script>
</body>
</html>