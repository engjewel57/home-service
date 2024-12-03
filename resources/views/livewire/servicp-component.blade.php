<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax">
            <img src="assets/img/slide/2.png">
        </div>
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
                                        </div>

                                        <div class="col-md-8">

                                            <h3>Name:Akash</h3>
                                            <p>{{$sprovider->about ?? 'None'}}</p>
                                            <p>Email:</b>akash@gmail.com</p>
                                            <p>Phone:</b>{{Auth::user()->phone ?? '0174356437'}} </p>
                                            <p>N_ID:</b>{{Auth::user()->n_id ?? '12350366578'}} </p>
                                            <p><b>City : {{$sprovider->city ?? 'Dhaka'}}</b> </p>
                                            <p><b>Service Category : </b>
                                                @if($sprovider->service_category_id ?? 'None')
                                                    {{$sprovider->category->name ?? 'AC Service'}}</b> </p>
                                            @endif
                                            <p><b>Service Location : {{$sprovider->service_location ?? 'Dhanmondi 32'}}</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('images/sprovider/12.jpeg')}}">

                                        </div>

                                        <div class="col-md-8">

                                            <h3>Name:Jewel</h3>
                                            <p>{{$sprovider->about ?? 'None'}}</p>
                                            <p>Email:</b>jewel@gmail.com</p>
                                            <p>Phone:</b>{{Auth::user()->phone ?? '0174356454'}}</p>
                                            <p>N_ID:</b>{{Auth::user()->n_id ?? '12321345324'}} </p>
                                            <p><b>City : {{$sprovider->city ?? 'Dhaka'}}</b> </p>
                                            <p><b>Service Category : </b>
                                                @if($sprovider->service_category_id ?? 'None')
                                                    {{$sprovider->category->name ?? 'Home Clean Service'}}</b> </p>
                                            @endif
                                            <p><b>Service Location : {{$sprovider->service_location ?? 'Mirpur 1'}}</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('images/sprovider/12.jpeg')}}">

                                        </div>

                                        <div class="col-md-8">

                                            <h3>Name: Hridoy Khan</h3>
                                            <p>{{$sprovider->about ?? 'None'}}</p>
                                            <p>Email:</b>ridoy@gmail.com</p>
                                            <p>Phone:</b>{{Auth::user()->phone ?? '0174356445'}}</p>
                                            <p>N_ID:</b>{{Auth::user()->n_id ?? '123213446524'}} </p>
                                            <p><b>City : {{$sprovider->city ?? 'Dhaka'}}</b> </p>
                                            <p><b>Service Category : </b>
                                                @if($sprovider->service_category_id ?? 'None')
                                                    {{$sprovider->category->name ?? 'Pest Control Service'}}</b> </p>
                                            @endif
                                            <p><b>Service Location : {{$sprovider->service_location ?? 'Moakhali'}}</b></p>
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



