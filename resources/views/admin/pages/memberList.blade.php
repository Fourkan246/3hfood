@extends('admin.layouts.master')


@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header"> List of all Members</div>
                <div class="card-body">

                    @include('admin/layouts/errorMessages')

                    <table class="table table-hover table-striped table-responsive">
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Phone no</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>Update</th>
                            <th>Delete!</th>
                        </tr>

                        @php
                            $i=1
                        @endphp
                        @foreach($members as $member)
                            <tr>
                                <td width="20px">{{ $i }}</td>
                                <td width="30px">{{ $member->name }}</td>
                                <td width="30px">{{ $member->phone_no }}</td>
                                <td width="30px">{{ $member->email }}</td>
                                @if($member->status == 0) <td>Not Verified</td> @endif
                                @if($member->status == 1) <td>Verified</td> @endif
                                @if($member->status == 2) <td>General</td> @endif
                                @if($member->status == 3) <td>Standard</td> @endif
                                @if($member->status == 4) <td>Super</td> @endif
                                @if($member->status == 9) <td>Banned</td> @endif

                                <td width="30px">{{ $member->address }}</td>
                                <td>
                                    <a href="{{ route('admin.allMembersList.update', $member->id) }}"
                                       class="btn btn-success">Update</a>
                                </td>



                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="#deleteModel{{ $member->id }}" class="btn btn-danger" data-toggle="modal">Delete</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModel{{ $member->id }}" tabindex="-1"
                                         role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModel{{ $member->id }}">Attention...!</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    This can not be undone!
                                                    Are you sure you want to delete this..?

                                                    <form action="{!! route('admin.member.delete', $member->id) !!}" method="post">
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
