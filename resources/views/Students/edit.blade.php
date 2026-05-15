@extends('layout')

@section('content')
    <h2>Modifier étudiant</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="name" value="{{ $student->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $student->email }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" value="{{ $student->age }}" class="form-control">
        </div>

        <button class="btn btn-primary">
            Modifier
        </button>

    </form>
@endsection
