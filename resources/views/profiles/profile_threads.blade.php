
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="level">
                        <span class="flex">
                            <a href="#">{{ $thread->creator->name }}</a> posted:
                            {{ $thread->title }}
                        </span>

                        <span>{{ $thread->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>
</div>