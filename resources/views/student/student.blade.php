@extends('layouts.app')

@section('content')
    <h1>Liste des étudiants </h1>
    @if($students->count() > 0)
        <table class="table-auto">
            <thead>
            <tr class="text-center">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Filière</th>
                <th>Niveau d'études</th>
                <th>Téléphone</th>
            </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr class="text-center">
                        <td>{{$student->lastName}}</td>
                        <td>{{$student->firstName}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->educationSector}}</td>
                        <td>{{$student->educationLevel}}</td>
                        <td>{{$student->phone}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="bg-orange-100 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">Liste d'étudiant vide</p>
            <p>Il y a pas de d'étudiants inscrit !</p>
        </div>
    @endif
@endsection
