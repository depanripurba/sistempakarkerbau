<?php
date_default_timezone_set('Asia/Jakarta');
?>

<head>
    <style>
        table tr td {
            padding: 7;
        }

        .bungkus {
            display: block;
            margin: auto;
            width: 900px;
        }
    </style>
</head>
<div>
    <center>
        <h3>LAPORAN HASIL RIWAYAT KONSULTASI</h3>
    </center>
    <p style="margin-left:700px;width:300px">Tanggal Cetak : <?= date("j F, Y, H:i:s"); ?></p>
    <div class="bungkus">
        <table style="width: 900px;" border="1px" cellspacing="0">
            <thead>
                <tr>
                    <th cle>Nomor</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Nama Penyakit</th>
                    <th>Nilai Probabilitas</th>
                    <th>Tanggal Konsultasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($riwayat as $item) : ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $item->nama ?></td>
                        <td><?= $item->no_hp ?></td>
                        <td><?= $item->alamat ?></td>
                        <td><?= $item->nama_penyakit ?></td>
                        <td><?= $item->hasil_konsultasi ?></td>
                        <td><?= $item->tanggal_konsultasi ?></td>
                    </tr>
                    <?php $nomor++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div>
        <p>Mengetahui <br> Dokter Hewan</p>
        <br><br><br>
        <p>Drh. Lia Ayu Brutu</p>
    </div>
</div>