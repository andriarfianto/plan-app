@extends('layouts.app')

@section('breadcrumb')
<h4 class="page-title">Kategori</h4>
<div class="d-flex align-items-center">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Kategori</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
		</ol>
	</nav>
</div>
@endsection

@section('btn-action')
<div class="">
	<a type="button" href="{{ url('pemasukan') }}" class="btn waves-effect waves-light btn-secondary">Back</a>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card card-body">
			<h4 class="card-title">Form Tambah Kategori</h4>
			<h5 class="card-subtitle"> Input data kategori </h5>
			<form class="form-horizontal mt-4">
				<div class="form-group">
					<label>Nama Kategori</label>
					<input type="text" class="form-control" value="Input nama kategori">
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" rows="5"></textarea>
				</div>
				<hr class="m-t-40 m-b-40">
				<div class="form-group">
					<div class="text-right">
						<button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-check"></i> Save</button>
						<button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection