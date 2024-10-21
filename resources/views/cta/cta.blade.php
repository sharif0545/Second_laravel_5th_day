<section class="section bg-dark py-5">
        <div class="container text-center">
            @foreach($ctas as $cta_data)
            <h2 class="text-light mb-5 font-weight-normal">{{$cta_data->cta_text}}</h2>
            <a href="{{$cta_data->btn_link}}"><button class="btn bg-primary w-lg" >{{$cta_data->btn_text}}</button></a>
            @endforeach
           
        </div>
    </section>