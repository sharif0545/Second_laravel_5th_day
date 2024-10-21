<div class="container-fluid">
 
        <div id="about" class="row about-section">
            @foreach($who_am_is as $who_single_data)
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">{{$who_single_data->who}}</h3>
                    <span class="line mb-5"></span>
                    <h5 class="mb-3">{{$who_single_data->designation}}</h5>
                    <p class="mt-20">{{$who_single_data->my_des}}</p>
                
                    <a href='{{$who_single_data->cv_btn_link}}'><button class="btn btn-outline-danger"><i class="icon-down-circled2 ">{{$who_single_data->cv_btn_txt}}</i></button></a>
                </div>  
            @endforeach
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                @foreach($personal_infos as $personal_data)
                <ul class="mt40 info list-unstyled">
                    <li><span>Birthdate</span> : {{$personal_data->birthday}}</li>
                    <li><span>Email</span> : {{$personal_data->email}}</li>
                    <li><span>Phone</span> : {{$personal_data->phone}}</li>
                    <li><span>Skype</span> : {{$personal_data->skypee}}</li>
                    <li><span>Address</span> :  {{$personal_data->address}}</li>
                </ul>
                @endforeach
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>  
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                @foreach($experties as $experties_data)
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="{{$experties_data->experties_icon_class}}"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>{{$experties_data->experties_title}}</h6>
                        <p class="subtitle"> {{$experties_data->experties_description}}</p>
                        <hr>
                    </div>
                </div>
                @endforeach
               

            </div>
        </div>
    </div>