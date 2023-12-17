<?php
    include 'oop.php';

    $read_tabel = new Mahasiswa($konek);
    $data = $read_tabel->read();
?>
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
        <?php foreach ($data as $value): ?>
        <tr>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['nim']; ?></td>
            <td><?php echo $value['prodi']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['jenis_kelamin']; ?></td>
            <td><?php echo $value['tgl_lahir']; ?></td>
            <td><?php echo $value['alamat']; ?></td>
            <td width="22%">
                <a class="btn" href="?page=edit&&id=<?php echo $value['id']?>">Edit</a>
                <a class="btn_tbh" href="?page=read&&id=<?php echo $value['id']?>">Lihat</a>
                <button class="btn_del" onclick="confirmDelete(<?php echo $value['id']; ?>)">Hapus</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>      
<script>
function confirmDelete(id) {
    var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
    if (result) {
        // Jika pengguna menekan OK, arahkan ke skrip delete.php dengan parameter ID
        window.location.href = "?page=delete&&id=" + id;
    }
}
</script>