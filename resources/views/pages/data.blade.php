@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="/css/cv_layout.css">
<body>

<section>
  <article>
  <table border= "1" cellpadding="2" cellspacing="4">
<tr><td> ID </td><td> Nama Lengkap </td><td> 
Jenis Kelamin </td><td> Agama </td><td> TTL </td><td> 
Status Perkawinan </td><td> Alamat </td><td> No Telp </td><td> Email </td></tr>

@foreach($data as $p)
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->namalengkap }}</td>
    <td>{{ $p->jeniskelamin }}</td>
    <td>{{ $p->agama }}</td>
    <td>{{ $p->ttl }}</td>
    <td>{{ $p->perkawinan }}</td>
    <td>{{ $p->alamat }}</td>
    <td>{{ $p->telp }}</td>
    <td>{{ $p->email }}</td>
    <td><button class="btndelete">Delete</button> <button class="btnedit">Edit</button>
    <button class="btnedit" type="submit" href="">Show</button> </td>
</tr>
@endforeach
</table>
  </article>
</section>
@stop