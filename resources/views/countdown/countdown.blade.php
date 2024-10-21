<section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
            @foreach($countdowns as $countdowns_single_value)
                <div class="col-md-6 col-lg-3">
                  
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto">{!!$countdowns_single_value->count_icon_class!!}</div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">{{$countdowns_single_value->count_number}}</h1>
                            <p class="text-light mb-1">{{$countdowns_single_value->count_title}}</p>
                        </div>
                    </div>
                 
                </div>
                @endforeach

            </div>
        </div>
    </section>