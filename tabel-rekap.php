
<?php
include 'koneksi.php';
if(isset($_REQUEST['submit'])){
	$submit = $_REQUEST['submit'];
	$tgl1 = $_REQUEST['tgl1'];
	$tgl2 = $_REQUEST['tgl2'];

         //echo $tgl1.'-'.$tgl2;
	$q = "SELECT kelas,sum(jumlah) FROM pembayaran WHERE tgl_bayar BETWEEN '$tgl1' AND '$tgl2' GROUP BY kelas";
	echo '<a class="noprint pull-right btn btn-default" onclick="fnCetak()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</a>';

} else {
	$tgl = date("Y/m/d");
	$q = "SELECT kelas,sum(jumlah) FROM pembayaran WHERE tgl_bayar='$tgl' GROUP BY kelas";
}
$sql = mysqli_query($koneksi,$q);
?>
<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Rekap Pembayaran </h4>
			<hr>
			<table   class="table table-bordered">
				<tr class="table-success">
					<td>No</td>
					<td>Kelas</td>
					<td>Jumlah</td>
				</tr>
				<?php
				$total = 0;
				$no=1;
				while(list($kls,$jml) = mysqli_fetch_array($sql)){
					echo '<tr><td>'.$no.'</td><td>'.$kls.'</td><td><span class="pull-right">'.$jml.'</span></td></tr>';
					$total += $jml;
					$no++;
				}

				echo '<tr><td colspan="2"><span class="pull-right">T O T A L</span></td><td><span class="pull-right">'.$total.'</span></td></tr>';
				echo '</table>';
				echo '</div></div>';
				?>
			</table>
		</div>
	</div>
</div>

