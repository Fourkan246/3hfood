@extends('admin.layouts.master')


@section('content')


    <div class="col-md-1">
    </div>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header"> Add package</div>
                <div class="card-body">

                    <form action="{{ route('admin.post') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('admin/layouts/errorMessages')
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="idTitle"
                                   aria-describedby="emailHelp" placeholder="Package title">
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Package Type</label>
                            <select class="custom-select" id="idType" name="type">
                                <option selected>Choose...</option>
                                <option value="General">General</option>
                                <option value="Standard">Standard</option>
                                <option value="Premium">Premium</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea name="description" name="description" id="idDescription"
                                      placeholder="Short description of the package" cols="30" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Price</label>
                            <input type="number" class="form-control" name="price" id="idPrice"
                                   aria-describedby="emailHelp" placeholder="Price of the package">
                        </div>

                        <div class="form-group">
                            <label for="inputDiscountPrice">Discount Price</label>
                            <input type="number" class="form-control" name="discount" id="idDiscountPrice"
                                   aria-describedby="emailHelp" placeholder="If any discount available">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="custom-select" id="status" name="status">
                                <option selected>Choose...</option>
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Available date</label>
                            <input type="date" class="form-control" name="date" id="idDate"
                                   aria-describedby="emailHelp" placeholder="">
                        </div>

                        <div class="wrapper">
                            <div class="form-group">
                                <label for="PackageImage">Photo of the package</label>
                                <input type="file" class="form-control" name="packageImage[]" id="idPackageImage">
                            </div>

                            <div class="form-group">
                                <label for="PackageImage">Photo of the package</label>
                                <input type="file" class="form-control" name="packageImage[]" id="idPackageImage">
                            </div>

                            <div class="form-group">
                                <label for="PackageImage">Photo of the package</label>
                                <input type="file" class="form-control" name="packageImage[]" id="idPackageImage">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add package</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
