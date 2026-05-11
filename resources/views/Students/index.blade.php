@extends('layout')

@section('content')

<h2>Liste des étudiants</h2>

<a href="{{ route('students.create') }}" class="btn btn-primary mb-3">
    Ajouter étudiant
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->age }}</td>
        <td>

            <a href="{{ route('students.edit', $student->id) }}"
               class="btn btn-warning">
               Modifier
            </a>

            <form action="{{ route('students.destroy', $student->id) }}"
                  method="POST"
                  style="display:inline-block">

                @csrf
                @method('DELETE')

                <button class="btn btn-danger">
                    Supprimer
                </button>
            </form>

        </td>
    </tr>
    @endforeach

</table>

@endsection