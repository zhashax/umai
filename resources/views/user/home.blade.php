@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>
                <div class="card-body">
                    <div class="panel-body">
                        <p>visitors: {{count($user)}}</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="panel-body">
                    
                      <a href="{{route('user.students')}}">ученики</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection