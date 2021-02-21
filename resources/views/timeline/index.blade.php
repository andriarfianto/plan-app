@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('theme/assets/extra-libs/horizontal-timeline/horizontal-timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/dist/css/style.min.css') }}">
@endsection

@section('breadcrumb')
<h4 class="page-title">Timeline</h4>
<div class="d-flex align-items-center">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Timeline</li>
        </ol>
    </nav>
</div>
@endsection

@section('btn-action')
<div class="">
    <a type="button" href="{{ url('timeline/create') }}" class="btn waves-effect waves-light btn-primary">Tambah</a>
    <a type="button" href="{{ url('timeline') }}" class="btn waves-effect waves-light btn-success">Refresh</a>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <section class="cd-horizontal-timeline loaded">
                    <div class="timeline">
                        <div class="events-wrapper">
                            <div class="events" style="width: 1800px; transform: translateX(-660px);">
                                <ol>
                                    <li><a href="#0" data-date="16/01/2014" class="older-event" style="left: 120px;">16 Jan</a></li>
                                    <li><a href="#0" data-date="28/02/2014" style="left: 300px;" class="older-event">28 Feb</a></li>
                                    <li><a href="#0" data-date="20/04/2014" style="left: 480px;" class="older-event">20 Mar</a></li>
                                    <li><a href="#0" data-date="20/05/2014" style="left: 600px;" class="selected">20 May</a></li>
                                    <li><a href="#0" data-date="09/07/2014" style="left: 780px;">09 Jul</a></li>
                                    <li><a href="#0" data-date="30/08/2014" style="left: 960px;">30 Aug</a></li>
                                    <li><a href="#0" data-date="15/09/2014" style="left: 1020px;">15 Sep</a></li>
                                    <li><a href="#0" data-date="01/11/2014" style="left: 1200px;">01 Nov</a></li>
                                    <li><a href="#0" data-date="10/12/2014" style="left: 1380px;">10 Dec</a></li>
                                    <li><a href="#0" data-date="19/01/2015" style="left: 1500px;">29 Jan</a></li>
                                    <li><a href="#0" data-date="03/03/2015" style="left: 1680px;">3 Mar</a></li>
                                </ol>
                                <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.34819);"></span>
                            </div>
                            <!-- .events -->
                        </div>
                        <!-- .events-wrapper -->
                        <ul class="cd-timeline-navigation">
                            <li><a href="#0" class="prev">Prev</a></li>
                            <li><a href="#0" class="next">Next</a></li>
                        </ul>
                        <!-- .cd-timeline-navigation -->
                    </div>
                    <!-- .timeline -->
                    <div class="events-content" style="height: 343px;">
                        <ol>
                            <li class="" data-date="16/01/2014">
                                <div class="d-flex align-items-center">
                                    <div><img class="img-circle pull-left m-r-20 m-b-10" alt="user" src="{{ asset('theme/assets/images/users/1.jpg') }}" width="60"></div>
                                    <div>
                                        <h2> Horizontal Timeline</h2>
                                        <h6>January 16th, 2014</h6></div>
                                    </div>
                                    <p class="p-t-20">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                    </p>
                                    <p>
                                        <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                    </p>
                                </li>
                                <li data-date="28/02/2014" class="">
                                    <div class="d-flex align-items-center">
                                        <div><img class="img-circle pull-left m-r-20 m-b-10" alt="user2" src="{{ asset('theme/assets/images/users/8.jpg') }}" width="60"></div>
                                        <div>
                                            <h2> Horizontal Timeline</h2>
                                            <h6>January 16th, 2014</h6></div>
                                        </div>
                                        <p class="p-t-20">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p class="p-b-20">
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="20/04/2014" class="">
                                        <h2><img class="img-circle pull-left m-r-20 m-b-10" alt="user3" src="{{ asset('theme/assets/images/users/7.jpg') }}" width="60"> Horizontal Timeline<br><small>March 20th, 2014</small></h2>
                                        <p class="m-t-40">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p class="p-b-20">
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="20/05/2014" class="selected">
                                        <h2><img class="img-circle pull-left m-r-20 m-b-10" alt="user4" src="{{ asset('theme/assets/images/users/6.jpg') }}" width="60"> Horizontal Timeline<br><small>May 20th, 2014</small></h2>
                                        <p class="m-t-40">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p class="p-b-20">
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="09/07/2014">
                                        <h2><img class="img-circle pull-left m-r-20 m-b-10" alt="user5" src="{{ asset('theme/assets/images/users/5.jpg') }}" width="60"> Horizontal Timeline<br><small>July 9th, 2014</small></h2>
                                        <p class="m-t-40">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p class="p-b-20">
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="30/08/2014">
                                        <h2><img class="img-circle pull-left m-r-20 m-b-10" alt="user6" src="{{ asset('theme/assets/images/users/4.jpg') }}" width="60"> Horizontal Timeline<br><small>August 30th, 2014</small></h2>
                                        <p class="m-t-40">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p class="p-b-20">
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="15/09/2014">
                                        <h2><img class="img-circle pull-left m-r-20 m-b-10" alt="user7" src="{{ asset('theme/assets/images/users/3.jpg') }}" width="60"> Horizontal Timeline<br><small>September 15th, 2014</small></h2>
                                        <p class="m-t-40">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p class="p-b-20">
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="01/11/2014">
                                        <h2><img class="img-circle pull-left m-r-20 m-b-10" alt="user8" src="{{ asset('theme/assets/images/users/2.jpg') }}" width="60"> Horizontal Timeline<br><small>November 01st, 2014</small></h2>
                                        <p class="m-t-40">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p>
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="10/12/2014">
                                        <h2><img class="img-circle pull-left m-r-20 m-b-10" alt="user9" src="{{ asset('theme/assets/images/users/1.jpg') }}" width="60"> Horizontal Timeline<br><small>December 10th, 2014</small></h2>
                                        <p class="m-t-40">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                        <p class="p-b-20">
                                            <button class="btn btn-rounded btn-outline-info m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="19/01/2015">
                                        <h2>Event title here</h2>
                                        <em>January 19th, 2015</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>
                                    <li data-date="03/03/2015">
                                        <h2>Event title here</h2>
                                        <em>March 3rd, 2015</em>
                                        <p class="p-b-20">
                                            Lorem ipsum dolor dfsit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('theme/assets/extra-libs/horizontal-timeline/horizontal-timeline.js') }}"></script>
@endsection