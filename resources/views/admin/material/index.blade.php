@php
    $object = 'material';
    $object_title = 'danh mục';
@endphp
@extends('admin.layout.master')
@section('breadcrumb')
<ol class="breadcrumb d-md-flex d-none">
    <li class="breadcrumb-item">
        <i class="bi bi-house"></i>
        <a href="index.html">Giao diện</a>
    </li>
    <li class="breadcrumb-item breadcrumb-active" aria-current="page">{{ ucfirst($object) }}</li>
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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">Danh sách nguyên liệu</div>
                <a class="btn btn-info" href="{{ route($object.'.create') }}"><i class="bi bi-plus-square"></i> Thêm</a>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr>
                                <th>Tên </th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materials as $material)
                                <tr>
                                    <td>{{ $material->name }}</td>
                                    <td>{{ $material->quantity }}</td>
                                    <td>{{ $material->status==0?'Còn':'Không còn' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('material.edit', $material->id) }}"><i class="bi bi-pencil-square fs-5 me-3 text-warning"></i></a>
                                            <a href="{{ route('material.delete', $material->id) }}"><i class="bi bi-trash-fill me-3 fs-5"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-100 d-flex justify-content-center">
    {{ $materials->links() }}
</div>
@endsection