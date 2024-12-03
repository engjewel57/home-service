<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Service Provider</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Service Provider</li>
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
                        <div class="col-md-12  profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            All Service Provider
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>N_ID</th>
                                        <th>City</th>
                                        <th>Service Category</th>
                                        <th>Service Location</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{asset('images/sprovider/12.jpeg')}}" height="60"></td>
                                        <td>Akash</td>
                                        <td>akash@gmail.com</td>
                                        <td>01738443984</td>
                                        <td>12457864234</td>
                                        <td>Dhaka</td>
                                        <td>AC Service</td>
                                        <td>Dhanmondi 32</td>
                                    </tr>

                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="{{asset('images/sprovider/12.jpeg')}}" height="60"></td>
                                        <td>Jewel</td>
                                        <td>jewel@gmail.com</td>
                                        <td>017384456890</td>
                                        <td>124578645378</td>
                                        <td>Dhaka</td>
                                        <td> Home Clean Service</td>
                                        <td>Mirpur 1</td>
                                    </tr>

                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="{{asset('images/sprovider/12.jpeg')}}" height="60"></td>
                                        <td>Hridoy Khan</td>
                                        <td>ridoy@gmail.com</td>
                                        <td>017384434368</td>
                                        <td>12457864780</td>
                                        <td>Dhaka</td>
                                        <td>Pest Control Service</td>
                                        <td>Moakhali</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

