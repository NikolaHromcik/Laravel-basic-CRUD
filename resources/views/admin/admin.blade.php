@extends('layouts.izgled')

@section('sadrzaj')

<a href="{{ route('prijava') }}" class="btn btn-primary">prijavi se</a>
<table class="table table-striped">

<thead>
    <tr>
        <th>ime</th>
        <th>prezime</th>
        <th>status</th>
        <th>smer</th>
        <th>obrada</th>
        <th>brisanje</th>
    </tr>
</thead>
<tbody>
    @foreach($prijave as $p)
        <tr>
            <td>{{$p->ime}}</td>
            <td>{{$p->prezime}}</td>
            <td>
                @if($p->status== -1)
                neobradjen
                @elseif($p->status== 0)
                odbijen
                @elseif($p->status== 1)
                primljen
                @endif
            </td>
            <td>{{$p->smer->naziv_smera}}</td>
            <td>
                <a href="{{ route('admin-prijave', ['id'=>$p->id]) }}">pregledaj</a>
            </td>
            <td>
            <a href="{{ route('brisanje', ['id'=>$p->id]) }}">obrisi</a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>