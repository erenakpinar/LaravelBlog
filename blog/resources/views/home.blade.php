@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="alert alert-success">
                            <strong>Success!</strong> You are logged in!
                        </div>

                        <p>
                            @if(Auth::user()->role ==0)
                                <a href="/admin" class="btn btn-default"> Admin Panel</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
