@extends('layouts.base')

@section('content')

@foreach($errors->all() as $error)
    {{ $error }}
@endforeach

 <form action="" method="POST">
     @csrf
     <input type="text" name="name" placeholder="Nom...">

     <button>Ajouter</button>
 </form>

@endsection