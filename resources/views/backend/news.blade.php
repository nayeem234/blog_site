@extends('partials.backend.backend')
@section('title', 'news')
@section('content')
<div class="col-md-10">
  <a href="{{ url('newses1') }}">
            <button type="button" id="button" class="btn btn-primary">Add News</button>
        </a>

<table class="table" id="Datatable">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Title</th>
			<th scope="col">Description</th>
			<th scope="col">Action</th>
		</tr>
		<tbody>
		@foreach($data as $key=> $news)
			<tr>
				<th scope="row">{{$key+1}}</th>
				<td>{{$news->title}}</td>
				<td>{{$news->description}}</td>
				<td>
					<a class="editNews" data-id="{{ $news->id }}"><button type="button" class="btn btn-warning">edit</button></a>
					<a href="{{url('deleteNews/'.$news->id)}}"><button type="button" class="btn btn-danger">delete</button></a>
				</td>
			</tr>
		@endforeach

		</tbody>

	</thead>
</table>
</div>


<!-- Modal -->
    <div class="modal fade" id="editNews" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit News</h5>
                </div>
                <div class="modal-body">
                    <form action="{{url('editNews')}}" method="post">
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
