<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="Shortcut icon" href="assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pasar Lokal UMKM Suara">
    <meta name="keywords" content="Suara, UMKM, SuaraUMKM">
    <title>Suara UMKM - Formulir Pendaftaran</title>
    <script src="assets/js/bootstrap.bundle.min.js?<?= time() ?>"></script>
    <link href="assets/css/bootstrap.min.css?<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css?<?= time() ?>" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>



<body>

<nav class="navbar navbar-expand-sm navbar-dark fixed-top" aria-label="Ninth navbar example">
    <div class="container-xl">
      <a class="navbar-brand" href="#">Suara UMKM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="nav-umkm">
      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" target="_blank" href="index.php#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="index.php#tentang">TENTANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="index.php#artikel">ARTIKEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="index.php#kontak">KONTAK</a>
          </li>
        </ul>
      </div>
      </div>
    </div>
  </nav>

    <div id="register" class="container-fluid">
            <img src="assets/images/form-pasarlokal2.svg" alt="Lembar Pendaftaran" width="1557px" height="298px" class="form-pasarlokal" />            
        <div class="container">

                <div class="judul-form col-sm-10">
                  <div class="">DATA DIRI</div>
                </div>

            <form action="register_act.php" class="d-flex justify-content-center row g-3 needs-validation" novalidate>
                <small class="d-flex justify-content-center">(*) Wajib Diisi</small>

                <div class="col-md-10">
                    <label for="validationCustom01" class="form-label">Nama Lengkap*</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Lengkap" required>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                        Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom02" class="form-label">Jenis Kelamin*</label>
                     <select class="form-select" id="validationCustom02" class="form-control" required>
                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                     </select>
                     <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                        Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom03" class="form-label">No. KTP*</label>
                    <div class="input-group has-validation">
                        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" 
                    minlength="16" maxlength = "16" min="1000000000000000" max="9999999999999999" class="form-control" id="validationCustom03" placeholder="No. KTP (16 Digit)" required>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                     Belum Diisi / No. KTP Sudah Digunakan / Harus 16 Digit
                    </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom04" class="form-label">No. Handphone*</label>
                    <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" 
                    minlength="10" maxlength = "13" min="100000000"class="form-control" id="validationCustom04" placeholder="08123456789" required>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                        Belum Diisi / No. Telepon Sudah Digunakan / Minimal 10 Digit
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom05" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="validationCustom05" placeholder="email@gmail.com" required>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                        Belum Diisi / Email Sudah Digunakan
                    </div>
                </div>

                <div class="col-md-10">
                    <label for="validationCustom06" class="form-label">Alamat Rumah*</label>
                    <textarea class="form-control" id="validationCustom06" placeholder="Alamat Rumah" minlength="10" required rows="5"></textarea>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi / Minimal 10 Karakter
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom07" class="form-label">Provinsi*</label>
                     <select class="form-select" id="validationCustom07" class="form-control" required>
                        <option selected disabled value="">Pilih Provinsi</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                     </select>
                     <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom08" class="form-label">Kota*</label>
                     <select class="form-select" id="validationCustom08" class="form-control" required>
                        <option selected disabled value="">Pilih Kota</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                     </select>
                     <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom09" class="form-label">Kecamatan*</label>
                     <select class="form-select" id="validationCustom09" class="form-control" required>
                        <option selected disabled value="">Pilih Kecamatan</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                     </select>
                     <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom10" class="form-label">Kelurahan / Desa*</label>
                     <select class="form-select" id="validationCustom10" class="form-control" required>
                        <option selected disabled value="">Pilih Kelurahan / Desa</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                     </select>
                     <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="judul-form col-sm-10">
                  <div class="">DATA USAHA</div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom11" class="form-label">Nama Usaha*</label>
                    <input type="text" class="form-control" id="validationCustom11" placeholder="Nama Usaha" required>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom12" class="form-label">Alamat Usaha*</label>
                    <textarea class="form-control" id="validationCustom12" placeholder="Alamat Usaha" minlength="10" required rows="5"></textarea>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                        Belum Diisi / Minimal 10 Karakter
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom13" class="form-label">Jenis Kategori Usaha*</label>
                     <select class="form-select" id="validationCustom13" class="form-control" required>
                        <option selected disabled value="">Pilih Jenis Kategori Usaha</option>
                        <option>Rumah</option>
                        <option>Booth</option>
                        <option>Kafe / Warung</option>
                        <option>Rumah Makan / Restoran</option>
                        <option>E-Commerce / Online</option>
                     </select>                    
                     <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom14" class="form-label">Omzet Per Tahun*</label>
                    <select class="form-select" id="validationCustom14" class="form-control" required>
                        <option selected disabled value="">Pilih Omzet</option>
                        <option>Dibawah Rp 2 Milyar</option>
                        <option>Diatas Rp 2 Milyar s.d Rp 15 Milyar</option>
                        <option>Diatas Rp 15 Milyar s.d Rp 50 Milyar</option>
                     </select>  
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom15" class="form-label">Bentuk Badan Usaha*</label>
                    <select class="form-select" id="validationCustom15" class="form-control" required>
                        <option selected disabled value="">Bentuk Badan Usaha</option>
                        <option>PT.</option>
                        <option>CV.</option>
                        <option>UD.</option>
                        <option>Yayasan</option>
                        <option>Koperasi</option>
                        <option>PP.</option>
                        <option>Kementerian</option>
                        <option>BUMADES (Badan Usaha Milik Antar Desa)</option>
                        <option>BUMDES (Badan Usaha Milik Desa)</option>
                        <option>Firma</option>
                        <option>Kelompok Usaha</option>
                        <option>Perseorangan</option>


                     </select> 
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom16" class="form-label">Jumlah Karyawan</label>
                    <input type="number" class="form-control" id="validationCustom16" placeholder="Jumlah Karyawan">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-10">
                    <label for="validationCustom17" class="form-label">Tahun Awal Usaha*</label>
                    <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" 
                    minlength="4" maxlength = "4" min="1900"max="2022" class="form-control" id="validationCustom17" placeholder="Berdasarkan Tahun Legalitas" required>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-10">
                    <label for="validationCustom18" class="form-label">Jumlah Produk Dalam Usaha</label>
                    <input type="number" class="form-control" id="validationCustom18" placeholder="Jumlah Produk Dalam Usaha">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                        Data Belum Diisi
                    </div>
                </div>

                <div class="col-md-10">
                    <label for="validationCustom19" class="form-label">Cerita dan Rencana Usaha Anda*</label>
                    <textarea class="form-control" id="validationCustom19" placeholder="Cerita dan Rencana Usaha Anda" required rows="5"></textarea>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-10">
                    <label for="validationCustom20" class="form-label">Dokumen Usaha SIUP, PIRT dan atau dokumen lain*</label>
                    <input type="file" class="form-control" id="validationCustom20" placeholder="Dokumen Usaha" required>
                    <small>Dokumen Usaha SIUP, PIRT</small>
                    <br>
                    <br>
                    <input type="file" class="form-control" id="validationCustom21" placeholder="Dokumen Usaha">
                    <input type="file" class="form-control" id="validationCustom22" placeholder="Dokumen Usaha">
                    <small>Dokumen Lainnya</small>
                    <br>
                    <small>* Ukuran maksimum 10 MB, Tipe file jpg, jpeg, png, pdf</small>
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Minimal 1 Dokumen
                    </div>
                </div>                

                <div class="judul-form col-sm-10">
                  <div class="">SOCIAL MEDIA</div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom21" class="form-label">Facebook</label>
                    <input type="url" class="form-control" id="validationCustom23" placeholder="https://www.facebook.com/suaradotcom">
                        <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom22" class="form-label">Twitter</label>
                    <input type="text" class="form-control" id="validationCustom24" placeholder="https://www.twitter.com/suaradotcom">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom23" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="validationCustom25" placeholder="https://www.instagram.com/suaradotcom">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>
                
                <div class="col-md-5">
                    <label for="validationCustom24" class="form-label">Youtube</label>
                    <input type="text" class="form-control" id="validationCustom26" placeholder="https://www.youtube.com/suaradotcom">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="judul-form col-sm-10">
                  <div class="">E-COMMERCE</div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom25" class="form-label">Tokopedia</label>
                    <input type="url" class="form-control" id="validationCustom27" placeholder="https://www.tokopedia.com/suaradotcom">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom26" class="form-label">Shopee</label>
                    <input type="url" class="form-control" id="validationCustom28" placeholder="https://www.shopee.com/suaradotcom">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="validationCustom27" class="form-label">Bukalapak</label>
                    <input type="url" class="form-control" id="validationCustom29" placeholder="https://www.bukalapak.com/suaradotcom">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>
                
                <div class="col-md-5">
                    <label for="validationCustom28" class="form-label">Lainnya</label>
                    <input type="url" class="form-control" id="validationCustom30" placeholder="https://www.websiteanda.com/suaradotcom">
                    <div class="valid-feedback">
                        Berhasil
                    </div>
                    <div class="invalid-feedback">
                         Belum Diisi
                    </div>
                </div>

                <div class="col-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Seluruh data yang didaftarkan dapat dipertanggung jawabkan oleh Peserta
                        </label>
                        <label class="form-check-label text-secondary" for="invalidCheck">
                            <small>Arkadia Digital Media tidak akan menyebarluaskan data yang telah diberikan kepada pihak lain dan hanya digunakan selama penyelenggaraan Program Pasar Lokal Suara UMKM</small>
                        </label>
                        <div class="invalid-feedback">
                            Anda harus setuju sebelum data dikirim.
                        </div>
                    </div>
                </div>
                <div class="col-10 text-center daftar">
                    <button class="mb-5 button-kirim" type="submit" onclick="setTimeout(check, 1000);">DAFTAR</button>
                    <a href="javascript:window.open('','_self').close();">
                    <button class="mb-5 button-batal" type="button">KEMBALI</button>
                    </a>
                </div>
            </form>
        </div>
    </div>


    <div class="copyright">
        <p>© 2022 suara.com - All Rights Reserved.</p>
    </div>

    <script>
        function check() {
        swal({
                title: "Gagal!",
                text: "Data Masih Belum Lengkap",
                icon: "error",
                button: true
            });
        }
    </script>


    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>