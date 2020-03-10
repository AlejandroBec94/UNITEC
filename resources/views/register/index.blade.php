@extends('layout.index')
@section('titleSection')
    Registro
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">

                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Alejandro" id="first_name" type="text" class="validate">
                        <label for="first_name">Nombre(s)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Becerra" id="last_name_dad" type="text" class="validate">
                        <label for="last_name_dad">Apellido Paterno</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Ortiz" id="last_name_mom" type="text" class="validate">
                        <label for="last_name_mom">Apellido Materno</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 m6">
                        <select class="icons">

                            <option value="" disabled selected>Choose your Gender</option>

                            @foreach($CatalogInformation as $Information)

                                @if($Information->type == 1)
                                    <option value="" class="left">{{ $Information->description }}
                                    </option>
                                @endif
                            @endforeach

                        </select>
                        <label>G&eacute;nero</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Ortiz" id="first_name" type="text" class="validate" pattern="[0-9.]+">
                        <label for="first_name">Edad</label>
                    </div>
                    <div class='input-field col s3'>
                        <select>
                            <option value="" disabled selected>Choose your option</option>

                            @foreach($CatalogInformation as $Information)

                                @if($Information->type == 2)
                                    <option value="" class="left">{{ $Information->description }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <label>Estado Civil</label>
                    </div>
                </div>



            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="row">

                    <div class="input-field col s8 m8">
                        <select class="icons pull-right" style="">

                            <option value="" disabled selected>Grado de Interes</option>

                            @foreach($CatalogInformation as $Information)

                                @if($Information->type == 3)
                                    <option value="" class="left">{{ $Information->description }}
                                    </option>
                                @endif
                            @endforeach

                        </select>
                        <label>G&eacute;nero</label>

                </div>
            </div>
        </div>
    </div>


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
