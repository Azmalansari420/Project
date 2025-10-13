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
                  <h1 class="breadcrumb-title">Our Recent Projects</h1>
                </div>
                <div class="breadcrumb-wrapper">
                  <ul class="rr-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Our Project</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- project-3 area start -->
        <section class="project-3-area">
          <div class="container rr-container-1410">
            <div class="project-3-area-inner section-spacing">
              <div class="project-3-wrapper-box">
                <div class="project-3-wrapper">

                  @php
                  $getproduct = DB::table('project')->where('status',1)->get();
                  @endphp
                   @foreach($getproduct as $data)
                  <div class="project-3-box fade-anim">
                    <div class="thumb">
                      <a href="{{url($data->slug)}}"><img src="{{url('public/media/uploads/project/'.$data->image)}}" alt="image"></a>
                    </div>
                    <div class="content-wrapper">
                      <div class="content">
                        <h3 class="title"><a href="{{url($data->slug)}}">{{@$data->name}}</a></h3>
                        <div class="btn-wrapper">
                          <a href="{{url($data->slug)}}" class="rr-btn">
                            <span class="btn-wrap">
                              <span class="text-one">View Project <i class="fa-solid fa-arrow-right"></i></span>
                              <span class="text-two">View Project <i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach


                </div>
              </div>
              
            </div>
          </div>
        </section>
        <!-- project-3 area end -->

      </main>

@include('footer');