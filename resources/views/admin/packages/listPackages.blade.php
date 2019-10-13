@extends('admin.layouts.master')


@section('content')
    <div class="col-md-1">
    </div>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header"> List of all packages</div>
                <div class="card-body">

                    @include('admin/layouts/errorMessages')

                    <table class="table table-hover table-striped table-responsive">
                        <tr>
                            <th>Serial</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Action</th>
                        </tr>

                        @php
                            $i=1
                        @endphp
                        @foreach($packages as $package)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $package->title }}</td>
                                <td>{{ $package->packageType }}</td>
                                <td>{{ $package->price }}</td>
                                <td>{{ $package->discountPrice }}</td>
                                <td>{{ $package->status }}</td>
                                <td>
                                    <a href="{{ route('admin.allPackagesList.update', $package->id) }}"
                                       class="btn btn-success">Update</a>
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="#deleteModel{{ $package->id }}" class="btn btn-danger" data-toggle="modal">Delete</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModel{{ $package->id }}" tabindex="-1"
                                         role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModel{{ $package->id }}">Attention...!</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    This can not be undone!
                                                    Are you sure you want to delete this..?

                                                    <form action="{!! route('admin.update.delete', $package->id) !!}" method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                                    </form>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancle
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>

                            </tr>
                            @php
                                $i++
                            @endphp
                        @endforeach
                    </table>

                </div>
            </div>

        </div>
    </div>


@endsection
