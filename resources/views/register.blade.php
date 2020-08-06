@extends('layouts/master')
@section('konten')
<section id="register" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Register Form</h2>
                <h3>let's fill this<span>form</span></h3>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12 mt-5 mt-lg-0">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form action="/user/create" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan nama lengkap" />
                            </div>
                            @error('nama')
                            <div class="alert alert-danger">Nama harus diisi</div>
                            @enderror
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" />
                            </div>
                            @error('email')
                            <div class="alert alert-danger">Email harus diisi</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" name="telepon" id="phone"
                                placeholder="gunakan format 62" />
                        </div>
                        @error('telepon')
                        <div class="alert alert-danger">Telepon harus diisi</div>
                        @enderror
                        <div class="form-group">
                            <input type="date" class="form-control" name="tanggal_lahir" id="subject"
                                placeholder="Tanggal lahir" />
                        </div>
                        @error('tanggal_lahir')
                            <div class="alert alert-danger">Tanggal lahir harus diisi</div>
                            @enderror
                        <div class="form-group">
                            <textarea class="form-control" name="alamat" rows="5"
                                placeholder="Alamat lengkap"></textarea>
                        </div>
                        @error('alamat')
                        <div class="alert alert-danger">Alamat harus diisi</div>
                        @enderror
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        @error('gender')
                        <div class="alert alert-danger">Gender harus diisi</div>
                        @enderror
                        <div class="form-group">
                            <label for="religion">Agama</label>
                            <select class="form-control" id="religion" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                        @error('agama')
                        <div class="alert alert-danger">Agama harus diisi</div>
                        @enderror
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Masukkan password" />
                        </div>
                        @error('password')
                        <div class="alert alert-danger">Password harus diisi</div>
                        @enderror
                        <div class="text-center">
                            <a class="mb-4" href="user-login.html">sudah mendaftar, login disini</a>
                            <br>
                            <button class="custom-button mt-2" type="submit">Submit</button>

                        </div>
                    </form>
                </div>
    </section>
    </main>



    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Tempo</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Tempo</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->
    @endsection