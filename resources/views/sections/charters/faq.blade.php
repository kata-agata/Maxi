<div class="container-fluid">
    <div class="row justify-content-center">
        <div id="accordion-charters-faq" class=" col-10 col-md-8 col-lg-6 accordion">
            @foreach($faqs as  $faq)
            <div class="card faq">
                <a class="col-12 card-header faq-question text-center text-black" id="heading{{$faq->no}}" data-toggle="collapse" data-target="#collapse{{$faq->no}}" aria-expanded="true" aria-controls="collapse{{$faq->no}}">
                    <div class="col-1"><i class="fas fa-lightbulb"></i></div><div class="col-10">{{$faq->question}}</div>
                </a>

                <div id="collapse{{$faq->no}}" class="collapse hide faq-answer" aria-labelledby="heading{{$faq->no}}" data-parent="#accordion-charters-faq">
                    <div class="card-body">
                        <div class="col-1">
                            <i class="fas fa-hand-point-right"></i>
                        </div>
                        <div class="col-11">
                            {{$faq->answer}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>