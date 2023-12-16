<?php
mysqli_query($konek," DELETE FROM mahasiswa WHERE id = '$_GET[id]'");
echo"<script>alert('hapus data berhasil'); document.location = '?page=tabel';</script>";
?>