<section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Experiences</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                        
                           @foreach($experiences as $experiences_single_value)
                           <h6 class="title text-danger">{{$experiences_single_value->experience_date}}</h6>
                            <P>{{$experiences_single_value->experience_title}}</P>
                            <P class="subtitle">{{$experiences_single_value->experience_des}}</P>
                            <hr>
                            
                           @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Education</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach($education as $education_single_data)
                            <h6 class="title text-danger">{{$education_single_data->education_period}}</h6>
                            <P>{{$education_single_data->education_title}}</P>
                            <P class="subtitle">{{$education_single_data->education_description}}</P>
                            <hr>
                            @endforeach()
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Skills</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            @foreach($skills as $skills_single_value)
                            <h6>{{$skills_single_value->skill_title}}</h6>
                            <div class="progress mb-3">
                               {!!$skills_single_value->skill_percent!!}
                                <!-- <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div> -->
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Languages</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            @foreach($languages as $languages_single_value)
                           <h6>{{$languages_single_value->language_title}}</h6>
                            <div class="progress mb-3">
                                {!!$languages_single_value->language_percent!!}
                            </div>
                            @endforeach
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>