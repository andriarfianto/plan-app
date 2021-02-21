@extends('layouts.app')

@section('breadcrumb')
<h4 class="page-title">Anggaran</h4>
<div class="d-flex align-items-center">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Rencana</a></li>
			<li class="breadcrumb-item active" aria-current="page">Anggaran</li>
		</ol>
	</nav>
</div>
@endsection

@section('btn-action')
<div class="">
	<a type="button" href="{{ url('anggaran/create') }}" class="btn waves-effect waves-light btn-primary">Tambah</a>
	<a type="button" href="{{ url('anggaran') }}" class="btn waves-effect waves-light btn-success">Refresh</a>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Primary Table</h4>
				<h6 class="card-subtitle">To use add class <code>.bg-primary .text-white</code> in the <code>&lt;thead&gt;</code>.</h6>
				<div class="table-responsive">
					<table class="table">
						<thead class="bg-primary text-white">
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Nigam</td>
								<td>Eichmann</td>
								<td>@Sonu</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Deshmukh</td>
								<td>Prohaska</td>
								<td>@Genelia</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Roshan</td>
								<td>Rogahn</td>
								<td>@Hritik</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Success Table</h4>
				<h6 class="card-subtitle">To use add class <code>.bg-success .text-white</code> in the <code>&lt;thead&gt;</code>.</h6>
				<div class="table-responsive">
					<table class="table">
						<thead class="bg-success text-white">
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Nigam</td>
								<td>Eichmann</td>
								<td>@Sonu</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Deshmukh</td>
								<td>Prohaska</td>
								<td>@Genelia</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Roshan</td>
								<td>Rogahn</td>
								<td>@Hritik</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection