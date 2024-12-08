<!DOCTYPE html>
<htswa>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h3>Tambah Data Buku</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judulBuku" required></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
                
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> 
    </form>
</body>
</htswa>

