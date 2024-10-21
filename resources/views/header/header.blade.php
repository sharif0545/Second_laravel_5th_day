<a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            @foreach($hero_section as $single_value_hero_section)
          
            <div class="header-content">
       
        <h4 class="header-subtitle" >{{$single_value_hero_section->hello}}</h4>
                <h1 class="header-title"> {{$single_value_hero_section->person_name}}</h1>
                {!!$single_value_hero_section->designation!!}
                <a href="{{$single_value_hero_section->btn_url}}"><button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"> {{$single_value_hero_section->btn_text}}</i></button></a>
            </div>
            @endforeach
            
        </div>
    </header>  