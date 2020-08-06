<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Jl. Glagahsari 46C Yogyakarta</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>informasi@alfabankjogja.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>0274-385997</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/contact/create" method="POST" role="form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" />
                </div>
                @error('nama')
                <div class="alert alert-danger">Nama harus diisi</div>
                @enderror
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                </div>
                @error('email')
                <div class="alert alert-danger">Email harus diisi</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subjek pesan" />
              </div>
              @error('subjek')
                <div class="alert alert-danger">Subjek harus diisi</div>
                @enderror
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan"></textarea>
              </div>
              @error('pesan')
                <div class="alert alert-danger">Pesan harus diisi</div>
                @enderror
              <div class="text-center"><button class="custom-button" type="submit">Submit</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
