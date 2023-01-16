@extends('layout')
@section('content')
@endsection

<body>
    <div class="kard">
        <div class="bg-1">
        </div>
            <label class="teks-ppdb">PPDB TAHUN PELAJARAN 2023-2024.</label>
            <div class="remope">
                <img class="remope" src="{{ asset('asset/img/remope.png') }}" alt="">
            </div>
            <header>
                <img class="smkwikrama" src="{{ asset('asset/img/wkwkwkwkwk.png') }}" alt="">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#persyaratan" class="active">Persyaratan</a></li>
                    <li><a href="#">Jurusan</a></li>
                    <li><a href="#">Testimoni</a></li>
                    <li><a href="#contact-us">Contact Person</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </header>
            <script type="text/javascript">
                window.addEventListener("scroll", function() {
                    var header = document.querySelector("header");
                    header.classList.toggle("sticky", window.scrollY > 0);
                })
            </script>
            <a href="/regist" class="btn btn-main-md shadow-md bordered">PENDAFTARAN PPDB</a>
    </div>
    <section id="persyaratan">
        <div class="container">
            <div class="containt">
            <h1 class="text-center"> PERSYARATAN PPDB </h1>
        </div>
            <div class="cards d-flex" style="gap: 20px 120px;">
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/book.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Foto Kopi Ktp</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/book.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Foto Kopi KK</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/book.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Foto Kopi Akta Kelahiran</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cards d-flex" style="gap: 20px 120px;">
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/paspoto.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Foto 3x4 Formal (Orang Tua)</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/paspotocw.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Scan Pdf Rapor</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/paspoto.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Foto 3x4 Formal (Calon Siswa)</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ct-2">
            <div class="cards d-flex" style="gap: 20px 120px;">
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/book.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Foto Kopi SKHUN Legalisir</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/book.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Scan Data (Bagi Luar Daerah)</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('asset/img/book.png') }}" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Foto Kopi ijazah Smp</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section class="px-0 py-5" style="background: #000" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title font-weight-bold text-white">Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <h5 class="text-white font-weight-bold">Kontak Pendaftaran</h5>
                    <div class="contact-text">
                        <p class="text-white">Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota
                            Bogor, Jawa Barat 16146
                            <br>prohumasi@smkwikrama.net
                        </p>
                        <p class="text-white mb-3">CS 1 : <a
                                style="text-decoration: underline !important; font-weight: bold !important"
                                href="https://wa.me/6281909242411">hubungi kami (klik disini)</a>
                            <br>CS 2 : <a style="text-decoration: underline !important; font-weight: bold !important"
                                href="https://wa.me/6281919242411">hubungi kami (klik disini)</a>
                        </p>
                        <br>
                        <a href="#" class="main-button">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="POST">
                            <input type="hidden" name="_token" value="CfPAkqF1yzPyRS7JaHjyasqfX2vmuhKdisRxUODD">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Nama Lengkap" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="no_wa" type="text" class="form-control" id="no_wa"
                                            required="" value="+62">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="Alamat Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Pesan" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Kirim
                                            Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-main bg-light px-0 pb-3 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-5 col-md-5 m-md-auto align-self-center">
                        <div class="block m-auto">
                            <a href=""><img src="{{ asset('asset/img/wkwkwkwkwk.png') }}" alt="footer-logo"
                                    width="120" class="ml-2"></a>
                            <ul class="social-icon list-inline pl-4">
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/school/smkwikramabogor/mycompany/"
                                        target="_blank" style="background-color: #8BC91E; color: #333"><i
                                            class="ti-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/smkwikrama/" target="_blank"
                                        style="background-color: #8BC91E; color: #333"><i
                                            class="ti-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-12 mt-sm-5 mt-3 mt-lg-0 pl-4 pl-md-0">
                        <div class="block-2">
                            <h6 class="text-dark">Tautan</h6>
                            <ul>
                                <li><a href="#" class="active">Beranda</a></li>
                                <li><a href="#">Jurusan</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Testimoni</a></li>
                                <li><a href="#">Hubungi Kami</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-7 mt-sm-5 mt-3 mt-lg-0 pl-4 pl-md-0">
                        <div class="block-2">
                            <h6 class="text-dark">Kontak Sekolah</h6>
                            <ul>
                                <li class="font-weight-bold">0251-8242411</li>
                                <li>Alamat<br>
                                    Jl. Raya Wangun<br>
                                    Kelurahan Sindangsari <br>
                                    Bogor Timur 16720</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center py-4 bg-light" style="border-top: 1px solid #5F6F94">
            <small class="text-secondary">Copyright ©
                <script>
                    document.write(new Date().getFullYear())
                </script>2022 SMK Wikrama
            </small>
        </div>
    </footer>
</body>
