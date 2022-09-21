@extends('layouts.izgled')

@section('sadrzaj')

<form action="{{ route('obrada-prijave') }}" method="post">
    @csrf
    <div>
        <label for="">ime</label>
        <input type="text" name="ime">
    </div>
    <br>
    <div>
        <label for="">prezime</label>
        <input type="text" name="prezime">
    </div>
    <br>
    <div>
        <label for="">smer</label>
        <select name="smer_id" >
            @foreach($smerovi as $s)
                <option value="{{$s->id}}">{{$s->naziv_smera}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div>
        <button class="btn btn-primary">posalji</button>
    </div>
</form>