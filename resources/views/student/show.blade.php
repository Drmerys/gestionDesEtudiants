@extends('layouts.app')

@section('content')
    <style>
        .lbl{
            color: black;
            width: 200px;
            font-weight: bold;
            background-color: #dddddd;
            border-radius: 5px;
            font-size: 16px;
            padding-left: 11px;
            padding-right: 4px;
            padding-bottom: 5px;
            margin-right: 100px;
            margin-bottom: 70px;
        }
    </style>
    <div class="flex flex-col items-center">
        <h1>Détails de l'étudiant</h1><br>
        <table style="border: 0px;">
            <td>
                <p><b class="lbl"> ID</b>{{$students->id}}</p>
                <p><b class="lbl"> Nom</b>{{$students->lastName}}</p>
                <p><b class="lbl"> Prénom</b>{{$students->firstName}}</p>
                <p><b class="lbl"> Filière</b>{{$students->educationSector}}</p>
                <p><b class="lbl"> Niveau d'étude</b>{{$students->educationLevel}}</p>
                <p><b class="lbl"> Téléphone</b>{{$students->phone}}</p>
                <p><b class="lbl"> Email</b>{{$students->email}}</p>
            </td>

            <td style="padding-left: 150px">
                <img src="/image/{{$students->image}}" width="128" height="128">
            </td>

        </table>

    </div>
@endsection
