@php
    $object='category';
    $object_title='danh mục';
@endphp
@extends('admin.layout.master')
@section('breadcrumb')
<ol class="breadcrumb d-md-flex d-none">
    <li class="breadcrumb-item">
        <i class="bi bi-house"></i>
        <a href="{{ route($object) }}">{{ ucfirst($object) }}</a>
    </li>
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Chỉnh sửa</li>
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
<form action="{{ route($object.'.update',['id'=>$category->id]) }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="col-sm-12 col-12">
        <div class="card-border">
            <div class="card-border-title">Chỉnh sửa {{ $object_title }}</div>
            <div class="card-border-body">

    
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Tên {{ $object_title }}<span class="text-red">*</span></label>
                            <input value="{{ $category->name }}" name="name" type="text" class="form-control" placeholder="Nhập tên {{ $object_title }}" autocomplete="off">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-10 col-12">
                        <div class="mb-0">
                            <label class="form-label">Chọn ảnh {{ ucfirst($object_title) }}</label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-2 col-12">
                        <div class="mb-0">
                            <img class="img-fluid" src="{{ asset($category->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-12">
        <div class="custom-btn-group flex-end">
            <button type="submit" class="btn btn-success">Lưu</button>
        </div>
    </div>

</form>

@endsection