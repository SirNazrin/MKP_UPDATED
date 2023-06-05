<body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading" style="background-color: #91BCFD;";>
                    <p><b>ID : </b></p>
                    <p><b>NAME : </b></p>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageRegistration">Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Incentive">Insentif Khas Pasangan Pengantin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar-keluar" href="<?= BASEURL; ?>/LogIn/">Keluar</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="body-content">

                    <!--Padding Between Container Contents & Homepage-->
                    <div style="padding: 20px">
                        <!--Content Container-->
                        <div class="container-M1" style="background-color: #C7DDFE;">
                            <diV style="background-color:#152C7C; color: white;">
                            <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Khidmat Nasihat</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                                <a class="btn btn-primary"  style="float: right; margin-right: 10px;" href="<?= BASEURL ?>/Home" role="button">Kembali</a>
                            <div >
                                <div class="container mt-5">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h6><b>Maklumat Suami</b></h6>
                                        </div>
                                        <div class="col">
                                            <h6><b>Maklumat Isteri</b></h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h6>Name : </h6>
                                        </div>
                                        <div class="col">
                                            <h6>Name : </h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h6>No. Kad Pengenalan : </h6>
                                        </div>
                                        <div class="col">
                                            <h6>No. Kad Pengenalan : </h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h6>No. Telefon Bimbit : </h6>
                                        </div>
                                        <div class="col">
                                            <h6>No. Telefon Bimbit : </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="container" style = "padding: 20px">
                                <a class="btn btn-primary"  style="margin-bottom: 8px; float: right;" href="<?= BASEURL ?>/Consultation/ApplyConsult" role="button">Permohonan Baru</a>
                                    <h6><b>Sejarah Permohonan</b></h6>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-dark">
                                            <th class = "w-10" scope="col">Bil</th>
                                            <th class = "w-25" scope="col">No.Slip Permohonan</th>
                                            <th class = "w-20" scope="col">Tarikh Mohon</th>
                                            <th class = "w-25" scope="col">Status</th>
                                            <th class = "w-20" scope="col">Operasi</th>
                                            <th class = "w-20" scope="col">Pilih Cara</th>
                                            <th class = "w-20" scope="col">Ulasan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light">
                                                <th scope="row">-</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="text-center">
                                                    <a class="btn" href="<?= BASEURL ?>/Consultation/ApplyConsult" role="button">
                                                        <img src="<?= BASEURL ?>/img/ViewIcon.png" alt="Melihat Permohonan">
                                                    </a>
                                                    <a class="btn" href="<?= BASEURL ?>/Consultation/ApplyConsult" role="button">
                                                        <img src="<?= BASEURL ?>/img/EditIcon.png" alt="Kemaskini Permohonan">
                                                    </a>
                                                    <a class="btn" href="<?= BASEURL ?>/Consultation/ApplyConsult" role="button">
                                                        <img src="<?= BASEURL ?>/img/DeleteIcon.png" alt="Hapus Permohonan">
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn" href="<?= BASEURL ?>/Consultation/ApplyConsultExtension" role="button">
                                                        <img src="<?= BASEURL ?>/img/CalendarIcon.png" alt="Memilih Tarikh">
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn" href="<?= BASEURL ?>/Consultation/ApplyConsult" role="button">
                                                        <img src="<?= BASEURL ?>/img/ReviewIcon.png" alt="Melihat Ulasan">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </diV>
                    </div>
                </div>
            </div>
        </div>
</body>