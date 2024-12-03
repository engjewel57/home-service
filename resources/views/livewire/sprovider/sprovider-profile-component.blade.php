<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Profile</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2  profile1">
                            <div class="panel panel-default">
                                <div class="row">
                                    <div class="col-md-6">
                                        Profile
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="panel-body">
                                   <div class="row">
                                       <div class="col-md-4">
                                           <img src="{{asset('images/sprovider/12.jpeg')}}">
{{--                                           @if($sprovider->image)--}}
{{--                                               <img src="{{asset('images/sprovider')}}/{{$sprovider->image}}" width="100%">--}}
{{--                                           @else--}}
{{--                                               <img src="{{asset('images/sprovider/defult.jpg')}}" width="100%">--}}
{{--                                           @endif--}}
                                       </div>

                                <div class="col-md-8">
                                    <a href="{{route('sprovider.edit_profile')}}" class="btn btn-info pull-right">Edit Profile</a>
                                    <h3>Name:{{Auth::user()->name}}</h3>
                                    <p>{{$sprovider->about ?? 'None'}}</p>
                                    <p>Email:</b>{{Auth::user()->email}}</p>
                                    <p>Phone:</b>{{Auth::user()->phone}}</p>
                                    <p>N_ID:</b>{{Auth::user()->n_id}} 12321345345</p>
                                    <p><b>City : {{$sprovider->city ?? 'None'}}</b> Dhaka</p>
                                    <p><b>Service Category : </b>
                                        @if($sprovider->service_category_id ?? 'None')
                                            {{$sprovider->category->name ?? 'None'}}</b> AC Service</p>
                                    @endif
                                    <p><b>Service Location : {{$sprovider->service_location ?? 'None'}}</b>Dhanmondi 32</p>
                                </div>
                                   </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('images/sprovider/12.jpeg')}}">
                                            {{--                                           @if($sprovider->image)--}}
                                            {{--                                               <img src="{{asset('images/sprovider')}}/{{$sprovider->image}}" width="100%">--}}
                                            {{--                                           @else--}}
                                            {{--                                               <img src="{{asset('images/sprovider/defult.jpg')}}" width="100%">--}}
                                            {{--                                           @endif--}}
                                        </div>

                                        <div class="col-md-8">
                                            <a href="{{route('sprovider.edit_profile')}}" class="btn btn-info pull-right">Edit Profile</a>
                                            <h3>Name:{{Auth::user()->name}}</h3>
                                            <p>{{$sprovider->about ?? 'None'}}</p>
                                            <p>Email:</b>{{Auth::user()->email}}</p>
                                            <p>Phone:</b>{{Auth::user()->phone}}</p>
                                            <p>N_ID:</b>{{Auth::user()->n_id}} 12321345324</p>
                                            <p><b>City : {{$sprovider->city ?? 'None'}}</b> Dhaka</p>
                                            <p><b>Service Category : </b>
                                                @if($sprovider->service_category_id ?? 'None')
                                                    {{$sprovider->category->name ?? 'None'}}</b> Clean Service</p>
                                            @endif
                                            <p><b>Service Location : {{$sprovider->service_location ?? 'None'}}</b>Mirpur 1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


