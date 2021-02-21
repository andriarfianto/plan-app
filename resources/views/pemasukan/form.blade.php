@extends('layouts.app')

@section('breadcrumb')
<h4 class="page-title">Pemasukan</h4>
<div class="d-flex align-items-center">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Pemasukan</a></li>
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
			<h4 class="card-title">Form Tambah Pemasukan</h4>
			<h5 class="card-subtitle"> Input data pemasukan </h5>
			<form class="form-horizontal mt-4">
				<div class="form-group">
					<label>Tanggal</label>
					<input type="text" class="form-control" value="Tanggal">
				</div>
				<div class="form-group">
					<label for="example-email">Nominal</label>
					<input type="text" id="example-email" name="example-email" class="form-control" placeholder="Nominal">
				</div>
				<div class="form-group">
					<label>Pemasukan / <span class="help"> Kegunaan</span></label>
					<input type="text" class="form-control" placeholder="Kegunaan">
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select class="custom-select" id="example-month-input2">
                        <option selected="">-- Silahkan Pilih --</option>
                        <option value="1">Urgent</option>
                        <option value="2">Tabungan</option>
                        <option value="3">Paket Data</option>
                    </select>
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