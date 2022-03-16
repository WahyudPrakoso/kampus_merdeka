<!DOCTYPE html>
<html>
<head>
	<title>Tugas PHP | Tugas 1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<?php 
	$namaPegawai = 'Ahmad Sopandi';
	$agama = 'Islam';
	$jabatan = 'Manager';
	$status = 'Menikah';
	$jmlAnak = '4';
	switch ($jabatan) {
		case 'Manager':
		$gaji = 20000000;
		break;
		case 'Asisten':
		$gaji = 15000000;
		break;
		case 'Kabag':
		$gaji = 10000000;
		break;
		case 'Staff':
		$gaji = 4000000;
		break;
		default:
		$gaji = 0;
		break;
	}

	$tunjab = 0.2 * $gaji;
	if ($status = 'Menikah') {
		if ($jmlAnak < 3) {
			$tunjanganKeluarga = 0.05 * $gaji;
		}
		elseif($jmlAnak < 5){
			$tunjanganKeluarga = 0.1 * $gaji;
		}
		else{
			$tunjanganKeluarga = 0;
		}
	}else{
		$tunjanganKeluarga = 0;
	}

	$gajiKotor = $tunjanganKeluarga + $tunjab + $gaji;

	$zakat = ($agama == 'Islam' && $gajiKotor >= 6000000) ? 0.025 * $gajiKotor : 0;

	$takehomePay = $gajiKotor - $zakat;
	?>
	<div class="">
		<h2 align="center" class="mt-4">Data Pegawai</h2>
		<table class="table table-striped table-warning mt-4" align="center" style="max-width: 600px;">
			<tr>
				<td>Nama Pegawai</td>
				<td width="5%">:</td>
				<td><?=$namaPegawai?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><?=$jabatan?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><?=$agama?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td><?=$status?></td>
			</tr>
			<tr>
				<td>Jumlah Anak</td>
				<td>:</td>
				<td><?=$jmlAnak?></td>
			</tr>
			<tr>
				<td>Gaji Bersih</td>
				<td>:</td>
				<td align="right"><?='Rp. '.number_format($gaji);?></td>
			</tr>
			<tr>
				<td>Tunjangan Jabatan</td>
				<td>:</td>
				<td align="right"><?='Rp. '.number_format($tunjab);?></td>
			</tr>
			<tr>
				<td>Tunjangan Keluarga</td>
				<td>:</td>
				<td align="right"><?='Rp. '.number_format($tunjanganKeluarga);?></td>
			</tr>
			<tr>
				<td>Gaji Kotor</td>
				<td>:</td>
				<td align="right"><?='Rp. '.number_format($gajiKotor);?></td>
			</tr>
			<tr>
				<td>Zakat</td>
				<td>:</td>
				<td align="right"><?='Rp. '.number_format($zakat);?></td>
			</tr>
			<tr>
				<td>Takehome Pay</td>
				<td>:</td>
				<td align="right"><?='Rp. '.number_format($takehomePay);?></td>
			</tr>
		</table>
	</div>

</body>
</html>