@extends('member.layouts.master')


@section('content')



    <div class="container box">

        <form method="POST" action="{{ url('send_email/send') }}">
            
            {{ csrf_field() }}

            @include('member/layouts/errorMessages')
            <div class="form-group">
                <label>Enter Your Message</label>
                <textarea type="number" name="message" class="form-control"></textarea>
            </div>
            <div class="class-group">
                <input type="submit" name="send" value="send" class="btn btn-info"/>
            </div>
            
        </form>

    </div>


@endsection
