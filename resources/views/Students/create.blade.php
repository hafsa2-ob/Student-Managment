@extends('layout')

@section('content')
    <h2>Ajouter étudiant</h2>

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control">
        </div>

        <button class="btn btn-success">
            Enregistrer
        </button>

    </form>
@endsection
