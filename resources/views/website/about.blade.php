@extends('website.website')

@section('content')
<!-- wrapper  -->	
<div id="wrapper">
    <!-- content -->	
    <div class="content">
                    <!-- column-image  -->
                    <div class="column-image">
                        <div class="bg"  data-bg="{{ asset('web/images/headshot.jpg') }}"></div>
                        <div class="overlay"></div>
                        <div class="column-title">
                            <h2>About Me</h2>
                            <!-- <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</h3> -->
                        </div>
                        <div class="fixed-column-dec"></div>
                    </div>
                    <!-- column-image end  -->
                    <!-- column-wrapper -->
                    <div class="column-wrapper full-height">
                        <section id="sec1">
                            <div class="container small-container">
                                <!-- <div class="section-title fl-wrap">
                                    <h3>My Little Story</h3>
                                    <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                                    <div class="section-number">01.</div>
                                </div> -->
                                <div class="column-wrapper_item fl-wrap">
                                    <div class="column-wrapper_text fl-wrap">
                                        <p class="about-text">Hi. Welcome to The Passenger.</p>
                                        <p class="about-text">My name is Raja Rameez Ali. A self-taught who is trying to improve every day to become a better photographer.</p>
                                        <p class="about-text">I love to see things and interpret them from a more personal perspective. A walk by the streets will always treat you with an eyeful of stories to think, experience, learn and cherish. It's hard to walk away without capturing a few, and every image could always have something to tell you.</p>
                                        <p class="about-text">Born in 1992, India. Street photography has now been a passion for a while, and I am ever amazed by the stories and colors of the streets that this land offers.</p>
                                        <a href="/" class="btn fl-btn">My Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- column-wrapper -->
                </div>
    <!--content end-->	
    <!--share-wrapper-->
    <div class="share-wrapper">
        <div class="share-container fl-wrap  isShare"></div>
    </div>
    <!--share-wrapper end-->
</div>
<!-- wrapper end -->
<!-- cursor-->
<div class="element">
    <div class="element-item"></div>
</div>
<!-- cursor end--> 
@endsection