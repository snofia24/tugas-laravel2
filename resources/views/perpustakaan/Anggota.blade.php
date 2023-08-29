<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anggota</title>
</head>
<body>
    <h1>Data Anggota Perpustakaan</h1>
    <form action="{{ route('get_buku') }}">
        <label for="id_anggota">ID Anggota</label>
        <br>
        <input type="text" name="id_anggota" id="id_anggota">
        <br><br>
        <label for="kode_anggota">Kode Anggota</label>
        <br>
        <input type="text" name="kode_anggota" id="kode_anggota">
        <br><br>
        <label for="nama">Nama</label>
        <br>
        <input type="text" name="nama" id="nama">
        <br><br>
        <label for="jk">Jenis Kelamin</label>
        <br>
        <input type="radio" name="jk" id="jk" value="Laki-laki">Laki-laki
        <input type="radio" name="jk" id="jk" value="Perempuan">Perempuan
        <br><br>
        <label for="jurusan">Jurusan</label>
        <br>
        <select name="jurusan" id="jurusan">
            <option value="">-- Pilih Jurusan --</option>
            <option value="RPL">RPL</option>
            <option value="DPIB">DPIB</option>
            <option value="TP">TP</option>
            <option value="TFLM">TFLM</option>
            <option value="TEI">TEI</option>
            <option value="TITL">TITL</option>
            <option value="TKJ">TKJ</option>
        </select>
        <br><br>
        <label for="no_telp">No. Telepon</label>
        <br>
        <input type="number" name="no_telp" id="no_telp">
        <br><br>
        <label for="alamat">Alamat</label>
        <br>
        <textarea name="alamat" id="alamat"></textarea>
        <br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>