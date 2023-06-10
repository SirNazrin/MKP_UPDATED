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
                            <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">INSENTIF</h3> <!--Content Header-->
                            </div>
                            <a class="btn btn-primary"  style="float: right; margin-right: 10px;" href="<?= BASEURL ?>/Incentive" role="button">Kembali</a>
                                <div class="container" style = "padding: 20px">
                                
                                    <h6><b>Sejarah Permohonan Insentif</b></h6>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-dark">
                                            <th class = "w-10" scope="col">Bil</th>
                                            <th class = "w-25" scope="col">No.Slip Permohonan</th>
                                            <th class = "w-20" scope="col">Tarikh Mohon</th>
                                            <th class = "w-25" scope="col">Status</th>
                                            <th class = "w-20" scope="col">Operasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light">
                                                <th scope="row">-</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="text-center">
                                                    <a class="btn" href="<?= BASEURL ?>/Incentive/UserIncentiveMainPage" role="button">
                                                        <img src="<?= BASEURL ?>/img/ViewIcon.png" alt="Melihat Permohonan">
                                                    </a>
                                                    <a class="btn" href="<?= BASEURL ?>/Incentive/IncentiveMainPage" role="button">
                                                        <img src="<?= BASEURL ?>/img/EditIcon.png" alt="Kemaskini Permohonan">
                                                    </a>
                                                    <a class="btn" href="<?= BASEURL ?>/Incentive/IncentiveMainPage" role="button">
                                                        <img src="<?= BASEURL ?>/img/DeleteIcon.png" alt="Hapus Permohonan">
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