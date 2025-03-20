<!DOCTYPE html>
<html lang="en">
<body>
    <h3>Selamat Belajar Web</h3>
    <?php
        $_nama = "Ariel Tatum";
        $_umur = 20;
        $_berat = 6-.5;
        $_prodi = "Sistem Informasi";
        $_kampus = "STT NF";
        echo "<p>Skrip PHP Pertama Saya</p>"
    ?>
    <hr>
    <?php
        echo "Nama saya $_nama. Saya berumur $_umur tahun";
        echo "<br>dengan berat badan $_berat kg";
        echo "<br>Saya sedang menempuh pendidikan di prodi $_prodi";
    ?>
    <br>di kampus <?=$_kampus?>
    <hr>
    <p>Kampus IT STT Terpadu Nurul Fikri</p>
</body>
</html>