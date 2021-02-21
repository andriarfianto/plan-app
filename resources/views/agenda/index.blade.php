@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('theme/assets/libs/chartist/dist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/extra-libs/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/assets/extra-libs/css-chart/css-chart.css') }}" >
    <link rel="stylesheet" href="{{ asset('theme/assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/assets/extra-libs/calendar/calendar.css') }}" />
@endsection

@section('breadcrumb')
<h4 class="page-title">Agenda</h4>
<div class="d-flex align-items-center">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agenda</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Calendar, Poll -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12 col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Schedule of Month</h4>
                <h5 class="card-subtitle">Total earnings of the month</h5>
            </div>
            <div id="calendar"></div>
        </div>
    </div>
    <!-- column -->
    <div class="col-sm-12 col-lg-4">
        <div class="card poll-widget">
            <div class="card-body">
                <h4 class="card-title">Result of Poll</h4>
                <h5 class="card-subtitle">Here is the result for the latest poll</h5>
                <p class="font-bold text-muted">What is your mobile app usage daily?</p>
                <ul class="list-style-none m-t-30">
                    <li>
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="m-b-0 font-bold">A <span class="font-light">30 Minutes</span></h6>
                            </div>
                            <div class="ml-auto">
                                <h6 class="m-b-0 font-bold">55%</h6>
                            </div>
                        </div>
                        <div class="progress m-t-10">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="m-t-25">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="m-b-0 font-bold">B <span class="font-light">More than 30 minutes</span></h6>
                            </div>
                            <div class="ml-auto">
                                <h6 class="m-b-0 font-bold">20%</h6>
                            </div>
                        </div>
                        <div class="progress m-t-10">
                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="m-t-25">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="m-b-0 font-bold">C <span class="font-light">1 Hour</span></h6>
                            </div>
                            <div class="ml-auto">
                                <h6 class="m-b-0 font-bold">15%</h6>
                            </div>
                        </div>
                        <div class="progress m-t-10">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="m-t-25">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="m-b-0 font-bold">D <span class="font-light">More than 1 hour</span></h6>
                            </div>
                            <div class="ml-auto">
                                <h6 class="m-b-0 font-bold">10%</h6>
                            </div>
                        </div>
                        <div class="progress m-t-10">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
                <div class="row center-align m-t-40">
                    <!-- column -->
                    <div class="col s6 l6">
                        <div id="poll" class="m-t-20" style="height:180px; width:100%;"></div>
                    </div>
                    <!-- column -->
                    <div class="col s6 l6">
                        <ul class="list-style-none">
                            <li class="m-t-20"><i class="fa fa-circle m-r-5 text-cyan font-12"></i> Ans A Here</li>
                            <li class="m-t-20"><i class="fa fa-circle m-r-5 text-info font-12"></i> Ans B Here </li>
                            <li class="m-t-20"><i class="fa fa-circle m-r-5 text-orange font-12"></i> Ans C Here </li>
                            <li class="m-t-20"><i class="fa fa-circle m-r-5 text-success font-12"></i> Ans D Here</li>
                        </ul>
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add Event</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Category Name</label>
                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Category Color</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                                <option value="inverse">Inverse</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Task List</h4>
                <div class="todo-widget scrollable ps-container ps-theme-default" style="height:450px;" data-ps-id="2086e382-5f8c-95a3-c536-9e3db85163d0">
                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                        <li class="list-group-item todo-item" data-role="task">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label todo-label" for="customCheck">
                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> <span class="badge badge-pill badge-danger float-right">Today</span>
                                </label>
                            </div>
                            <ul class="list-style-none assignedto">
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                            </ul>
                        </li>
                        <li class="list-group-item todo-item" data-role="task">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label todo-label" for="customCheck1">
                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span><span class="badge badge-pill badge-primary float-right">1 week </span>
                                </label>
                            </div>
                            <div class="item-date"> 26 jun 2017</div>
                        </li>
                        <li class="list-group-item todo-item" data-role="task">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label todo-label" for="customCheck2">
                                    <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                </label>
                            </div>
                            <ul class="list-style-none assignedto">
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                            </ul>
                        </li>
                        <li class="list-group-item todo-item" data-role="task">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label todo-label" for="customCheck3">
                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span> <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                                </label>
                            </div>
                            <div class="item-date"> 26 jun 2017</div>
                        </li>
                        <li class="list-group-item todo-item" data-role="task">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label todo-label" for="customCheck4">
                                    <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                </label>
                            </div>
                            <ul class="list-style-none assignedto">
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                <li class="assignee"><img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                            </ul>
                        </li>
                    </ul>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
        </div>
    </div>
    <!-- column -->
    <div class="col-sm-12 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Feeds</h4>
                <div class="feed-widget scrollable ps-container ps-theme-default ps-active-y" style="height:450px;" data-ps-id="949f12fc-ff2b-7174-b614-7fb2e46ae54a">
                    <ul class="list-style-none feed-body m-0 p-b-20">
                        <li class="feed-item">
                            <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="ml-auto font-12 text-muted">Just Now</span></li>
                        <li class="feed-item">
                            <div class="feed-icon bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="ml-auto font-12 text-muted">2 Hours ago</span></li>
                        <li class="feed-item">
                            <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="ml-auto font-12 text-muted">31 May</span></li>
                        <li class="feed-item">
                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user registered.<span class="ml-auto font-12 text-muted">30 May</span></li>
                        <li class="feed-item">
                            <div class="feed-icon bg-inverse"><i class="far fa-bell"></i></div> New Version just arrived. <span class="ml-auto font-12 text-muted">27 May</span></li>
                        <li class="feed-item">
                            <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4 pending tasks. <span class="ml-auto font-12 text-muted">Just Now</span></li>
                        <li class="feed-item">
                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user registered.<span class="ml-auto font-12 text-muted">30 May</span></li>
                    </ul>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -18px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 18px; right: 3px; height: 450px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 18px; height: 432px;"></div></div></div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    <!--This is for calendar -->
    <script src="{{ asset('theme/assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('theme/assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('theme/dist/js/pages/calendar/cal-init.js') }}"></script>
    <!--This is for dashboard -->
    <script src="{{ asset('theme/dist/js/pages/dashboards/dashboard6.js') }}"></script>
@endsection