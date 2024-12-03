<div>
    <div class="col-md-6">
        <ul class="visible-md visible-lg text-right">
            <li><a href="https://m.me/shahidul.islamjowel.9" class="fa fa-comment"></a> Live Chat</li>
            @if(Session::has('city'))
            <li><a href="{{route('home.change_location')}}"><i class="fa fa-map-marker"></i>  {{Session::get('city')}}, {{Session::get('states')}}</a></li>
            @else
                <li><a href="{{route('home.change_location')}}"><i class="fa fa-map-marker"></i>  Dhaka, Bangladesh</a></li>

            @endif
        </ul>
    </div>
</div>
