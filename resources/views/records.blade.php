<!-- records.blade.php -->

@extends('layouts.app')

						@section('title', 'Records')

						@section('content')
						{{-- <h2> Doctors 👻 </h2>
								<p> {{ $doctors }}</p> --}}

							<h2> Records 💽 </h2>
							<table class="mb-4">
							<thead>
							<tr>
							<th> Nombre </th>
							<th> Profesion </th>
							<th> Hospital </th>
							<th> Sexo </th>
							<th> Edad </th>
							</tr>
							</thead>
							<tbody>
							@foreach ($doctors as $doctor)
							<tr>
							<td> {{ $doctor->full_name }} </td>
							<td> {{ $doctor->profession }} </td>
							<td> {{ $doctor->hospital }} </td>
							<td> {{ $doctor->sex }} </td>
							<td> {{ $doctor->age }} </td>
							</tr>
							@endforeach
							</tbody>
							</table>
							<h2> 👻</h2>
							<p> {{ $doctors }}</p>

							<div class="text-center">
							<div class="d-flex justify-content-center">
							<form method="post" action="{{ route('deleteAllDoctors') }}">
							@csrf
							@method('delete')
							<button type="submit" onclick="return confirm('Are you sure you want to delete all doctors?')"
							class="btn btn-dark">
							Delete All Doctors
							</button>
							</form>

							<form method="post" action="{{ route('addTwoDoctors') }}">
							@csrf
							<button type="submit" class="btn btn-dark">Add two doctors</button>
							</form>
							<form method="post" action="{{ route('exportToExcel') }}">
							@csrf
							<button type="submit" class="btn btn-dark"> Export </button>
            </form>
        </div>
    </div>

@endsection
