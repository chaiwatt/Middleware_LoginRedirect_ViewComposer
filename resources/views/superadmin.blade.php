@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 <h1>Super Admin</h1> 
                 <p>You are logged in! <strong>{{ $user->name }}</strong> your married status {{ $married }}</p>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
