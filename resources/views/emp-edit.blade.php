@extends('layouts.main-layout')
@section('content')
  <form  action="#" method="post">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="firstname">FIRSTNAME</label><br>
      <input type="text" name="firstname" value="{{ $emp -> firstname  }}">
    </div>

    <div class="form-group">
      <label for="lastname">LASTNAME</label><br>
      <input type="text" name="lastname" value="{{ $emp -> lastname  }}">
    </div>

    <div class="form-group">
      <label for="date_of_birth">DATE OF BIRTH</label><br>
      <input type="date" name="date_of_birth" value="{{ $emp -> date_of_birth  }}">
    </div>

    <div class="form-group">
      <label for="private_code">PRIVATE CODE</label><br>
      <input type="text" name="private_code" value="{{ $emp -> private_code  }}">
    </div>
    <div class="form-group">
      <label for="location_id">LOCATION</label><br>
      {{-- in questo caso del SELECT il locations gia esistono quindi non aggiungamo altro id, con un altro location, ma scegliamo tra le presenti location --}}
      {{-- con questo SELECT noi diciamo: quando crei un nuovo employee, Prendi il campo location_id (che sta dentro la tablla Employees) e dentro Option nel value scriviamo cosa deve essere messo come valore in questo campo location_id. Questo valore è id della Location. infatti passiamo questo valore.  --}}
      {{-- ********  importante: ***** quando facciamo submit quello che scritto dentro apertura e chiusura del tag option cioe <option>QUI</option> non interessa al laravel. lui prende come valore per valorizzare il campo location_id quello che c'e scritto nel value del tag option cioe <option value="Questo"> --}}
      <select name="location_id">
        @foreach ($locs as $loc)

        <option value="{{ $loc -> id }}"


          @if ($loc -> id === $emp -> location -> id)

            selected

          @endif

          >  {{-- questo value è quel value che facevamo nel JS, cioe serve prendere il valore del input  --}}
          {{ $loc -> name }}
        </option>
        @endforeach
      </select>

    </div>

    <br><br>
    <button type="submit" name="button">SAVE</button>


  </form>
@endsection
