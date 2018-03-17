@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post">
                        @csrf
                        <input class="form-control" name="user_id" placeholder="Who do you want to chat with?">
                        <button class="btn btn-lg btn-primary">Start Chatting</button>
                    </form>

                    @foreach($chats as $chat)
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
