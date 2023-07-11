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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-info bg-info">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="">eMedico 1.0</a>
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
                <div class="container-fluid px-4 mt-3">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{Route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{Route('patient.index')}}">Patient</a></li>
                    </ol>

                    <div class="row">
                        <div class="col-lg-7">
                            <form action="{{Route('patient.add')}}" method="POST" enctype="multipart/form-data"
                                class="shadow rounded p-2">
                                @csrf
                                <div class="card-body" bis_skin_checked="1">

                                    <div class="form-group" bis_skin_checked="1">
                                        <div class="row mt-2">
                                            <!-- search button -->
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" placeholder="Patient ID"
                                                    aria-label="">

                                                <button class="btn btn-outline-secondary" type="button"><i
                                                        class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                                                <button class="btn btn-outline-secondary" type="button"><i
                                                        class="fa-solid fa-rotate-left"></i></button>
                                            </div>

                                            <!-- title  -->
                                            <div class="form-group col-md-3" bis_skin_checked="1">
                                                <label for="title"> Title <samp class="text-danger">*</samp></label>
                                                <select name="title" id="title" class="form-control" onChange="update()" required="">
                                                    <option>Select</option>
                                                    <option value="mr">Mr</option>
                                                    <option value="mrs">Mrs</option>
                                                    <option value="other">Others</option>
                                                </select>
                                            </div>
                                            <!-- name  -->
                                            <div class="form-group col-md-9" bis_skin_checked="1">
                                                <label for="name">Name <samp class="text-danger">*</samp></label>
                                                <input type="text" class="form-control" required="" name="name">
                                            </div>
                                            <!-- mobile  -->
                                            <div class="form-group col-md-12" bis_skin_checked="1">
                                                <label for="mobile">Mobile <samp class="text-danger">*</samp>
                                                </label>
                                                <input type="text" class="form-control" required="" name="mobile">
                                            </div>

                                            <!-- age  -->
                                            <div class="form-group col-md-4" bis_skin_checked="1">
                                                <label for="age">Age <samp class="text-danger">*</samp> </label>
                                                <input type="date" class="form-control" required="" name="age">
                                            </div>
                                            <!-- gender  -->
                                            <div class="form-group col-md-4" bis_skin_checked="1">
                                                <label for="gender"> Gender <samp class="text-danger">*</samp></label>
                                                <input type="text" id="gender" name="gender" value=""
                                                    class="form-control" disabled>
                                            </div>
                                            <!-- blood group -->
                                            <div class="form-group col-md-4" bis_skin_checked="1">
                                                <label for="blood">Blood Group</label>
                                                <select name="blood" id="blood" class="form-control">
                                                    <option>Select</option>
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
                                            <!-- guardian name  -->
                                            <div class="form-group col-md-12" bis_skin_checked="1">
                                                <label for="guardian">Guardian Name </label>
                                                <input type="text" class="form-control" name="guardian">
                                            </div>
                                            <!-- guardian mobile  -->
                                            <div class="form-group col-md-12" bis_skin_checked="1">
                                                <label for="guardian_mobile">Guardian Mobile </label>
                                                <input type="text" class="form-control" name="guardian_mobile">
                                            </div>
                                            <!-- email  -->
                                            <div class="form-group col-md-7" bis_skin_checked="1">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" placeholder="Optional"
                                                    name="email">
                                            </div>
                                            <!-- area  -->
                                            <div class="form-group col-md-5" bis_skin_checked="1">
                                                <label for="area">Area </label>
                                                <input type="text" class="form-control" name="area"
                                                    placeholder="Optional">
                                            </div>
                                            <!-- address  -->
                                            <div class="form-group col-md-6" bis_skin_checked="1">
                                                <label for="address">Address </label>
                                                <input type="text" class="form-control" name="address">
                                            </div>

                                            <!-- notes  -->
                                            <div class="form-group col-md-6" bis_skin_checked="1">
                                                <label for="note">Note</label>
                                                <input type="text" class="form-control" name="note">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- buttons  -->
                                <div class="card-footer" bis_skin_checked="1">
                                    <button type="submit" name="submit" class="btn btn-success mt-3">Submit</button>
                                    <button type="reset" class="btn btn-secondary mt-3">Reset</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <h2 class="text-center text-primary my-2">Patient Image</h2>

                            <div class="text-center">
                                <a href="{{ route('webcam.home')}}"><img src="{{asset('patients')}}/upload.png" alt="" class="text-center border rounded-circle"></a>
                            </div>

                            <div class="text-center">
                                <a class="btn btn-primary mt-5" href="#">Upload From Computer</a>
                                <a class="btn btn-secondary mt-5" href="{{ route('webcam.home') }}">Capture Here</a>
                            </div>
                        </div>
                    </div>
            </main>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- webcam js  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.24/webcam.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>

    <!-- Get the Value of a Select or Dropdown List  -->
    <script type="text/javascript">
        function update(){
            var select = document.querySelector('#title');
            var option = select.options[title.selectedIndex];

            if(option.value == "mr"){
                document.querySelector('#gender').value = "Mr " ;
            }
            else if(option.value == "mrs"){
                document.querySelector('#gender').value = "Mrs ";
            }
            else{
                document.querySelector('#gender').value = "Others";
            }
        }
    </script>

</body>

</html>
