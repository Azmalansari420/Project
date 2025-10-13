@php
// dd($EDITDATA->id);
if(!empty($EDITDATA->id))
{
  $getproduct = DB::table('product')->where('cat_id',$EDITDATA->id)->get();
}
else
{
  $getproduct = DB::table('product')->where('status',1)->get();
}
@endphp
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
                  <h1 class="breadcrumb-title">Our Products</h1>
                </div>
                <div class="breadcrumb-wrapper">
                  <ul class="rr-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Our Products</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- breadcrumb area end -->
<style>
  .product-img {
    width: 100%;              /* parent width ke hisaab se adjust */
    height: 200px;            /* apni required fixed height set karo (e.g., 200px) */
    object-fit: cover;        /* image crop hoke container ko fill karegi */
    border-radius: 6px;       /* optional styling */
}

</style>
        <!-- project-3 area start -->
        <section class="project-3-area mt-5 mb-5">
          <div class="container rr-container-1410">
            <div class="row justify-content-center">

              <!-- <div class="col-12 mb-3">
                <div class="section-title-wrapper">
                    <div class="title-wrapper text-center">
                      <h2 class="section-title">Our Core Products.</h2>
                    </div>
                  </div>
              </div> -->
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
        <!-- project-3 area end -->

      </main>
@include('footer');
