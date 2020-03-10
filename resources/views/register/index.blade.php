@extends('layout.index')
@section('titleSection')
    Registro
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12">

                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Alejandro" id="first_name" type="text" class="validate">
                        <label for="first_name">Nombre(s)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Becerra" id="first_name" type="text" class="validate">
                        <label for="first_name">Apellido Paterno</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Ortiz" id="first_name" type="text" class="validate">
                        <label for="first_name">Apellido Materno</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 m6">
                        <select class="icons">
                            <option value="" disabled selected>Choose your Gender</option>
                            <option value=""
                                    data-icon="https://www.shareicon.net/data/2015/08/09/82497_male_362x512.png"
                                    class="left">Hombre
                            </option>
                            <option value="" data-icon="https://www.freeiconspng.com/uploads/female-icon-2.png"
                                    class="left">Mujer
                            </option>
                        </select>
                        <label>G&eacute;nero</label>
                    </div>
                    <div class="input-field col s3">
                        <input placeholder="Ortiz" id="first_name" type="text" class="validate" pattern="[0-9.]+">
                        <label for="first_name">Edad</label>
                    </div>
                        <div class='input-field col s12'>
                            <select>
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Materialize Select</label>
                        </div>
                    </div>

            </form>
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
