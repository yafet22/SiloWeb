<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Siselo</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/dashboard-silo.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/logo.png" alt="Dashboard Silo">
                  <span class="d-none d-md-inline ml-1">Admin Selo</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Ketik Untuk Mencari...." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">
                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ url('blog-posting') }}">
                  <i class="material-icons">vertical_split</i>
                  <span>Semua Postingan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add-new-post.html">
                  <i class="material-icons">note_add</i>
                  <span>Tambah Postingan Baru</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="user-profile.html">
                  <i class="material-icons">person</i>
                  <span>Profile Pengguna</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Ketik Untuk Mencari...." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <span class="badge badge-pill badge-danger">2</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Pengguna Baru</span>
                        <p>Yafet Trakan Tangkuman | 081254026142</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Pengguna Baru</span>
                        <p>Agung Prio Rismawan | 081254026142</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> Lihat Semua Notifikaasi </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="images/yuri.png" alt="User Avatar">
                    <span class="d-none d-md-inline-block">Yuri Chandra Triputra</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile.html">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item" href="blog-posting.html">
                      <i class="material-icons">vertical_split</i> Semua Postingan</a>
                    <a class="dropdown-item" href="add-new-post.html">
                      <i class="material-icons">note_add</i> tambah Postingan baru</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tampilan Awal</span>
                <h3 class="page-title">Tampilan Keseluruhan</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Jumlah Postingan</span>
                        <h6 class="stats-small__value count my-3">90</h6>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Jumlah Komentar</span>
                        <h6 class="stats-small__value count my-3">182</h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Jumlah Pengguna</span>
                        <h6 class="stats-small__value count my-3">{{ $numberofusers }}</h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Jumlah Admin</span>
                        <h6 class="stats-small__value count my-3">5</h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Small Stats Blocks -->
            <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Pendaftar anggota baru</h6>
                  </div>
                  <div class="card-body p-0">
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/yuri.png" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">Makrifah amin</a>
                          <span class="text-muted">– 3 hari Yang Lalu</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">081254026142</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Aktifkan </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Hapus </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/yuri.png" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">Makrifah amin</a>
                          <span class="text-muted">– 4 hari Yang Lalu</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">081254026142</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Aktifkan </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Hapus </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/yuri.png" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">Makrifah amin</a>
                          <span class="text-muted">– 5 hari Yang Lalu</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">081254026142</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Aktifkan </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Hapus </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col text-center view-report">
                        <button type="submit" class="btn btn-white">Lihat Semua Pengguna Baru</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                  <div class="card card-small mb-4">
                      <div class="card-header border-bottom">
                        <h6 class="m-0">Semua Anggota</h6>
                      </div>
                      <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                          <thead class="bg-light">
                            <tr>
                              <th scope="col" class="border-0">No</th>
                              <th scope="col" class="border-0">Gambar</th>
                              <th scope="col" class="border-0">Nama</th>
                              <th scope="col" class="border-0">Nomor HP</th>
                              <th scope="col" class="border-0">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            <tr>
                              <td>1</td>
                              <td><div class="blog-comments__avatar mr-3">
                                <img src="images/avatars/yuri.png" alt="User avatar" /> </div> </div></td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->phone_number }}</td>
                              <td>
                                @if($user->status=='verified')
                                <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                  <label class="btn btn-white active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Aktiv </label>
                                  <label class="btn btn-white">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Tidak Aktiv </label>
                                </div>
                                @elseif($user->status=='pending')
                                <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                                  <label class="btn btn-white active">
                                    <input type="radio" name="options" id="option1" autocomplete="off"> Aktiv </label>
                                  <label class="btn btn-white">
                                    <input type="radio" name="options" id="option2" autocomplete="off" checked> Tidak Aktiv </label>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Privacy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            
          </footer>
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/dashboard-silo.js"></script>
  </body>
</html>