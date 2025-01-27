<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Data Mobil</title>
</head>
<body>
    <article>
        <div class="container">
            <h1>Aset Mobil</h1>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID Kendaraan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Plat Mobil</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">Tanggal Pajak</th>
                    <th scope="col">Status</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Harga Sewa</th>
                    <th scope="col">Foto Mobil</th>
                  </tr>
                </thead> 
                <tbody>
                <?php  $db = \Config\Database::connect();
                       $query = $db->query('Select * from mobil');

                       $row = $query->getRow();
                       foreach ($query->getResult('array') as $row) {
                            if (isset($row)) {?>
                                <tr>
                                    <td><?php echo $row['idKendaraan']; ?></td> <!-- //Bisa diganti dengan NIM-->
                                    <td><?php echo $row['nama_kendaraan']; ?></td> <!-- //Bisa diganti dengan NAMA-->
                                    <td><?php echo $row['no_polisi']; ?></td> <!-- //Bisa diganti dengan PRAKTIKUM-->
                                    <td><?php echo $row['type']; ?></td> <!-- //Bisa diganti dengan IPK-->
                                    <td><?php echo $row['tanggal_pajak']; ?></td> <!-- //Bisa diganti dengan NIM-->
                                    <td><?php echo $row['status']; ?></td> <!-- //Bisa diganti dengan NAMA-->
                                    <td><?php echo $row['warna']; ?></td> <!-- //Bisa diganti dengan PRAKTIKUM-->
                                    <td><?php echo $row['harga_sewa']; ?></td>
                                    <td><?php echo $row['foto']; ?></td>
                                </tr>
                    <?php  } }?>
                </tbody>
              </table>
              <a href="/asisten/simpan" class="btn btn-primary">Tambah Asisten</a>
              <a href="/asisten/update" class="btn btn-primary">Update</a>
              <a href="/asisten/hapus" class="btn btn-danger">Delete</a>
              <a href="/asisten/search" class="btn btn-primary">Cari</a>
              <a href="/asisten/logout" class="btn btn-primary">Log Out</a>
        </div>
        
    </article>
</body>
</html>