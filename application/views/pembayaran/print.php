<html><head>
<title>Report Table</title></head>
<body>
<h2><center>Biodata Mahasiswa</center></h2>
<table>
<thead>
<tr>
 <th><center>No</center></th>
 <th><center>No Pembayaran</center></th>
 <th><center>Tanggal</center></th>
 <th><center>Kode_Token</center></th>
 <th><center>Jumlah Bulan</center></th>
 <th><center>Nama Penghuni</center></th>
</tr>
</thead>
<tbody>
<?php $no=1;
 foreach ($data as $key) { ?>
<tr>
 <td><center><?php echo $no?></center></td>
 <td><center><?php echo $key->no_pembayaran?></center></td>
 <td><center><?php echo $key->tanggal?></center></td>
 <td><center><?php echo $key->kode_token?></center></td>
 <td><center><?php echo $key->jumlah_bulan?></center></td>
 <td><center><?php echo $key->nama_penghuni?></center></td>
</tr>
<?php $no++; } ?>
</tbody></table>
</body></html>