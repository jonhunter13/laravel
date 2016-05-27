@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile: <b>{{ $member->display_name }}</b></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">User Type</label>
                            <p>{{ $member->type }}</p>
                            <label for="">Account Type</label>
                            <p>{{ $member->account_type }}</p>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                    
                    <label for="badges">User's Public Badges <span class="label label-primary">{{ $member->member_badge_count }}</span></label>
                    <div class="well well-lg">
                        @foreach ($badges as $b)
                            <img src="{{ $b->badge->image_url }}" class="badge-img" alt="{{ $b->badge->title }}">
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
