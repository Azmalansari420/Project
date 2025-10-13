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

        <!-- project-details area start  -->
        <section class="project-details-area">
          <div class="container rr-container-1410">
            <div class="project-details-inner section-spacing-top">
              <div class="project-details-thumb-wrapper text-center">
                  <img src="{{url('public/media/uploads/project/'.@$EDITDATA->image)}}" alt="image">
              </div>
              <div class="proeject-details-info fade-anim">
                <h3 class="info-title">{{@$EDITDATA->name}}</h3>
                <div class="text-wrapper">
                  {!! @$EDITDATA->content !!}
                </div>
              </div>
              
            </div>
          </div>
        </section>
        

      </main>

 @include('footer');