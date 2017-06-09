@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>
                {{ $profileUser->name }}
                <small>Since {{ $profileUser->created_at->diffForHumans() }}</small>
            </h1>
        </div>

        @foreach($activities as $activity)
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @include("profiles.activities.{$activity->type}")
                    </div>
                </div>
            </div>
        @endforeach

        {{--{{ $threads->links() }}--}}
    </div>
@endsection