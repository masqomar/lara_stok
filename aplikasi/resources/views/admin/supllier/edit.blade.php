@extends('layouts.admin')

@section('title')
    <title>Edit Supplier</title>
@endsection

@section('content')
<div class="container-fluid dashboard-content">
    <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-block" id="basicform">
                        <h3 class="section-title">Supplier</h3>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Edit Supplier</h5>
                        <div class="card-body">
                            <form action="{{ route('admin.supplier.update', $supllier->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Supplier</label>
                                <input type="text" name="name" value="{{ old('name', $supllier->name) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{ old('email', $supllier->email) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">No. Hp</label>
                                <input type="text" name="telepon" value="{{ old('telepon', $supllier->telepon) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address" id="" cols="30" rows="4" class="form-control">{{ old('address', $supllier->address) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-paper-plane"></i> KIRIM</button>
                            <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-undo"></i> RESET</button>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection