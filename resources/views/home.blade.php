@extends('layout.index')
@section('titleSection')
    Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Bienvenido {{ Auth::user()->name }} {{ Auth::user()->last_name_dad }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
