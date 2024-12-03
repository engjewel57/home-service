<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="assets/img/slide/1.png" alt="fullslide1" data-bgposition="center center"
                         data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                         data-bgfitend="100" data-bgpositionend="right center">
                </li>
                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="assets/img/slide/2.png" alt="fullslide1" data-bgposition="top center"
                         data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                         data-bgfitend="100" data-bgpositionend="right center">
                </li>
                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="assets/img/slide/3.png" alt="fullslide1" data-bgposition="top center"
                         data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                         data-bgfitend="100" data-bgpositionend="right center">
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h2 style="color:blue;  ">Smart Home Services</h2>
                <p class="lead">Smart Home Services at very affordable price, </p>
            </div>
            <div class="filter-header">
                <form id="sform" action="{{route('searchService')}}" method="post">
                    @csrf
                    <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                           class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
    </section>
    <section class="content-central">
        <div class="content_info content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach($scategories as $scategory)

                            <li data-toggle="tooltip" title="" data-original-title="{{$scategory->name}}">
                                <a href="{{route('home.services_by_category',['category_slug'=>$scategory->slug])}}">
                                    <img src="{{asset('images/categories')}}/{{$scategory->image}}" alt="{{$scategory->name}}"></a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="semiboxshadow text-center">
            <img src="assets/img/img-theme/shp.png" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2>Smart <span>Choice</span> of Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                    <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach($fservices as $service)
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                             style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="{{route('home.service_details',['$service_slug'=>$service->slug])}}">
                                <div class="img-hover">
                                    <img src="{{asset('images/services/thumbnails')}}/{{$service->thumbnail}}" alt="{{$service->name}}"
                                         class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>{{$service->name}}</h3>
                                    <hr class="separator">
                                    <p>{{$service->tagline}}</p>
                                    <div class="content-btn"><a href="{{route('home.service_details',['$service_slug'=>$service->slug])}}"
                                                                class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>&#36;</span><b>From</b>${{$service->price}}</div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                             style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-installation.html">
                                <div class="img-hover">
                                    <img src="{{asset('images/services/thumbnails/service_3.jpg')}}" alt="AC Installation"
                                         class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Installation</h3>
                                    <hr class="separator">
                                    <p>AC Installation</p>
                                    <div class="content-btn">
                                        <p>৳&nbsp; <b></b>200</p>
                                        <a href="{{route('home.servicep')}}"
                                                                class="btn btn-primary">Book Now</a></div>

                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                             style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-gas-top-up.html">
                                <div class="img-hover">
                                    <img src="{{asset('images/services/thumbnails/service_4.jpg')}}" alt="AC Gas Top Up"
                                         class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Gas Top Up</h3>
                                    <hr class="separator">
                                    <p>AC Gas Top Up</p>
                                    <div class="content-btn">
                                        <p>৳&nbsp; <b></b>300</p>
                                        <a href="{{route('home.servicep')}}"
                                                                class="btn btn-primary">Book Now</a></div>

                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                             style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-gas-refill.html">
                                <div class="img-hover">
                                    <img src="{{asset('images/services/thumbnails/service_5.jpg')}}" alt="AC Gas Refill"
                                         class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Gas Refill</h3>
                                    <hr class="separator">
                                    <p>AC Gas Refill</p>
                                    <div class="content-btn">
                                        <p>৳&nbsp; <b></b>200</p>
                                        <a href="{{route('home.servicep')}}"
                                                                class="btn btn-primary">Book Now</a></div>

                                </div>
                            </a>
                        </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                 style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-gas-refill.html">
                                    <div class="img-hover">
                                        <img src="{{asset('images/services/thumbnails/service_13.jpg')}}" alt="AC Gas Refill"
                                             class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>Home Clen</h3>
                                        <hr class="separator">
                                        <p>Home Clen</p>
                                        <div class="content-btn">
                                            <p>৳&nbsp; <b></b>250</p>
                                            <a href="{{route('home.servicep')}}"
                                                                    class="btn btn-primary">Book Now</a></div>

                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2>WELCOME TO DIVERSIFIED</h2>
                                <p class="lead">
                                    Book best services at one place.
                                    <span class="line"></span>
                                </p>

                                <p>Find a wide variety of home services.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">


                                @foreach($fscategories as $fscategory)
                                    <li>
                                        <a href="{{route('home.services_by_category',['category_slug'=>$fscategory->slug])}}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                                   src="{{asset('images/categories')}}/{{$fscategory->image}}" height="100px" ></i>
                                                <h5>{{$fscategory->name}}</h5>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2><span>Appliance</span>Services</h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">
                @foreach($aservices as $aservice)
                <div>
                    <a class="g-list" href="{{route('home.service_details',['service_slug'=>$aservice->slug])}}">
                        <div class="img-hover">
                            <img src="{{asset('images/services/thumbnails')}}/{{$aservice->thumbnail}}" alt="{{$aservice->name}}" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>{{$aservice->name}}</h3>
                            <hr class="separator">
                            <p>{{$aservice->tagline}}</p>
                            <div ><p>৳&nbsp;<b></b>{{$aservice->price}}</p>
                            <div class="content-btn">

                                </div>
                                <a href="{{route('home.servicep')}}"
                                                        class="btn btn-primary">Book Now</a>

                            </div>

                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script type="text/javascript">
        var path ="{{route('autocomplete')}}";
        $('input.typeahead').typeahead({
            source:function (query,process){
                return $.get(path,{query:query},function(data){
                    return process(data);
                });
            }
        });


    </script>
@endpush

