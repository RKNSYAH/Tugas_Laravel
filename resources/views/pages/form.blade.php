@extends('layouts.default')
@section('content')

  <link rel="stylesheet" href="/css/cv_layout.css">

    <body>

      <section>
          <article>
              <table class="Def_table">
                  <tr>
                      <th>Formulir Data</th>
                  </tr>
              </table>
              <form action="{{ url('form') }}" method="POST">
                @csrf
                  <table style="margin-left:25 ;">
                      <tr>
                          <label for="nama">Nama Lengkap :</label><br>
                          <input type="text" name="nama" id="nama"><br><br>
                          <label for="kelamin">Jenis Kelamin :</label><br>
                          <input type="radio" id="Perempuan" name="kelamin" value="Perempuan">
                          <label for="Perempuan">Perempuan </label>
                          <input type="radio" id="Laki" name="kelamin" value="Laki-Laki">
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
                          <label for="kawin">Status Perkawinan :</label><br>
                          <select name="kawin" id="kawin">
                              <option value="" disabled selected>--Perkawinan--</option>
                              <option value="Menikah">Menikah</option>
                              <option value="Belum Menikah">Belum</option>
                              <option value="Cerai">Cerai</option>
                          </select><br><br>
                          <label for="alamat">Alamat :</label><br>
                          <input type="text" name="alamat" id="alamat"><br><br>
                          <label for="telp">Nomor Telepon :</label><br>
                          <input type="tel" name="telp" id="telp"><br><br>
                          <label for="email">Email :</label><br>
                          <input type="text" name="email" id="email"><br><br>
                          <button type="submit" class="submitButton">
                              <p class="btnText">Submit</p>
                              <div class="btnTwo">
                                  <p class="btnText2"><i class="gg-arrow-right "></i></p>
                              </div>
                          </button>
                          <button type="reset" class="btn btn-outline-danger resetButton">Reset</button>
                      </tr>
                  </table>
              </form>
          </article>
      </section>

@stop
