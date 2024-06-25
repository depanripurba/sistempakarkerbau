<?php
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?= base_url('assets/img/icon.png') ?>" type="image/x-icon" />
    <title>Laporan Hasil Diagnosa</title>
    <style>
        .heading {
            border-bottom: 3px solid black;
            margin-top: -20px;
        }
    </style>
</head>

<body>
    <div class="heading">
        <img width="100px" src="<?= base_url('assets/img/logo.png') ?>" alt="">
        <div>
            <center style="margin-top:-100px">
                <h4 class="text-center">DINAS PERKEBUNAN DAN PETERNAKAN PROVINSI</h4>
                <h4 style="margin-top:-20px" class="text-center">SUMATERA UTARA</h4>
                <p style="font-size: 12px;margin-top:-15px">Jl. Jenderal Besar A.H Nasution No. 221 Pangkalan Mansyur, Kec. Medan Johor Kota Medan</p>
                <p style="font-size: 12px;margin-top:-10px">Sumatera Utara</p>
            </center>

        </div>
    </div>
    <div>
        <center>
            <h4>
                Hasil Diagnosa Penyakit Septicemia Epizootica Pada Kerbau Dengan <br /> Menggunakan Metode Teorema Bayes
            </h4>
        </center>
    </div>
    <div>
        <table>
            <tbody>
                <tr>
                    <td><small><i>Identitas</i></small></td>
                </tr>
                <tr>
                    <td>Nama Pendiagnosa</td>
                    <td>:</td>
                    <td><?= $_SESSION['hasildiagnosa']['nama'] ?></td>
                </tr>
                <tr>
                    <td>Nomor Hp</td>
                    <td>:</td>
                    <td><?= $_SESSION['hasildiagnosa']['no_hp'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $_SESSION['hasildiagnosa']['alamat'] ?></td>
                </tr>
                <br>
                <tr>
                    <td><small><i>Hasil Diagnosa</i></small></td>
                </tr>
                <tr>
                    <td valign="top">Gejala Yang Dipilih</td>
                    <td valign="top">:</td>
                    <td valign="top">
                        <ul style="margin-top: -10px; margin-left:-10px">
                            <?php foreach ($_SESSION['hasildiagnosa']['gejalacentang'] as $d) : ?>
                                <li>
                                    <?= $d->kode_gejala ?>=><?= $d->nama_gejala ?>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Penyakit</td>
                    <td>:</td>
                    <td><?= $_SESSION['hasildiagnosa']['namapenyakit'] ?></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td><?= $_SESSION['hasildiagnosa']['nilaipeluang'] ?> || <?= $_SESSION['hasildiagnosa']['persenpeluang'] ?>%</td>
                </tr>
                <tr>
                    <td valign="top">Solusi</td>
                    <td valign="top">:</td>
                    <td valign="top">
                        <ul style="margin-top: -1px;margin-left:-10px">
                            <?php
                            $solusi = $_SESSION['hasildiagnosa']['solusi'];
                            $solusiArr = explode("-", $solusi);

                            for ($i = 1; $i < count($solusiArr); $i++) {
                                echo "<li>" . $solusiArr[$i] . "</li>";
                            }
                            ?>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div style="width: 300px;margin-left:400px;">
        <center>
            <p>Medan, <?= date("j F, Y, H:i:s"); ?></p>
            <p style="margin-top: -15px;">Administrator</p>
            <br><br>

            <p><b>(Drh. Lia Ayu Brutu)</b></p>
        </center>
    </div>
</body>

</html>