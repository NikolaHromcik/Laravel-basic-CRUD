@extends('layouts.izgled')

@section('sadrzaj')
<h1>Da li ste sigurni da zelite obrisati ovu prijavu?</h1>
<h2>{{$prijava->ime}}</h2>
<form action="{{route('obrisi-prijavu', ['id'=>$prijava->id])}}" method="post">
    @csrf
<button class="btn btn-danger">obrisi</button>

</form>