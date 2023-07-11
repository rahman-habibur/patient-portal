<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>eMedico 1.0</title>
    <link href="{{asset('backend')}}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Patient Info
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{Route('patient.index')}}">Add Patient</a>
                                <a class="nav-link" href="{{Route('patient.list')}}">Patient List</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{Route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Patient</li>
                    </ol>
                    <div class="container">
                        <form action="{{Route('patient.update', $patient->id)}}" method="POST" enctype="multipart/form-data" class="shadow rounded p-2 mt-4">
                            @csrf

                            <div class="card-body" bis_skin_checked="1">

                                <div class="form-group" bis_skin_checked="1">
                                    <div class="row mt-2">
                                        <div class="form-group col-md-4" bis_skin_checked="1">
                                            <label for="name">Name <samp class="text-danger">*</samp></label>
                                            <input type="text" class="form-control" required="" name="name" value="{{$patient->patient_name}}">
                                        </div>

                                        <div class="form-group col-md-1" bis_skin_checked="1">
                                            <label for="gender"> Gender <samp class="text-danger">*</samp></label>
                                            <select name="gender" class="form-control" required="" value="{{$patient->patient_gender}}">
                                                <option>---</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Chaild">Chaild</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2" bis_skin_checked="1">
                                            <label for="age">Age <samp class="text-danger">*</samp> </label>
                                            <input type="text" class="form-control" required="" name="age" value="{{$patient->patient_age}}">
                                        </div>

                                        <div class="form-group col-md-2" bis_skin_checked="1">
                                            <label for="blood">Blood Group </label>
                                            <select name="blood" id="blood" class="form-control" value="{{$patient->patient_blood}}">
                                                <option>Select Group</option>
                                                <option value="A+"> A+ </option>
                                                <option value="B+"> B+ </option>
                                                <option value="O+"> O+ </option>
                                                <option value="AB+"> AB+ </option>
                                                <option value="A-"> A- </option>
                                                <option value="B-"> B- </option>
                                                <option value="O-"> O- </option>
                                                <option value="AB-"> AB- </option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3" bis_skin_checked="1">
                                            <label for="guardian">Guardian Name </label>
                                            <input type="text" class="form-control" name="guardian" value="{{$patient->guardian_name}}">
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-2" bis_skin_checked="1">
                                            <label for="mobile">Mobile <samp class="text-danger">*</samp> </label>
                                            <input type="text" class="form-control" required="" name="mobile" value="{{$patient->mobile}}">
                                        </div>

                                        <div class="form-group col-md-2" bis_skin_checked="1">
                                            <label for="guardian_mobile">Guardian Mobile </label>
                                            <input type="text" class="form-control" name="guardian_mobile" value="{{$patient->guardian_mobile}}">
                                        </div>

                                        <div class="form-group col-md-5" bis_skin_checked="1">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control"
                                                name="email" value="{{$patient->email}}">
                                        </div>

                                        <div class="form-group col-md-3" bis_skin_checked="1">
                                            <label for="area">Area </label>
                                            <input type="text" class="form-control" name="area" value="{{$patient->area}}">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6" bis_skin_checked="1">
                                            <label for="address">Address </label>
                                            <input type="text" class="form-control" name="address" value="{{$patient->address}}">
                                        </div>

                                        <div class="form-group col-md-6" bis_skin_checked="1">
                                            <label for="note">Note</label>
                                            <input type="text" class="form-control" name="note" value="{{$patient->note}}">
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <!-- buttons  -->
                            <div class="card-footer" bis_skin_checked="1">
                               
                                <button type="update" class="btn btn-secondary mt-3">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
