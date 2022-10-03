@extends('partials.backend.backend')
@section('title', 'Posts')
@section('content')
    <div class="col-md-10">
        <div class="card">
            <form action="{{url('post')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput"
                        placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="formGroupExampleInput"
                        placeholder="Description">
                </div>
                <button type="submit" class="btn btn-primary">Add Post</button>

            </form>
        </div>
    </div>
@endsection
