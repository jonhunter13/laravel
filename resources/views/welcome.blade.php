@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User List</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($data as $key=>$user)
                            <li class="list-group-item"><img class="avatar" src="{{ $user->avatar }}"></img> <b><a href="{{ action('CredlyApiController@show', [$user->id]) }}">{{ $user->display_name }}</a></b></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
