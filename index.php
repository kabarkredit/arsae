<?php 
$url='http://finance.detik.com/read/2014/09/24/104509/2699424/4/mampu-bikin-pesawat-terbang-pekerja-ri-diklaim-lebih-unggul-di-asean?f9911013';
$data=file_get_contents($url);
//echo $data;

$awal='<div class="text_detail">';
$akhir='</div>';

$isi=explode($awal, $data);
$isi2=explode($akhir, $isi[1]);

$hasil=$isi2[0];

echo $hasil;
?>
