<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Rekap Pembayaran</h4>
			<hr>

			<form action="admin.php?halaman=tabel-rekap" method="post" class="forms-sample">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputName1">Awal</label>
							<input required id="awal" type="date" class="form-control" id="exampleInputName1" placeholder="Name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputName1">Akhir</label>
							<input required id="akhir" type="date" class="form-control" id="exampleInputName1" placeholder="Name">
						</div>
					</div>

				</div>
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
				<a onclick="javascript:eraseText();" class="btn btn-light" href="">Hapus</a>
				<script type="text/javascript">
					function eraseText() 
					{
						document.getElementById("awal").value = "";
						document.getElementById("akhir").value = "";
					}
				</script>	
			</form>
		</div>
	</div>
</div>
