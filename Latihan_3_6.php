<html>
<title>Latihan 3_6</title>

<head>
 </head>

<body>
    <br>
    <h1><center><td>PENILAIAN</td></center></h1>
    <form action="" method="post" name="input">

        <table align="center">
            <tr>
                <td>NIM</td>
                <td><input type="text" class="form-control form-control-lg" name="nim" value="<?php if (!empty($_POST["nim"])) {
                                                                                                    echo $_POST["nim"];
                                                                                                }; ?>"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><select name="progdi" class="form-control">
                        <option value="Teknik Informatika S1">A11</option>
                        <option value="Sistem Informasi S1">A12</option>
                        <option value="Teknik Informatika D3">A22</option>

                    </select></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><input type="text" class="form-control form-control-lg" name="nt" value="<?php if (!empty($_POST["nt"])) {
                                                                                                    echo $_POST["nt"];
                                                                                                }; ?>"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="text" class="form-control form-control-lg" name="uts" value="<?php if (!empty($_POST["uts"])) {
                                                                                                    echo $_POST["uts"];
                                                                                                }; ?>"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="text" class="form-control form-control-lg" name="uas" value="<?php if (!empty($_POST["uas"])) {
                                                                                                    echo $_POST["uas"];
                                                                                                }; ?>"></td>
            </tr>
            <tr>
                <td>Catatan Khusus</td>
                <td><br><input type="checkbox" name="catatan1" value="Kehadiran >= 70%">Kehadiran >= 70%</br>
                    <br><input type="checkbox" name="catatan2" value="interaktif dikelas">interaktif dikelas</br>
                    <br><input type="checkbox" name="catatan3" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas</br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-warning" name="input" value="simpan"></td>
            </tr>

        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['input'])) {

    if (isset($_POST['progdi'])) {
        $progdi = $_POST['progdi'];
    }
    if (isset($_POST['nim'])) {
        $nim = $_POST['nim'];
    }
    if (isset($_POST['nt'])) {
        $nt = $_POST['nt'];
    }
    if (isset($_POST['uts'])) {
        $uts = $_POST['uts'];
    }
    if (isset($_POST['uas'])) {
        $uas = $_POST['uas'];
    }

    $na = ($nt * 0.4) + ($uts * 0.3) + ($uas * 0.3);

?>
    <table border="1" cellpadding="10" align="center">
        <tr>
            <td bgcolor="black" style="color: white;">Program Studi</td>
            <td bgcolor="black" style="color: white;">NIM</td>
            <td bgcolor="black" style="color: white;">Nilai Akhir</td>
            <td bgcolor="black" style="color: white;">STATUS</td>
            <td bgcolor="black" style="color: white;">Catatan Khusus</td>

        </tr>
        <tr bgcolor="#A9A9A9">
            <td><?= $progdi ?></td>
            <td><?= $nim ?></td>
            <td><?= $na ?></td>
            <td><?php
                if ($na >= 60) {
                    echo "LULUS";
                } else {
                    echo "TIDAK LULUS";
                } ?></td>
            <td><?php
                if (isset($_POST['catatan1'])) {
                    echo "+ " . $_POST['catatan1'] . "<br>";
                }
                if (isset($_POST['catatan2'])) {
                    echo "+ " . $_POST['catatan2'] . "<br>";
                }
                if (isset($_POST['catatan3'])) {
                    echo "+ " . $_POST['catatan3'] . "<br>";
                } ?></td>
        </tr>
    </table>

<?php } ?>