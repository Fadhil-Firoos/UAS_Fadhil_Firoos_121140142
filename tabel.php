

<h1 class="sub_judul">Daftar Mahasiswa</h1>
<button class="btn_tbh"><a class="tambah" href="?page=formulir" style="color: #fff; text-decoration: none;"><p>+ Tambah Mahasiswa</p></a></button>

        <div class="form mahasiswa">
            <table class="daftar_mahasiswa" style="overflow-x:scroll" id="tabel">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                <?php
                $daftar_tanggapan = mysqli_query($konek,"SELECT * FROM mahasiswa ORDER BY id ASC");
                while ($data = mysqli_fetch_array($daftar_tanggapan)) {         
                ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['prodi']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td width="22%">
                        <a class="btn" href="?page=edit&&id=<?php echo $data['id']?>">Edit</a>
                        <a class="btn_tbh" href="?page=read&&id=<?php echo $data['id']?>">Read</a>
                        <a class="btn_del" href="?page=delete&&id=<?php echo $data['id']?>">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>