<?php
if (isset($_POST['submit'])) {
    $nama= $_POST['nama'];
    $nim= $_POST['nim'];
    $prodi= $_POST['prodi'];
    $email= $_POST['email'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $tanggal_lahir= $_POST['tanggal_lahir'];
    $alamat= $_POST['alamat'];

    if($nama == "" || $nim == "" || $prodi == "" || $email == "" || $jenis_kelamin == "" || $tanggal_lahir == "" || $alamat == "") {
        echo"<script>alert('Harap lengkapi semua field yang ada silahkan isi ulang inputan');</script>";
    }else{
        $tambah = mysqli_query($konek," INSERT INTO mahasiswa (id, nama, nim, prodi, email, jenis_kelamin, tgl_lahir, alamat) VALUES ('', '$nama', '$nim', '$prodi', '$email', '$jenis_kelamin', '$tanggal_lahir', '$alamat')");
        echo"<script>alert('tambah data berhasil'); document.location = '?page=tabel';</script>";
    }
}
?>
<div class="form">
            <h1>Formulir Pendafataran</h1>
            <form method="post" enctype="multipart/form-data">
                <table class="pendaftaran">
                    <tr>
                        <td class="label">
                            <label for="nama">Nama</label>
                        </td>
                        <td class="in">
                            <input type="text" name="nama" id="nama"  placeholder="Masukkan Nama" class="input"  value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nim">NIM</label>
                        </td>
                        <td>
                            <input type="number" name="nim" id="nim"  placeholder="Masukkan NIM" class="input"  value="<?php echo isset($_POST['nim']) ? $_POST['nim'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prodi">Program Studi</label>
                        </td>
                        <td>
                            <input type="text" name="prodi" id="prodi"  placeholder="Masukkan Program Studi" class="input"  value="<?php echo isset($_POST['prodi']) ? $_POST['prodi'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email"  placeholder="Masukkan Email" class="input" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                        </td>
                        <td>
                            <select name="jenis_kelamin" id="jenis_kelamin"   class="input select">
                                <option value="" selected>Pilih</option>
                                <option value="Laki-Laki" <?php echo isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Laki-Laki' ? "selected" : ''; ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php echo isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Perempuan' ? "selected" : ''; ?>>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                        </td>
                        <td>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"   class="input"value="<?php echo isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Alamat</label>
                        </td>
                        <td>
                            <textarea name="alamat" id="alamat" cols="30" rows="10"  placeholder="Masukkan Alamat"  class="input"><?php echo isset($_POST['alamat']) ? $_POST['alamat'] : ''; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="submit">
                                <input class="btn" type="submit" value="kirim" name="submit">
                            </div>
                        </th>
                    </tr>
                </table>
            </form>
        </div>