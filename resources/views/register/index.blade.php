@extends('layout.index')
@section('titleSection')
    Registro
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <form method="POST" action="{{ route('signup') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col s12">

                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Alejandro" id="first_name" type="text" class="validate"
                                   name="first_name" required>
                            <label for="first_name">Nombre(s)</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: #761b18">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Becerra" id="last_name_dad" type="text" class="validate"
                                   name="last_name_dad" required>
                            <label for="last_name_dad">Apellido Paterno</label>

                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Ortiz" id="last_name_mom" type="text" class="validate"
                                   name="last_name_mom" required>
                            <label for="last_name_mom">Apellido Materno</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6 m6">
                            <select class="icons" name="gender" required>

                                <option value="" disabled selected>Choose your Gender</option>

                                @foreach($CatalogInformation as $Information)

                                    @if($Information->type == 1)
                                        <option value="{{ $Information->id }}" class="left">{{ $Information->description }}
                                        </option>
                                    @endif
                                @endforeach

                            </select>
                            <label>G&eacute;nero</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Ortiz" id="age" type="text" class="validate" pattern="[0-9.]+"
                                   name="age">
                            <label for="age">Edad</label>
                        </div>
                        <div class='input-field col s3'>
                            <select name="civil_state">
                                <option value="" disabled selected>Choose your option</option>

                                @foreach($CatalogInformation as $Information)

                                    @if($Information->type == 2)
                                        <option value="{{ $Information->id }}" class="left">{{ $Information->description }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            <label>Estado Civil</label>
                        </div>
                    </div>

                </div>
            </div>
            <hr>
            <br>
            <div class="row align-self-center">
                <div class="col s12">
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s10">
                                <input placeholder="a.becor94@gmail.com" id="email" type="email"
                                       class="validate  @error('email') is-invalid @enderror" required name="email">
                                <label for="email">E-mail</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: #761b18">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s10">
                                <input placeholder="******" id="Password" type="password" class="validate"
                                       name="password" required>
                                <label for="Password">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: #761b18">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>

        $(document).ready(function () {
            $('select').formSelect();
        });

        $("input[type=text][pattern]").on("input", function () {
            if (!this.checkValidity())
                this.value = this.value.slice(0, -1);
        });


    </script>
@endsection
