@extends('layouts.app')

@section('menu')
	<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Master</span></li>
	<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-wallet"></i><span class="hide-menu">Pemasukan</span></a>
	<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">Pengeluaran</span></a>
	<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Plan</span></li>
	<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark" href="{{ url('agenda') }}" aria-expanded="false"><i class="mdi mdi-calendar-check"></i><span class="hide-menu">Agenda</span></a>
	<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-checkbox-multiple-marked"></i><span class="hide-menu">Schedule</span></a>
	<li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-clipboard-outline"></i><span class="hide-menu">Rencana</span></a>
	    <ul aria-expanded="false" class="collapse  first-level">
	        <li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Jangka Panjang</span></a></li>
	        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Jangka Pendek</span></a></li>
	    </ul>
	<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-elevation-rise"></i><span class="hide-menu">Tabungan</span></a>
	    <ul aria-expanded="false" class="collapse  first-level">
	        <li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Dana Pensiun</span></a></li>
	        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Sekolah Anak</span></a></li>
	        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Modal Usaha</span></a></li>
	        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Emas</span></a></li>
	    </ul>
	<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-coin"></i><span class="hide-menu">Investasi</span></a>
	<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
	<li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Blog</span></a>
	<li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-check"></i><span class="hide-menu">Tracker</span></a>
	    <ul aria-expanded="false" class="collapse  first-level">
	        <li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Activity</span></a></li>
	        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Workout</span></a></li>
	        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Ibadah</span></a></li>
	    </ul>
	<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Sample Pages</span></li>
	<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Profile</span></a>
	</li>
	<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-apple-safari"></i><span class="hide-menu">Timeline</span></a>
	    <ul aria-expanded="false" class="collapse first-level">
	        <li class="sidebar-item"><a href="timeline-center.html" class="sidebar-link"><i class="mdi mdi-clock-fast"></i> <span class="hide-menu"> Center Timeline </span></a></li>
	        <li class="sidebar-item"><a href="timeline-horizontal.html" class="sidebar-link"><i class="mdi mdi-clock-end"></i><span class="hide-menu"> Horizontal Timeline</span></a></li>
	        <li class="sidebar-item"><a href="timeline-left.html" class="sidebar-link"><i class="mdi mdi-clock-in"></i><span class="hide-menu"> Left Timeline</span></a></li>
	        <li class="sidebar-item"><a href="timeline-right.html" class="sidebar-link"><i class="mdi mdi-clock-start"></i><span class="hide-menu"> Right Timeline</span></a></li>
	    </ul>
	</li>
	<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html" aria-expanded="false"><i class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>
@endsection