@extends('layouts.default')
@section('content')

<link rel="stylesheet" href="/css/cv_layout.css">

<body>

<section>

  <article>
        <table style="margin-left:5; width:100% ; background-color:rgb(122, 69, 62);">
                    <tr>
                      <th  >Data Pribadi</th>
                    </tr>
                </table>
                <form action="/data" method="GET">
                <table style="margin-left:25 ;">
                    <tr> 
                    
                    
            <label for="nama">Nama Lengkap :</label><br>
            <input type="text" name="nama" id="nama"><br><br>

            <label for="kelamin">Jenis Kelamin :</label><br>
            <input type="radio" id="Perempuan" name="kelamin" value="Perempuan">
            <label for="Perempuan">Perempuan </label>
            <input type="radio" id="Laki" name="kelamin" value="Laki-Laki" >
            <label for="Laki">Laki-Laki </label><br><br>

            <label for="agama">Agama :</label><br>
            <select name="agama" id="agama">
	<option value="" disabled selected>--Agama--</option>
	<option value="Islam">Islam</option>
	<option value="Protestan">Protestan</option>
	<option value="Katolik">Katolik</option>
  <option value="Konghucu">Konghucu</option>
	<option value="Buddha">Buddha</option>
  <option value="Hindu">Hindu</option>

  </select><br><br>

            <label for="TTL">Tempat Tanggal Lahir :</label><br>
            <input type="date" name="TTL" id="TTL"><br><br>

            <label for="negara">Kewarganegaraan :</label><br>
            <input type="text" name="negara" id="negara"><br><br>

            <label for="kawin">Status Perkawinan :</label><br>
            <select name="kawin" id="kawin">
	<option value="" disabled selected>--Perkawinan--</option>
	<option value="Menikah">Menikah</option>
	<option value="Belum Menikah">Belum</option>
  <option value="Cerai">Cerai</option>

  </select><br><br>


<label for="alamat" class="pindahkanan">Alamat :</label><br>
<input type="text" name="alamat" id="alamat"  class="pindahkanan"><br><br>

<label for="telp" lass="pindahkanan">Nomor Telepon :</label><br>
<input type="tel" name="telp" id="telp" class="pindahkanan"><br><br>

<label for="email" class="pindahkanan">Email :</label><br>
<input type="text" name="email" id="email" class="pindahkanan"><br><br>

            <button type="submit" class="submitButton">Submit</button>

                    </tr> 
                    
                    
                </table>
                </form> 
  </article>
</section>
@stop