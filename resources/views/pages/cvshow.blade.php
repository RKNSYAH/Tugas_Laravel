@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="/css/cv_layout.css">
<body>

<section>
  

  <article>
        <table class="Def_table">
                    <tr>
                      <th>Data Pribadi</th>
                    </tr>
                </table>

                <table style="margin-left:25 ;">
                    <tr> 
                        <td class="Default_style_td">Nama </td>
                        <td class="Default_style_td">: </td> 
                        <td class="Default_style_td" style="position:relative ; ">{{ $selectid->namalengkap }}</td>
                    </tr> 
                    <tr>
                        <td class="Default_style_td">Jenis Kelamin </td>
                        <td class="Default_style_td">: </td>
                        <td class="Default_style_td">{{ $selectid->jeniskelamin }} </td>
                    </tr> 
                    <tr>
                        <td class="Default_style_td">Agama </td>
                        <td class="Default_style_td">: </td>
                        <td class="Default_style_td">{{ $selectid->agama }}</td>
                    </tr> 
                    <tr>
                        <td class="Default_style_td">TTL </td>
                        <td class="Default_style_td">: </td>
                        <td class="Default_style_td">{{ $selectid->ttl }}</td>
                    </tr> 
                    <tr>
                        <td class="Default_style_td">Status Perkawinan </td>
                        <td class="Default_style_td">: </td>
                        <td class="Default_style_td">{{ $selectid->perkawinan }}</td>
                    </tr> 
                    <tr>
                        <td class="Default_style_td">Alamat </td>
                        <td class="Default_style_td">: </td>
                        <td class="Default_style_td">{{ $selectid->alamat }}</td>
                    </tr>    
                    <tr>
                        <td class="Default_style_td">No Telp </td>
                        <td class="Default_style_td">: </td>
                        <td class="Default_style_td">{{ $selectid->telp }}</td>
                    </tr>
                    <tr>
                        <td class="Default_style_td">Email </td>
                        <td class="Default_style_td">: </td>
                        <td class="Default_style_td">{{ $selectid->email }} </td>
                    </tr>
                </table>

  </article>
</section>
@stop