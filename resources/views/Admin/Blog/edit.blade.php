@extends('Admin/layouts/app');

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-10">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blog /</span> Edit Blog</h4>
            </div>
            <div class="col-md-2">
                <a href="{{ route('list.blog') }}" type="button" class="btn btn-primary">
                    Back
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Blog</h5>
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row col-md-12">
                                <div class="col-md-12 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="blog_image" name="blog_image">
                                    <!-- Display current image -->
                                    <img src="{{ asset('uploads/' . $blog->blog_image) }}" alt="Current Blog Image" width="100">
                                </div>
                            </div>

                            <div class="row col-md-12">
                                <div class="col-md-12 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Heading</label>
                                    <input type="text" class="form-control" id="blog_h" name="blog_name" value="{{ $blog->blog_name }}" placeholder="Enter Blog Heading">
                                </div>
                            </div>

                            <div class="row col-md-12">
                                <div class="col-md-12 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                                    <textarea class="form-control" id="blog_description" name="blog_description" placeholder="Enter Blog Description">{{ $blog->blog_description }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
