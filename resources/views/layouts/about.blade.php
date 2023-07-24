<section class="section" id="about">
    <div class="container">
        <div class="row">
            @foreach($data3 as $item)
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>{{$item->title}}</h6>
                        <h2>{{$item->name}}</h2>
                    </div>
                    <p>{{$item->description}}</p>
                    <div class="row">
                        <div class="col-4">
                            <img src="aboutfoodimg/{{$item->image}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <img src="aboutfoodimg/{{$item->image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>