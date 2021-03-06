 <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="admin-dashboard.html">Dashboard</a>
        <a href="admin-inbox.html">Inbox <span class="badge badge-danger">5</span></a>
        <a href="admin-sertifikasi.html">Sertifikasi</a>
        <a href="admin-program-kursus.html">Program Kursus</a>
        <a href="index.html">Keluar</a>
    </div>

    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Admin Panel</span>

        <div class="float-right">
            <span>Admin</span>
            <img src="assets/img/team/team-1.jpg" width="30" height="30" class="rounded-circle" alt="">
        </div>

        <div class="mt-3">
            <ul class="nav nav-tabs mb-5">
                <li class="nav-item">
                    <a class="nav-link active" href="admin-inbox.html">Inbox masuk <span class="badge badge-pill badge-danger">5</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-inbox-sudah-dibaca.html">Sudah dibaca</a>
                </li>
            </ul>

            <div class="card">
                <div class="media p-3">
                    <img class="rounded-circle" width="70" height="70" class="mr-1" src="assets/img/ava/avatar-02-512.webp"
                        alt="Generic placeholder image">
                    <div class="media-body pl-2">
                        <h5 class="my-0">Aji Syahroni</h5>
                        <i>ajisyahroni@gmail.com</i> | 5 july
                        <h5 class="my-0"><span class="badge badge-pill badge-info">cooperation</span></h5>

                        <p class="mt-2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                        <a href="#" class="btn btn-sm btn-outline-success float-right">tandai sudah dibaca</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/dashboard.js"></script>