<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading" style="background-color: #91BCFD;" ;>
                <p><b>ID : </b></p>
                <p><b>NAME : </b></p>
            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageRegistration">Pendaftaran Perkahwinan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/Incentive">Insentif Khas Pasangan Pengantin</a>
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
                        <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Insentif - Permohonan Baru</h3>
                        </div>
                        <!--Content of container-->

                        <div class="container">

                            <!-- Form encrypted as text -->
                            <form id="form-print" enctype="text/plain" class="form-control">
                                <div class="form-container">

                                    <div class="row">
                                        <div class="container-M3 col-10">
                                            <h3>Borang Permohonan Tuntutan Insentif Khas pasangan Pengantin (IKPP)</h3>
                                        </div>
                                    </div>



                                    <div class="container-M4">
                                        <h4>1. Maklumat Pemohon</h4>
                                    </div>

                                    <!-- Form for "Maklumat Pemohon" -->
                                    <form>
                                        <!-- Form for "Maklumat Pemohon" -->
                                        <div class="form-group">
                                            <label for="inputIC">No. Kad Pengenalan</label>
                                            <input type="number" class="form-control" id="inputIC" placeholder="Masukkan no. kad pengenalan">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnoPassport">No. Passport/Tentera/Polis</label>
                                            <input type="number" class="form-control" id="inputnoPassport" placeholder="Masukkan No. Passport/Tentera/Polis">
                                        </div>
                                        <div class="form-group">
                                            <label for="nobank">No. Akaun Bank</label>
                                            <input type="number" class="form-control" id="nobank" placeholder="Masukkan No. Akaun Bank">
                                        </div>
                                        <div class="form-group">
                                            <label for="bankname">Nama Bank</label>
                                            <input type="text" class="form-control" id="bankname" placeholder="Nama Bank">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">Nama Pemohon</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Masukkan nama pemohon">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Alamat Semasa</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPhone">No. Telefon</label>
                                            <input type="text" class="form-control" id="inputPhone" placeholder="Masukkan no. telefon">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputBirthdate">Tarikh Lahir</label>
                                            <input type="text" class="form-control" id="inputBirthdate" placeholder="Masukkan Tarikh Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputBirthplace">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="inputBirthplace" placeholder="Masukkan Tempat Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNasionality">Warganegara</label>
                                            <input type="text" class="form-control" id="inputNasionality" placeholder="Warganegara">
                                        </div>
                                </div>
                            </form>

                            <br>

                            <form id="form-print-2" enctype="text/plain" class="form-control">
                                <div class="form-container">
                                    <div class="container-M4">
                                        <h4>2. Maklumat Pasangan</h4>
                                    </div>

                                    <!-- Form for "Maklumat Pasangan" -->
                                    <div class="form-group">
                                        <label for="inputIC">No. Kad Pengenalan</label>
                                        <input type="number" class="form-control" id="inputIC" placeholder="Masukkan no. kad pengenalan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputnoPassport">No. Passport/Tentera/Polis</label>
                                        <input type="number" class="form-control" id="inputnoPassport" placeholder="Masukkan No. Passport/Tentera/Polis">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSpouseName">Nama Pasangan</label>
                                        <input type="text" class="form-control" id="inputSpouseName" placeholder="Masukkan nama pasangan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Alamat Semasa</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSpouseSalary">Pendapatan</label>
                                        <input type="int" class="form-control" id="inputSpouseSalary" placeholder="Pendapatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">No. Telefon</label>
                                        <input type="text" class="form-control" id="inputPhone" placeholder="Masukkan no. telefon">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBirthdate">Tarikh Lahir</label>
                                        <input type="text" class="form-control" id="inputBirthdate" placeholder="Masukkan Tarikh Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAge">Umur</label>
                                        <input type="text" class="form-control" id="inputAge" placeholder="Masukkan Umur">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBirthplace">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="inputBirthplace" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNasionality">Warganegara</label>
                                        <input type="text" class="form-control" id="inputNasionality" placeholder="Warganegara">
                                    </div>
                                </div>
                            </form>

                            <br>

                            <form id="form-print" enctype="text/plain" class="form-control">
                                <div class="container-M4">
                                    <h4>3. Maklumat Pekerjaan Pemohon</h4>
                                </div>

                                <!-- Form for "Maklumat Pekerjaan Pemohon" -->
                                <div class="form-container">
                                    <div class="form-group">
                                        <label for="inputJob">Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputJob" placeholder="Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJobType">Jenis Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputJobType" placeholder="Jenis Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSalary">Pendapatan</label>
                                        <input type="text" class="form-control" id="inputSalary" placeholder="Pendapatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmployerName">Nama Majikan</label>
                                        <input type="text" class="form-control" id="inputEmployerName" placeholder="Majikan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmployerAddress">Alamat Majikan</label>
                                        <input type="text" class="form-control" id="inputEmployerAddress" placeholder="Alamat Majikan">
                                    </div>
                                </div>

                            </form>

                            <br>

                            <form id="form-print" enctype="text/plain" class="form-control">
                                <div class="form-container">
                                    <div class="container-M4">
                                        <h4>4. Maklumat Waris Terdekat Yang Boleh Dihubungi</h4>
                                    </div>

                                    <!-- Form for "Maklumat Waris" -->

                                    <div class="form-group">
                                        <label for="inputRelativeName">Nama Waris</label>
                                        <input type="text" class="form-control" id="inputRelativeName" placeholder="Masukkan nama waris">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRelativeType">Hubungan</label>
                                        <input type="text" class="form-control" id="inputRelativeType" placeholder="Hubungan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRelativePhone">No. Telefon</label>
                                        <input type="text" class="form-control" id="inputRelativePhone" placeholder="Masukkan no. telefon waris">
                                    </div>

                                </div>
                            </form>

                            <br>

                            <form id="form-print" enctype="text/plain" class="form-control">
                                <div class="form-container">
                                    <div class="container-M4">
                                        <h4>5. Pengakuan Pemohon</h4>
                                    </div>

                                    <!-- Form for "Pengakuan Pemohon" -->
                                    <div class="declaration">
                                        <form>
                                            <h6>Saya, <input type="text" id="name" name="name" required> No.
                                                K/Pengenalan
                                                <input type="text" id="ic" name="IC" required> mengaku dengan nama
                                                Allah
                                                S.W.T bahawa saya telah bermastautin di Negeri Pahang lebih 10
                                                <strong>Tahun</strong> dan
                                                semua keterangan yang telah diberikan adalah benar. Pihak kerajaan
                                                Negeri Atau Jabatan Agama Islam Pahang berhak menolak permohonan
                                                saya
                                                ini sekiranya maklumat / keterangan yang diberikan Adalah
                                                <strong>TIDAK BENAR.</strong>
                                            </h6>
                                        </form>
                                    </div>

                                    <div class="date">
                                        <label for="inputApplicantDate">Tarikh</label>
                                        <input type="date" class="form-control" id="inputApplicantDate" placeholder="Masukkan Tarikh">
                                    </div>

                                </div>
                            </form>
                            <br>


                            <form id="upload-document" enctype="multipart/form-data" class="form-control">
                                <div class="form-container">
                                    <div class="container-M4">
                                        <h4>MUAT NAIK DOKUMEN</h4>
                                    </div>

                                    <!-- Form for "Pengakuan Pemohon" -->
                                    <div class="upload-document">
                                        <label for="document">Kad Pengenalan Pemohon (Depan & Belakang):</label>
                                        <input type="file" id="document" name="document" accept=".pdf">
                                        <label for="document">Penyata Akaun Bank Pemohon:</label>
                                        <input type="file" id="document" name="document" accept=".pdf">
                                        <h6>*FORMAT PDF SAHAJA</6>
                                    </div>
                                    <br>
                                    <!-- Add a submit button if needed -->
                                    <div class="form-group">
                                        <button type="submit">Upload</button>
                                    </div>
                                </div>
                            </form>

                            <br>

                            <!-- Add a hidden modal -->
                            <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="successModalLabel">Permohonan Incentif Dihantar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Permohonan insentif telah dihantar.
                                        </div>
                                        <div class="modal-footer">
                                            <a href="main-page.html" class="btn btn-primary">Kembali ke Laman Utama</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-container">
                                <input type="button" class="btn btn-primary" value="HANTAR" onclick="showSuccessModal()">
                                <input type="button" class="btn btn-primary" onclick="GeneratePdf();" value="CETAK">
                            </div>


                            <br>


                            <script>
                                function showSuccessModal() {
                                    $('#successModal').modal('show'); // Show the success modal
                                }
                                // Function to generate a single PDF with the contents of all forms with the ID 'form-print'
                                function GeneratePdf() {
                                    var forms = document.querySelectorAll('#form-print');
                                    var mergedContent = '';

                                    for (var i = 0; i < forms.length; i++) {
                                        var form = forms[i];
                                        mergedContent += form.innerHTML;
                                    }

                                    // Create a temporary element to hold the merged content
                                    var tempElement = document.createElement('div');
                                    tempElement.innerHTML = mergedContent;

                                    // Generate the PDF from the merged content
                                    html2pdf().from(tempElement).save();
                                }
                            </script>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>