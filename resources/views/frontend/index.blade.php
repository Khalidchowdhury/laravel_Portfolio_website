@extends('frontend.layout.app')

    @section('content')
        <div id="page-top">


            @include('frontend.layout.header')


            <header class="masthead" style="background-image: url(<?php echo $mainPages->header_img ?>); ">
                <div class="container">
                    <div class="masthead-subheading">{{ $mainPages->title }}</div>
                    <div class="masthead-heading text-uppercase">{{ $mainPages->subtitle }}</div>
                    <a class="btn btn-primary btn-xl text-uppercase" href="{{ $mainPages->button_url }}">{{ $mainPages->button_name }}</a>
                </div>
            </header>



            <!-- Services Section -->
            <section class="page-section" id="services">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Services</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                    <div class="row text-center">

                        @foreach ($services as $service)
                            <div class="col-md-4">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="<?php echo $service->icon; ?> fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3">{{ $service -> title }}</h4>
                                <p class="text-muted">{{ $service -> description }}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>


            <!-- Portfolio Grid-->
            <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Portfolio</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                    <div class="row">

                        @foreach ( $gallarys as $gallary )
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content">
                                                <i href="{{ route('portfolio.create.page') }}" class="fas fa-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="{{ $gallary->image }}" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">{{ $gallary->title }}</div>
                                        <div class="portfolio-caption-subheading text-muted">{{ $gallary->subtitle }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                        </div>
                    </div>
                </div>
            </section>


            <!-- About Section -->
            <section class="page-section" id="about">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">About</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/frontend/assets/img/about/1.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/frontend/assets/img/about/2.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/frontend/assets/img/about/3.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2015</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/frontend/assets/img/about/4.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2020</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>
                                    Be Part
                                    <br />
                                    Of Our
                                    <br />
                                    Story!
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>



            <!-- Team Section-->
            <section class="page-section bg-light" id="team">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                    <div class="row">
                        
                        @foreach ( $teams as $team )
                            <div class="col-lg-4">
                                <div class="team-member">
                                    <img class="mx-auto rounded-circle" src="{{ $team->hero_image }}"/>
                                    <h4>{{ $team->name }}</h4>
                                    <p class="text-muted">{{ $team->skill }}</p>
                                    <a class="btn btn-dark btn-social mx-2" href="{{ $team->social1_link }}" aria-label="Parveen Anand Twitter Profile"><i class="{{ $team->social1_name }}"></i></a>
                                    <a class="btn btn-dark btn-social mx-2" href="{{ $team->social2_link }}" aria-label="Parveen Anand Facebook Profile"><i class="{{ $team->social2_name }}"></i></a>
                                    <a class="btn btn-dark btn-social mx-2" href="{{ $team->social3_link }}" aria-label="Parveen Anand LinkedIn Profile"><i class="{{ $team->social3_name }}"></i></a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>


            @include('frontend.contact')


           @include('frontend.layout.footer')

        </div>
    @endsection