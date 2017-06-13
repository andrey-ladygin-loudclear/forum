@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>
                {{ $profileUser->name }}
                <small>Since {{ $profileUser->created_at->diffForHumans() }}</small>
            </h1>
        </div>

        @foreach($activities as $date => $activity)
            <h3 class="page-header">{{ $date }}</h3>
            @foreach($activity as $record)
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @include("profiles.activities.{$record->type}", ['activity' => $record])
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach

        {{--{{ $threads->links() }}--}}
    </div>
@endsection