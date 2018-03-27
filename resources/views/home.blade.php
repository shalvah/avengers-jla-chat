@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <user-list :users="users" @chatopened="chatWith($event.user)"></user-list>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <chat v-if="currentChat" :other-user="currentChat"></chat>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    var users = JSON.parse('{!! json_encode($users) !!}');
    window.user = JSON.parse('{!! json_encode(\Auth::user()) !!}');
</script>
