@extends('layouts.app')
@extends('layouts.menu')
@section('content')
    <!--<h5>{{$type ?? null}}</h5>
    @foreach($users as $user)
        <p>{{$user->name}}</p>
    @endforeach-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Estas logueado!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
