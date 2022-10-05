@extends('partials.backend.backend')
@section('title', 'contact')
@section('content')
<div class="col-md-10">
    <div class="card">
        <form action="{{url('datacontact')}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="formGroupExampleInput"
                    placeholder="email">
            </div>


            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="contact_number" id="formGroupExampleInput"
                    placeholder="contact number">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="formGroupExampleInput"
                    placeholder ="address">
            </div>
            <button type="submit" class="btn btn-primary">Add contact</button>

        </form>
    </div>
</div>

@endsection
