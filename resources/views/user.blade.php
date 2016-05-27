@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile: <b>{{ $member->display_name }}</b></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2">
                            <p><img class="avatar-thumb" src="{{ $member->avatar }}" alt="{{ $member->display_name }}"/></p>
                            <p>{{ $member->first_name }} {{ $member->last_name }}</p>
                        </div>
                        <div class="col-md-3">
                            <label for="">Email</label>
                            <p>{{ $member->email }}</p>
                            <label for="">Bio</label>
                            <p>{{ $member->bio }}</p>
                        </div>
                        <div class="col-md-3">
                            <label for="">User Type</label>
                            <p>{{ $member->type }}</p>
                            <label for="">Account Type</label>
                            <p>{{ $member->account_type }}</p>
                        </div>
                        <div class="col-md-3">
                            <label for="">Account Statuses</label>
                            <p>@if ($member->is_pro)<span class="checkmark">&#10004;</span>@else<span class="circle">&#9675;</span>@endif Pro</p>
                            <p>@if ($member->is_premium)<span class="checkmark">&#10004;</span>@else<span class="circle">&#9675;</span>@endif Premium</p>
                            <p>@if ($member->is_enterprise)<span class="checkmark">&#10004;</span>@else<span class="circle">&#9675;</span>@endif Enterprise</p>
                            <p>@if ($member->is_email_verified)<span class="checkmark">&#10004;</span>@else<span class="circle">&#9675;</span>@endif Email Verified</p>
                            <p>@if ($member->is_account_verified)<span class="checkmark">&#10004;</span>@else<span class="circle">&#9675;</span>@endif Account Verified</p>
                        </div>
                    </div>
                    
                    <label for="badges"><span class="label label-primary">{{ $member->member_badge_count }}</span> User's Public Badges</label>
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
