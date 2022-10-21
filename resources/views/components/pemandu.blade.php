@extends('index')
@section('content')

<table class="table" style="margin-top: 5%;"> 
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No.Lisensi</th>
      <th scope="col">No.KTAN</th>
      <th scope="col">Nama</th>
      <th scope="col">Bahasa</th>
      <th scope="col">TTL</th>
      <th scope="col">alamat</th>
      <th scope="col">Pendidikan</th>
      <th scope="col">Tempat Bekerja</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Sertifikasi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>001/PWU/DIY/94/B</td>
      <td>15.03.06657</td>
      <td>Imam Widodo</td>
      <td>Ingris,Indonesia</td>
      <td>Magelang,  27 Januari 1968</td>
      <td>Wiyoro Lor RT.002,Baturetno,Banguntapan,Bantul</td>
      <td>SMA/SMK sederajat</td>
      <td>DPD HPI DIY</td>
      <td>KETUA DPD HPI DIY</td>
      <td>TOUR GUIDE & TOUR LEADER</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>021/PWU/DIY/89/B</td>
      <td>15.03.05699</td>
      <td>I Made Bartha, B.A.</td>
      <td>Korea,Inggris</td>
      <td>Tabanan, 21 Mei 1956</td>
      <td>Gang Cemani No. 1 RT 07 RW 14 Sanggrahan Plumbon, Banguntapan, Btl</td>
      <td>S1</td>
      <td>DPD HPI DIY</td>
      <td>DEWAN KODE ETIK</td>
      <td>TOUR GUIDE</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>008/PWU/DIY/79/A</td>
      <td>15.01.07003</td>
      <td>Suroya Hidayati</td>
      <td>Jepang</td>
      <td>Semarang, 29 september 1953</td>
      <td>Taman Griya Indah II Blok C - 157  Jl. Godean</td>
      <td>S1</td>
      <td>DPD HPI DIY</td>
      <td>ANGGOTA HPI DIY</td>
      <td>TOUR GUIDE</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>025/PWU/DIY/89/B</td>
      <td>15.03.07004</td>
      <td>Suhardjito, Drs.</td>
      <td>Jepang</td>
      <td>Ponorogo, 19 Juli 1960</td>
      <td>Jl. Raya Janti Gg AKAKOM 143 A Karangjambe Banguntapan BTL</td>
      <td>S1</td>
      <td>DPD HPI DIY</td>
      <td>ANGGOTA HPI DIY</td>
      <td>TOUR GUIDE</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>026/PWU/DIY/89/B</td>
      <td>15.03.05880</td>
      <td>Sulis Triyono, M.Pd. Dr.</td>
      <td>Jerman</td>
      <td>Trenggalek , 6 Mei 1958</td>
      <td>Jl.Kluwih 8 Karang bendo Banguntapan, BTP Bantul 55198</td>
      <td>S1 3</td>
      <td>DPD HPI DIY</td>
      <td>SIE DIKLAT DPD HPI DIY</td>
      <td>TOUR GUIDE & TOUR LEADER</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>027/PWU/DIY/89/B</td>
      <td>15.03.07005</td>
      <td>Sutarti</td>
      <td>Jepang,Indonesia</td>
      <td>Bantul, 26 Juni 1958</td>
      <td>Sanggrahan Plumbon No. 188 RT 7 RW 14 Banguntapan </td>
      <td>-</td>
      <td>DPD HPI DIY</td>
      <td>ANGGOTA HPI DIY</td>
      <td>TOUR GUIDE</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>029/PWU/DIY/89/B</td>
      <td>15.03.07914</td>
      <td>Wiji Astutik</td>
      <td>Jepang</td>
      <td>Ponorogo, 18 Juli 1961</td>
      <td>Jl. Raya Janti Gg AKAKOM 143 A Karangjambe Banguntapan BTL</td>
      <td>-</td>
      <td>DPD HPI DIY</td>
      <td>ANGGOTA HPI DIY</td>
      <td>TOUR GUIDE</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>043/PWU/DIY/92/B</td>
      <td>15.03.07007</td>
      <td>Budi Haryono</td>
      <td>Jepang</td>
      <td>Bantul, 8 Maret 1972</td>
      <td>Besalen KD VI  Baturetno Banguntapan BTL</td>
      <td>-</td>
      <td>DPD HPI DIY</td>
      <td>ANGGOTA HPI DIY</td>
      <td>TOUR GUIDE</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>032/PWU/DIY/90/B</td>
      <td>15.00.05881</td>
      <td>Akhadi AF</td>
      <td>Jerman</td>
      <td>Bantul, 15 Desember 1966</td>
      <td>Babakan, Poncosari, srandaan, Bantul</td>
      <td>S1</td>
      <td>DPD HPI DIY</td>
      <td>ANGGOTA HPI DIY</td>
      <td>TOUR GUIDE</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>039/PWU/DIY/90/B</td>
      <td>15.03.07006</td>
      <td>Widya Wijaya</td>
      <td>Jepang</td>
      <td>Yogyakarta, 19 Mei 1958</td>
      <td>Prancak Glondong Rt 05 / 21 Panggungharjo Sewon Btl</td>
      <td>SMA/SMK sederajat</td>
      <td>DPD HPI DIY</td>
      <td>ANGGOTA HPI DIY</td>
      <td>TOUR GUIDE</td>
    </tr>
  </tbody>
</table>

@endsection