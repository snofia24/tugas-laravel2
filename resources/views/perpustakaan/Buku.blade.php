<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>buku</title>
</head>
<body>
    <h1>Data Buku</h1>
    <form action="{{ route('get_petugas') }}">
        <label for="id_buku">ID Buku</label>
        <br>
        <input type="text" name="id_buku" id="id_buku">
        <br><br>
        <label for="kode_buku">Kode Buku</label>
        <br>
        <input type="text" name="kode_buku" id="kode_buku">
        <br><br>
        <label for="judul">Judul</label>
        <br>
        <input type="text" name="judul" id="judul">
        <br><br>
        <label for="penulis" name="penulis" id="penulis">Penulis</label>
        <br>
        <input type="text" name="penulis" id="penulis">
        <br><br>
        <label for="penerbit" name="penerbit" id="penerbit">Penerbit</label>
        <br>
        <input type="text" name="penerbit" id="penerbit">
        <br><br>
        <label for="tahun_terbit" name="tahun_terbit" id="tahun_terbit">Tahun Terbit</label>
        <br>
        <input type="number" name="tahun_terbit" id="tahun_terbit">
        <br><br>
        <label for="stok" name="stok" id="stok">Stok Buku</label>
        <br>
        <input type="number" name="stok" id="stok">
        <br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>