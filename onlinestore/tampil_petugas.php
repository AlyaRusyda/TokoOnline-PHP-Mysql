<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        * {
            margin : 10px;
        }
    </style>
</head>
<body>
    <h3>Tampil Pelanggan</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PETUGAS</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>LEVEL</th>
                <th>AKSI</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
            $qry_petugas=mysqli_query($conn,"select * from petugas");
            $no=0;
            while($petugas=mysqli_fetch_array($qry_petugas)){
                $no++;?>
                <tr>              
                    <td><?=$no?></td>
                    <td><?=$petugas['nama_petugas']?></td>
                    <td><?=$petugas['username']?></td>
                    <td><?=$petugas['password']?></td>
                    <td><?=$petugas['level']?></td>
                    <td>
                        <a href="ubah_petugas.php?id_petugas=<?=$petugas['id_petugas']?>" class="btn btn-success">Ubah</a> <a href="hapus_petugas.php?id_petugas=<?=$petugas['id_petugas']?>" onclick="return confirm('Apakah anda yakin menghapus petugas ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>