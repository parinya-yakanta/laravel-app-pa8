@extends('layouts.members')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Frontend</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->isAdmin }} :: {{ Auth::user()->email }}

                    <div class="text-center">
                        <h1 class="text-primary">
                            Hi... {{ Auth::user()->name }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
