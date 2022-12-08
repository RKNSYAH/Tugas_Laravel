@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="/css/cv_layout.css">
<body>

<section>
  <article>
  <table class="table table-warning table-bordered shadow p-3 mb-5 table-hover ">
    <thead>
      <tr>
        <th> ID </th>
        <th> Nama Lengkap </th>
        <th> Jenis Kelamin </th>
        <th> Agama </th>
        <th> TTL </th>
        <th> Status Perkawinan </th>
        <th> Alamat </th>
        <th> No Telp </th>
        <th> Email </th>
        <th> Modify </th>
      </tr>
    </thead>
<form action="{{ url('cvshow') }}" method="POST" id="show"> @csrf </form>
<form action="{{ url('data') }}" method="POST" id="delete"> @csrf </form>
@foreach($data as $p)
<tr>
    <td class="data_display">{{ $p->id }}</td>
    <td class="data_display">{{ $p->namalengkap }}</td>
    <td class="data_display">{{ $p->jeniskelamin }}</td>
    <td class="data_display">{{ $p->agama }}</td>
    <td class="data_display">{{ $p->ttl }}</td>
    <td class="data_display">{{ $p->perkawinan }}</td>
    <td class="data_display">{{ $p->alamat }}</td>
    <td class="data_display">{{ $p->telp }}</td>
    <td class="data_display">{{ $p->email }}</td>
    <td class="data_display">
       
        <button type="submit" class="btnshow" id="pid" name="pid" form="show" value="{{ $p->id }}">Show</button> 
        <button class="btndelete" type="submit" id="pid" name="pid" form="delete" value="{{ $p->id }}">Delete</button> 
        <button class="btnedit" id="pid" name="pid" form="show" value="{{ $p->id }}">Edit</button>
    </td> 
</tr>
@endforeach
</table>
  </article>
</section>
@stop
