<!-- Video section -->
@foreach($value2 as $item2)
    <section id="video" class="parallax-section" style="background: url('{{'../storage/videosection/'.$item2->photo}}') 20% 0 repeat-y fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <a class="popup-youtube" href="{{$item2->videolink}}"><i class="fa fa-play"></i></a> <!-- eita video er logo fa fa-play-->
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video</h2>
                </div>

            </div>
        </div>
    </section>
@endforeach
