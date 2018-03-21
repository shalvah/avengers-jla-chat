@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <user-list :users="users" @chatopened="currentChat = $event.user"></user-list>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <chat v-if="currentChat" :user="currentChat"></chat>
        </div>
    </div>
@endsection

<script>
    var users = JSON.parse('{!! json_encode($users) !!}');
    var currentChat;
</script>
