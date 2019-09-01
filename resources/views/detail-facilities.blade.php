<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>admin SELO</title>
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
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/logo.png" alt="Silo Dashboard">
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
                <a class="nav-link " href="{{ url('/') }}">
                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('blog-posting') }}">
                  <i class="material-icons">vertical_split</i>
                  <span>Semua Postingan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ url('/add-new-post') }}">
                  <i class="material-icons">note_add</i>
                  <span>Tambah Postingan Baru</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ url('user-profile') }}">
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
          <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            informasi postingan ini berhasil diperbaharui</div>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">ini adalah judul postingan</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img src="images/content/2.jpeg" alt="image posting" width="100%"> </div>
                    <span class="text-muted d-block mb-2">Bencana alam yang sering terjadi di alam manusia ini adalah gunung meletus</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Detail Postingan</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="PostTitle">Judul Postingan</label>
                                <input type="text" class="form-control" id="PostTitle" placeholder="judul postingan" value="Bencana alam yang sering terjadi di alam manusia ini adalah gunung meletus"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Tanggal posting</label>
                                <input type="date" class="form-control" id="datePosting" placeholder="date" value="dd/mm/yyyy"> </div>
                                <div class="form-group col-md-6">
                                <label for="feEmailAddress">kategori</label>
                                   {!!Form::select('category', array('Bencana Alam' => 'Bencana Alam', 'Pertanian' => 'Pertanian'),'Bencana Alam',array('class'=>'form-control','id'=>'inputKategori'))!!}                                
                                 </div>
                                <form>
                                <div class="form-group col-md-12">
                                  <label for="description">Deskripsi:</label>
                                  {!!Form::textarea('description',null,array('placeholder'
                                        =>'Deskripsi','class'=>'form-control','rows'=>'12','id'=>'hiddenArea'))!!}
                                </div>
                              </form>
                            </div>
                            <li class="list-group-item">
                        <button data-toggle="modal" data-target="#myModal" type="button" value="delete" class="btn btn-sm btn-danger">
                          <i class="material-icons">delete</i>&nbsp;Hapus</button>
                          <button type="button" value="delete" class="btn btn-sm btn-warning">
                          <i class="material-icons">edit</i>&nbsp; Perbarui</button>
                      </li>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>  
          <div>
            <!-- End Default Light Table -->
          </div>
          <div class="px-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-4 pt-3">
                  <div>
                    <div class="mb-3 mx-auto">
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                      <div class="card card-small blog-comments">
                        <div class="card-header border-bottom">
                          <h6 class="m-0">Komentar</h6>
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
                              <p class="m-0 my-1 mb-2 text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, ea.</p>
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
                              <img src="images/avatars/anonim.png" alt="User anonim" /> </div>
                            <div class="blog-comments__content">
                              <div class="blog-comments__meta text-muted">
                                <a class="text-secondary" href="#">Anonim</a>
                                <span class="text-muted">– 4 hari Yang Lalu</span>
                              </div>
                              <p class="m-0 my-1 mb-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut neque tempore assumenda nisi minima saepe, recusandae at eligendi consequatur blanditiis.</p>
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
                              <p class="m-0 my-1 mb-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro eum accusamus quia laborum cumque atque autem? Quibusdam voluptas hic impedit nesciunt quas nam minima reiciendis nostrum porro temporibus deserunt facere optio, ad beatae consectetur ipsam fugit maxime tenetur doloremque cum cupiditate enim? Rerum reprehenderit fugit, beatae ad laborum est cupiditate at, quas optio amet corrupti obcaecati magnam error esse qui consequuntur earum. Quam exercitationem beatae quasi natus id blanditiis, porro nostrum voluptatem dolore ipsa veritatis debitis facilis enim, perspiciatis molestias! Eligendi quidem cum impedit necessitatibus ea debitis reprehenderit? Molestiae culpa vel nisi. Error, at adipisci minima vel aliquam obcaecati provident illo expedita veritatis sed! Blanditiis dolorum cum animi corporis architecto enim soluta amet, dolores, suscipit nemo expedita quod. Voluptates et beatae nostrum veritatis, inventore tempora laboriosam. Accusantium alias eveniet voluptate, in ea fugit, soluta laboriosam harum vitae, tempora architecto rerum! Facilis et aperiam, veritatis recusandae natus aliquam vel, fuga cumque sint optio reprehenderit sit in dolor earum beatae sequi. Maxime accusantium aut doloribus assumenda a? Doloremque, sapiente mollitia! Sapiente aspernatur dolores ipsum maxime molestiae magnam dignissimos officiis inventore ad temporibus. Odit tenetur culpa adipisci magnam non at est eos illo eaque sapiente, officiis atque pariatur, a, reiciendis quisquam quam labore? Nemo autem debitis, distinctio reprehenderit quaerat sit odit temporibus molestias minus! Sed omnis distinctio ex tenetur non aperiam nostrum, totam repellendus cupiditate, aliquam iste repellat sunt officia explicabo quas atque quisquam corporis! Obcaecati harum eaque debitis quo. Vitae unde nisi minus quis enim ex impedit repudiandae, voluptatem hic iste. Veritatis, distinctio, corrupti enim perferendis vitae iure blanditiis deleniti id aperiam nesciunt ullam ipsa qui ipsam, illum delectus. Soluta blanditiis sequi neque possimus! Vitae in eaque aperiam molestias iure, incidunt labore praesentium quidem quam soluta veniam provident. Nihil enim non odit facilis nostrum maxime consequatur amet ducimus mollitia natus fugiat, blanditiis reprehenderit! Quam, quidem quibusdam laboriosam rem, inventore beatae repellendus, expedita ratione nesciunt vero aut dolorem consequatur quia non iusto natus ut alias earum voluptatem. Optio quibusdam aliquam quo, in possimus officia. Id aperiam, tempore quibusdam repellendus deserunt laboriosam incidunt illum impedit harum pariatur cumque optio sunt, blanditiis tempora perspiciatis quia commodi ab fuga? Amet numquam, maiores accusantium natus velit modi vero incidunt rem laborum nisi tempora totam dolorum sed sequi quam nemo, ipsa optio molestiae dignissimos tenetur quia temporibus expedita, labore veritatis. Inventore dolores omnis, nihil officiis quibusdam totam hic corporis neque! Velit, voluptate quibusdam? Ipsam, laborum ab sed, dolorum facere enim pariatur repellat blanditiis tenetur sint, dolore suscipit numquam cupiditate dolor voluptas excepturi iure dignissimos debitis. Autem eum minima dolorem error impedit quaerat velit excepturi. Officiis, ipsa perferendis. Ratione neque repudiandae adipisci iste, officia velit, voluptatem incidunt officiis aspernatur veniam ad laborum delectus laudantium, repellat at. Quisquam dolores fugit eveniet dolorum possimus voluptatum porro modi non aspernatur deleniti maxime excepturi eos laborum iste assumenda quidem, suscipit architecto facere est, ex enim illo saepe? Vero numquam quasi quas asperiores cumque dolores harum perferendis ipsam fugit dolore perspiciatis laborum recusandae incidunt quae reprehenderit, corporis cum quo atque ratione aspernatur error? Repellat, in at! Vero minima tenetur quidem omnis commodi rerum accusantium nulla quia repellat autem minus voluptatibus ab error odio soluta ad nisi, nihil laudantium amet voluptatum eius esse. Consequatur eligendi nulla autem, accusamus deleniti veritatis doloribus saepe nemo aut ut perspiciatis rem atque fuga perferendis dolores incidunt exercitationem eius cupiditate excepturi adipisci ullam ex voluptatem! Sed, cumque harum modi tenetur vel iusto earum non quidem facilis sequi, perferendis reprehenderit dolore quae architecto dignissimos? Explicabo officia voluptas eius. Consectetur, saepe consequuntur, rem eaque quas illo praesentium ex ut tempora modi tenetur sunt cumque aspernatur labore voluptas reiciendis qui eos repellendus odit asperiores aliquam nam, nesciunt cum officiis. Nulla porro odio consequatur consectetur cupiditate quia magnam, quod, enim sint quae facere est voluptatum! Quasi ducimus voluptate quibusdam, sed, esse, sint delectus voluptatibus accusantium laudantium magni nesciunt fugit repellendus illo. Natus aspernatur soluta, neque nostrum facilis nisi quam repellat pariatur nam illum illo itaque adipisci architecto odio, dolorem exercitationem. Repellat asperiores soluta delectus consequuntur, ipsa nostrum dolores, est eius maxime magnam et. Suscipit explicabo deleniti temporibus? Deserunt, repellat illum totam officiis praesentium cum, dolore, exercitationem saepe corporis iste sunt. Impedit reprehenderit, cupiditate eligendi tempora beatae aspernatur consequatur sint ullam nemo et tenetur fugit dolorum! Fugiat doloribus ab inventore earum modi animi facere ipsam reiciendis, natus iste at quis incidunt non blanditiis ex dignissimos enim? Tenetur aspernatur, quasi consequatur voluptatem explicabo nulla iste. Cumque molestias suscipit, ad voluptatum ullam amet assumenda magni, similique ex neque laudantium. Quidem, soluta suscipit quos, facilis aspernatur dolorem tempore mollitia alias excepturi aut officia ullam quaerat voluptate, accusantium accusamus sint voluptatibus optio. Quia natus quaerat rerum accusamus aut eos hic consequuntur aspernatur itaque voluptatum. Earum doloremque amet numquam placeat, non inventore autem incidunt. Cupiditate, quis reiciendis. Illo obcaecati explicabo dolorem aperiam earum sequi, blanditiis saepe provident aliquam nemo quasi ut itaque animi fugiat quisquam exercitationem dolor libero totam. Vel odio et corrupti velit asperiores harum accusantium mollitia hic non, quia, doloribus quibusdam, iusto adipisci molestiae dolorem illum ab? Sequi, nam consequuntur? Similique dicta officiis tempora voluptatibus sunt illum aspernatur, beatae quos obcaecati quasi quidem, natus eos voluptas in consequatur nulla vel neque distinctio expedita consequuntur, sed autem dolorum mollitia? Voluptatem explicabo alias dignissimos saepe doloribus soluta corrupti, repellat iusto dolorem nisi? Amet, soluta distinctio dolorum deserunt vero quia atque id! Aliquam nemo numquam similique architecto quasi enim odit eaque, doloribus facere aut, sunt necessitatibus ipsa ab eos, recusandae adipisci temporibus id voluptate exercitationem. Veniam explicabo temporibus reiciendis molestias quam esse quod quas voluptate recusandae expedita. Veniam ratione explicabo corporis illum a deserunt iste voluptates dolores, necessitatibus at similique repellendus nam fugiat quo incidunt aperiam ipsam possimus, suscipit nisi nobis provident corrupti non? Tempore doloribus, magni itaque suscipit consectetur eaque consequuntur soluta ipsam, sunt sequi beatae dolores ad at maxime non laborum cupiditate nisi perspiciatis numquam corporis vero necessitatibus recusandae illum. Nulla aliquid, rem totam dolore ad itaque blanditiis velit vel repellendus obcaecati doloremque! Aut repellat dolorem tempora reprehenderit vitae porro, qui, vero velit ab dolores fugit! Numquam, in quas odit, sed cum ex eius corrupti eum sapiente ratione quos iste deleniti velit labore vero praesentium! Nulla voluptas quaerat ad et sint fuga. Quam id officia, aliquid, rem dolores temporibus earum, voluptatum repellendus quasi vero reiciendis adipisci omnis? Facilis exercitationem debitis sed aliquam, eos officiis delectus modi similique qui odit blanditiis dolorum temporibus non ipsam! In voluptates debitis ad voluptate saepe dicta! Maiores eaque iure cupiditate minus dicta quam dignissimos aliquam delectus voluptas nam repellat, blanditiis illum ab fuga aperiam aut placeat iste vel distinctio corporis sed quaerat voluptate aliquid? Harum accusamus reiciendis assumenda, accusantium ipsum animi exercitationem quisquam?</p>
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
                  </div>
                </div>
              </div>
            <!-- End Default Light Table -->
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
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
            <script src="scripts/dashboard-silo.js"></script>
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

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header d-flex px-5">
          <span class="modal-headerConfirm">Konfirmasi hapus</span>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <h5>Apakah anda yakin ingin mengapus kontent ini?</h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>          
            <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
          </div>
        </div>
        
      </div>
    </div>

    <!-- end of modal -->
  </body>
</html>

<style>
.modal-headerConfirm{
  font-weight:bold;
  margin-top:3px;
  margin-left:-25px;
  color:#34495E;
}
</style>