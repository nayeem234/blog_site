@extends('partials.backend.backend')
@section('title', 'contact')
@section('content')

    <div class="col-md-10">
        <a href="{{ url('contact1') }}">
            <button type="button" id="button" class="btn btn-primary">Add Contact</button>
        </a>


        <table class="table" id="Datatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Enail</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Action</th>
                </tr>
            <tbody>
                @foreach ($data as $key => $contact)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->contact_number }}</td>
                        <td>
                            <a class="editcontact" data-id="{{ $contact->id }}"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deleteContact/' . $contact->id) }}"><button type="button"
                                    class="btn btn-danger">delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

            </thead>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="editContact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Contact

                    </h5>
                </div>
                <div class="modal-body">
                    <form action="{{ url('updateContact') }}" method="post">
                        @csrf
                        <input type="hidden" value="" id="editId" name="editId">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Title">

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Contact">Contact</label>
                            <input type="text" class="form-control" id="Contact" name="contact_number"
                                placeholder="Address">

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" name="address" placeholder="Address">

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
