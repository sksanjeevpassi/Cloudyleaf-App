@extends('Admin/layouts/app');

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-9">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blog /</span> List Blog</h4>
        </div>
        <div class="col-md-3">
            <a href="{{ route('add.blog') }}" type="button" class="btn btn-primary">
                <span class="tf-icons bx bx-add-to-queue"></span>&nbsp; Add Blog
            </a>
        </div>
        <div>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    <img src="{{ asset('uploads/' . $blog->blog_image) }}" alt="Blog Image" width="50" height="50">
                                </td>
                                <td>{{ $blog->blog_name }}</td>
                                <td>
                                    <span class="badge bg-label-{{ $blog->blog_status == 1 ? 'primary' : 'secondary' }} me-1">
                                        {{ $blog->blog_status == 1 ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('blogs.edit', $blog->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
        <!-- / Content -->
        @endsection