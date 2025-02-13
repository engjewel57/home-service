<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax">
            <img src="assets/img/slide/2.png">
        </div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{$scategory->name}}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>{{$scategory->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>{{$scategory->name}} <span>Services</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div>
                <div class="container">
                    <div class="portfolioContainer">
                        @if($scategory->services->count() > 0)
                        @foreach($scategory->services as $service)
                            <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                 style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="
                                {{route('home.service_details',['service_slug'=>$service->slug])}}">

                                    <div class="img-hover">
                                        <img src="{{asset('images/services/thumbnails')}}/{{$service->thumbnail}}" alt="{{$service->name}}"
                                             class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{$service->name}}</h3>
                                        <hr class="separator">
                                        <p>{{$service->tagline}}</p>
                                        <div><p>৳&nbsp;<b></b>{{$service->price}}</p></div>
                                        <div class="content-btn">

                                            <div class="star-rating" title="" data-bs-original-title="0"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div>
                                            <a href="{{route('home.servicep')}}"
                                                                    class="btn btn-primary">Book Now</a></div>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                        @else
                       <div class="col-md-12"> <p class="text-center">There is any services</p></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
