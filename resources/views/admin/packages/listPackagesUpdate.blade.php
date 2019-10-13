@extends('admin.layouts.master')


@section('content')


    <div class="col-md-1">
    </div>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header"> Add package</div>
                <div class="card-body">

                    <form action="{{ route('admin.update.singleProduct', $package->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include('admin/layouts/errorMessages')

                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="idTitle" value="{{ $package->title }}"
                                   aria-describedby="emailHelp" placeholder="Package title">
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Type</label>
                            <input type="text" class="form-control" name="type" id="idType" value="{{ $package->packageType }}"
                                   placeholder="Standard / Premium / General">
                        </div>

                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea name="description" name="description" id="idDescription" value="{{ $package->description }}"
                                      placeholder="Short description of the package" cols="30" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputTitle">Price</label>
                            <input type="number" class="form-control" name="price" id="idPrice" value="{{ $package->price }}"
                                   aria-describedby="emailHelp" placeholder="Price of the package">
                        </div>

                        <div class="form-group">
                            <label for="inputDiscountPrice">Discount Price</label>
                            <input type="number" class="form-control" name="discount" id="idDiscountPrice" value="{{ $package->discountPrice }}"
                                   aria-describedby="emailHelp" placeholder="If any discount available">
                        </div>


                        <div class="form-group">
                            <label for="status">Item Status</label>
                            <select class="form-control" id="status" name="status">

                                <option value="{{ $package->status }}">
                                    @if($package->status == 0)
                                        <td>Inactive</td> @endif
                                    @if($package->status == 1)
                                        <td>Active</td> @endif
                                </option>

                                <option value="0">Inactive</option>
                                <option value="1">Active</option>

                            </select>
                        </div>


                        <div class="form-group">
                            <label for="inputTitle">Available date</label>
                            <input type="date" class="form-control" name="date" id="idDate" value="{{ $package->updated_at }}"
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

                        <button type="submit" class="btn btn-primary">Update package</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
