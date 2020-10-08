@extends('layouts.main-layout')
@section('content')
  <h1>Employees:</h1>
  <br><br>

  <a href="{{ route('emp.create') }}">
    CREATE NEW EMPLOYEE
  </a>

  <ul>

    @foreach ($emps as $emp)
      <li>
        <a href="{{ route('emp.show', $emp -> id)}}">
        {{ $emp -> firstname }}
        {{ $emp -> lastname }}
        </a>
        
      </li>
    @endforeach

  </ul>
@endsection
