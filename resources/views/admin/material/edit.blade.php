@php
    $object='category';
    $object_title='nguyên liệu';
@endphp
@extends('admin.layout.master')
@section('breadcrumb')
<ol class="breadcrumb d-md-flex d-none">
    <li class="breadcrumb-item">
        <i class="bi bi-house"></i>
        <a href="#"></a>
    </li>
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Thêm</li>
</ol>
@endsection
@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<form action="{{ route('material.update', $material->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="col-sm-12 col-12">
        <div class="card-border">
            <div class="card-border-title">Cập nhật {{ $object_title }}</div>
            <div class="card-border-body">

    
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Tên <span class="text-red">*</span></label>
                            <input name="name" type="text" class="form-control" placeholder="Nhập tên {{ $object_title }}" autocomplete="off" value="{{ $material->name }}">
                            @error('name')
                            <span class="text-danger"></span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Tình trạng {{ $object_title }}<span class="text-red">*</span></label>
                            <select class="form-control" name="status"  placeholder="Chọn {{ ucfirst($object_title) }} cha">
                                <option {{ $material->status==0?'selected':'' }} value="{{ $material->status }}">Còn</option>
                                <option {{ $material->status==1?'selected':'' }} value="{{ $material->status }}">Không còn</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-12">
                        <div class="mb-3">
                            <label class="form-label">Số lượng <span class="text-red">*</span></label>
                            <input name="qty" type="text" class="form-control" placeholder="Nhập tên {{ $object_title }}" autocomplete="off" value="{{ $material->quantity }}">
                            @error('name')
                            <span class="text-danger"></span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-12">
                        <div class="mb-0">
                            <label class="form-label">Chọn ảnh </label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                            <span class="text-danger"></span>
                            @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-12">
        <div class="custom-btn-group flex-end">
            <button type="submit" class="btn btn-success">Cập nhật</button>
        </div>
    </div>

</form>

@endsection

