<div class="mx-auto">
	<div id="content" class="container">
		<div class="row-md">
			<div class="col-md mt-md-5">
				<button class="px-md-5 btn btn-warning btn-lg" data-toggle="modal" data-target="#formTambah" style="color: white; ">Tambah</button>
				<button class="btn btn-light btn-lg float-right px-md-5 mx-md-2">Filter By</button>
				<button class="btn btn-light btn-lg float-right px-md-5 mx-md-2">Vidio</button>
				<button class="btn btn-success btn-lg float-right px-md-5 mx-md-2" style="color: white; ">Foto</button>
			</div>
		</div>
		<div class="row offset-4">
			<div class="col mt-md-5">
				<div class="col">
					<button class="btn btn-success mx-md-2" style="color: white; ">All</button>
					<button class="btn btn-light mx-md-2">Jalan Tol</button>
					<button class="btn btn-light mx-md-2">Jembatan</button>
					<button class="btn btn-light mx-md-2">Underpass</button>
				</div>
			</div>
		</div>
		<!-- IMAGE CARD START -->
		<div class="row mt-4">
			<div class="col-md-3" id="card" data-target="#modalIMG" data-toggle="modal">
				<div class=" card" style="border:0px;">
					<img src=" assets/image/pemanasanglobal.jpg" class="rounded card-img-top">
					<div class=" card-body">
						<div class=" d-flex">
							<h5 class="mr-auto"><b>Pak Budi</b></h5>
							<div>5 days ago</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3" id="card" data-target="#modalIMG" data-toggle="modal">
				<div class=" card" style="border:0px;">
					<img src=" assets/image/pemanasanglobal.jpg" class="rounded card-img-top">
					<div class=" card-body">
						<div class=" d-flex">
							<h5 class="mr-auto"><b>Pak Budi</b></h5>
							<div>5 days ago</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3" id="card" data-target="#modalIMG" data-toggle="modal">
				<div class=" card" style="border:0px;">
					<img src=" assets/image/pemanasanglobal.jpg" class="rounded card-img-top">
					<div class=" card-body">
						<div class=" d-flex">
							<h5 class="mr-auto"><b>Pak Budi</b></h5>
							<div>5 days ago</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3" id="card" data-target="#modalIMG" data-toggle="modal">
				<div class=" card" style="border:0px;">
					<img src=" assets/image/pemanasanglobal.jpg" class="rounded card-img-top">
					<div class=" card-body">
						<div class=" d-flex">
							<h5 class="mr-auto"><b>Pak Budi</b></h5>
							<div>5 days ago</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- IMAGE CARD END -->
</div>

<!-- Modal Tambah-->
<div class="modal fade bd-tambah-modal-lg" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="row">
					<div class="col-md-6">
						<h4 class="modal-title" id="exampleModalLongTitle">Opload File</h4>
						<div id="container">
							<div class="col">
								<div class="rwo">
									<i class="fa fa-cloud-upload" aria-hidden="true"></i>
								</div>
								<div class="row">
									Drope File Document Here
								</div>
								<div class="row">
									<button class="btn btn-primary btn-lg px-5">Browse</button>
								</div>
							</div>
						</div>
					</div class="col">
					<div id="verticalLine"></div>
					<div class="col-md ml-auto mr-auto" style="width: 100%;">
						<div class="row my-3">
							<div class="col mx-2" style="background-color: grey;">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Pariatur nobis tempore officiis totam laboriosam soluta recusandae,
								dolores ipsa molestias iste velit similique quasi!
								Et architecto ut repudiandae, dolorem sunt earum.
							</div>
						</div>
						<div class="col" style="max-width: 100%;">
							<img src="assets/image/pemanasanglobal.jpg" class="rounded" style="max-width: 100%;">
						</div>
						<div class="col mt-3" style="max-width: 100%;">
							<div class="input-group" style="background-color: gray;">
								<select class="custom-select" id="selectTag">
									<option selected>Pilih tag</option>
									<option value="1">Jalan Tol</option>
									<option value="2">Jembatan</option>
									<option value="3">Underpass</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-row-reverse mb-3 ml-3">
				<button type="button" class="btn btn-light px-5 mx-3 float-right" data-dismiss="modal" style="color: white; font-weight:bold;">Batal</button>
				<button type="button" class="btn btn-warning px-5 float-right" style="color: white; font-weight:bold;">Simpan</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Detail -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">

				<button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<div class="row">
					<div class="col-6">
						<img src="assets/image/pemanasanglobal.jpg" class="rounded mx-auto d-block" style="width:100%; max-width: 300px; min-height: 500px;" alt="< 1/10 >">
					</div>
					<div id="verticalLine">

					</div>

					<div class="col ">
						<div class="row ml-auto">
							<div class="col">
								<div class="">
									<h3>Pak Budi</h3>
								</div>
								<div class="">
									<h5 style="color: #F9D461; font-weight:bold;">Kontraktor</h5>
								</div>
							</div>
							<div class="col">
								<div class="d-flex flex-row-reverse mt-50">
									<div class="dropdown">
										<h4 style="font-weight: bolder;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											•••
										</h4>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Edit</a>
											<a class="dropdown-item" href="#">Hapus</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mx-auto">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Similique, ab ipsam autem tempore, fuga corporis impedit,
							quos eius voluptas aliquid nisi mollitia sunt ut possimus
							doloribus exercitationem. Aspernatur, doloremque! Odit?
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Similique, ab ipsam autem tempore, fuga corporis impedit,
							quos eius voluptas aliquid nisi mollitia sunt ut possimus
							doloribus exercitationem. Aspernatur, doloremque! Odit?<br>
							<br>
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Similique, ab ipsam autem tempore, fuga corporis impedit,
							quos eius voluptas aliquid nisi mollitia sunt ut possimus
							doloribus exercitationem. Aspernatur, doloremque! Odit?
							<br>
							<br>
							<p style="color: #F9D461; font-weight:500;">20 JULI 2020</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
