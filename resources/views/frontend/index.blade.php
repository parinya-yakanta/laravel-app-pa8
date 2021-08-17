@extends('layouts.frontend')

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

                    @if (!empty( Auth::user()->isAdmin))
                    {{ Auth::user()->isAdmin }} :: {{ Auth::user()->email }}
                    @endif

                    <div class="text-center">
                        <h1 class="text-primary">
                            
                            @if (! empty(Auth::user()->name) )
                                Hi... {{ Auth::user()->name }}
                            @else
                                <h1>Hello My Web <br> q(*.*)p </h1>
                            @endif
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
