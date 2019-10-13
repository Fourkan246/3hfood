@extends('admin.layouts.master')


@section('content')


    <div class="col-md-1">
    </div>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header"> Update user</div>
                <div class="card-body">

                    <form action="{{ route('admin.update.singleMember', $id->id) }}" method="post"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include('admin/layouts/errorMessages')

                        <div class="form-group">
                            <label for="inputTitle">Name</label>
                            <input type="text" name="name" class="form-control" id="idTitle" value="{{ $id->name }}"
                                   aria-describedby="emailHelp" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Phone no</label>
                            <input type="number" class="form-control" name="phone_no" id="idType"
                                   value="{{ $id->phone_no}}"
                                   placeholder="Standard / Premium / General">
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Email</label>
                            <input type="email" name="email" class="form-control" id="idEmail" value="{{ $id->email }}"
                                   aria-describedby="emailHelp" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Address</label>
                            <input type="text" class="form-control" name="address" id="idPrice"
                                   value="{{ $id->address }}"
                                   aria-describedby="emailHelp" placeholder="Price of the package">
                        </div>

                        <div class="form-group">
                            <label for="status">Member Status</label>
                            <select class="form-control" id="status" name="status">

                                <option value="{{ $id->status }}">
                                    @if($id->status == 0)
                                        <td>Not Verified</td> @endif
                                    @if($id->status == 1)
                                        <td>Verified</td> @endif
                                    @if($id->status == 2)
                                        <td>General</td> @endif
                                    @if($id->status == 3)
                                        <td>Standard</td> @endif
                                    @if($id->status == 4)
                                        <td>Super</td> @endif
                                    @if($id->status == 9)
                                        <td>Banned</td> @endif
                                </option>

                                <option value="0">Not Verified</option>
                                <option value="1">Verified</option>
                                <option value="2">General</option>
                                <option value="3">Standard</option>
                                <option value="4">Super</option>
                                <option value="9">Banned</option>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Member</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
