<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <span class="flex">
                {{ $profileUser->name }} published a "{{ $activity->subject->title }}"
            </span>
        </div>
    </div>

    <div class="panel-body">
        {{ $activity->subject->body }}
    </div>
</div>