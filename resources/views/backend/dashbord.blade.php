@extends('partials.backend.backend')
@section('title', 'dashboard')
@section('content')
    <div class="col-md-10">

        <a href="{{ url('posts') }}">
            <button type="button" id="button" class="btn btn-primary">Add Post</button>
        </a>

        <table class="table" id="DataTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $posts)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $posts->title }}</td>
                        <td>
                            {{ $posts->description }}
                        </td>
                        <td>
                            {{-- <button type="button" class="btn btn-primary">View</button> --}}
                            <a class="editButton" data-id="{{ $posts->id }}" role="button"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deletePost/' . $posts->id) }}"><button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    {{-- edit modal  --}}

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit post</h5>
                </div>
                <div class="modal-body">
                    <form action="{{url('editPost')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="" id="editId" name="editId">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"  placeholder="Title">

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                            placeholder="Description">

                        </div>
                        <br>
                        <div  class="form-group">
                            <label for="formGroupExampleInput" class="form-label">Image</label>
                            <input type="file" class="form-control" name="editImage" id="formGroupExampleInput">
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="closeBtn">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
