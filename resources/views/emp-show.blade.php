@extends('layouts.main-layout')
@section('content')
  <h1>
    {{ $emp -> firstname }}
    {{ $emp -> lastname }}
    :
  </h1>

  <ul>

    <li>
      Date of birth: {{ $emp -> date_of_birth }}
    </li>
    <li>
      Private code: {{ $emp -> private_code }}
    </li>
    <li>
      Location: {{ $emp -> location -> name }}
      {{-- questo si PUO FARE in questo modo perche emp -> location ritorna solo una riga --}}
      (

        {{ $emp -> location -> city}} -
        {{ $emp -> location -> state}}

        {{--  REVIEW: dzalian mnishvnelovania AM SHEMTXVEVASHI LOCATION ARIS 'RELATION' OR CXRILS SHORIS. AM RELATIONEBIT SHIEDZLEBA NEBISMIER CXRILTAN MIXVIDE MAG DATABASESHI. RELATIONS GANSAZGVRAVS SHESABAMISI METODI MODELSHI. RELATIONIS NAXVA SHEIDZLEBA TU GAVAKETEBT DD($EMP) METODS MAGALITAD. --}}

        {{-- @php
          dd($emp);
        @endphp --}}

      )
    </li>

    <li>
      Tasks:
      <ul>
        @foreach ($emp -> tasks as $tas)
          {{-- emp -> tasks ritorna un array perche la connessione è molti a molti --}}
          <li>
            {{ $tas -> name }}:
            {{ $tas -> start_date }} -
            {{ $tas -> end_date }}
          </li>
          <br>
        @endforeach
      </ul>
      {{-- @php
        dd($emp);
      @endphp --}}
    </li>
    <li>
      <a href="{{ route('emp.edit', $emp -> id) }}">EDIT</a><br>
      <a href="{{ route('emp.destroy', $emp -> id) }}">DELETE</a>
    </li>

  </ul>

@endsection
