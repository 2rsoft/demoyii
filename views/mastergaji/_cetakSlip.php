<?php

use app\helpers\StringHelper;
?>
<div style="text-align: center; margin-bottom: 25px;">
    SLIP GAJI
    <br>
    <b>PT. VWYXZ SUKSES MANDIRI PERKASA</b>
</div>

<table class="table table-bordered">
    <tr>
        <td>NAMA</td>
        <td><?= $model->getPegawai()->nama ?></td>
    </tr>
    <tr>
        <td>BULAN</td>
        <td><?= StringHelper::getBulanList()[$model->bulan] ?></td>
    </tr>
    <tr>
        <td>TAHUN</td>
        <td><?= $model->tahun ?></td>
    </tr>
    <tr>
        <td>GAJI POKOK</td>
        <td><?= StringHelper::formatRupiah($model->gaji_pokok) ?></td>
    </tr>
    <tr>
        <td>TUNJANGAN JABATAN</td>
        <td><?= StringHelper::formatRupiah($model->tunjangan_jabatan) ?></td>
    </tr>
    <tr>
        <td>TUNJANGAN KINERJA</td>
        <td><?= StringHelper::formatRupiah($model->tunjangan_kinerja) ?></td>
    </tr>
    <tr>
        <td>POT. BPJSKES</td>
        <td><?= StringHelper::formatRupiah($model->pot_bpjskes) ?></td>
    </tr>
    <tr>
        <td>POT. BJPSKET</td>
        <td><?= StringHelper::formatRupiah($model->pot_bpjsket) ?></td>
    </tr>
</table>

<div style="text-align: right;">
    PERUSAHAAN, <?= StringHelper::tanggal_indo($model->tanggal) ?>
    <br>
    <br>
    <br>
    TTD
</div>