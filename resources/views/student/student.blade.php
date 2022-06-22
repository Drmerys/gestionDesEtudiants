@extends('layouts.app')

@section('content')
{{--    @if($message = session::get('success'))--}}
{{--        <p style="color: green">{{$message}}</p>--}}
{{--    @endif--}}

    <h1 class="text-center">Liste des étudiants </h1>
    @if($students->count() > 0)
        <div class="flex flex-col items-center">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        ID
                                    </th>
{{--                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">--}}
{{--                                        Nom--}}
{{--                                    </th>--}}
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Prénom
                                    </th>
{{--                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">--}}
{{--                                        Email--}}
{{--                                    </th>--}}
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Filière
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Niveau d'étude
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Téléphone
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Voir
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Modifier
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Supprimer
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$student->id}}</td>
{{--                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">--}}
{{--                                            {{$student->lastName}}--}}
{{--                                        </td>--}}
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->firstName}}
                                        </td>
{{--                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">--}}
{{--                                            {{$student->email}}--}}
{{--                                        </td>--}}
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->educationSector}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->educationLevel}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$student->phone}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form method="POST">
                                                @csrf
                                                <a href="{{route('students.show', $student->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Voir plus</a>
                                            </form>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form method="POST">
                                                @csrf
                                                <a href="{{route('students.edit', $student->id)}}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Modifier</a>
                                            </form>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form method="POST">
                                                @csrf
                                                <a href="{{route('students.destroy', $student->id)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="bg-orange-100 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">Liste d'étudiant vide</p>
            <p>Il y a pas de d'étudiants inscrit !</p>
        </div>
    @endif
@endsection
