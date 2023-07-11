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
        <a class="navbar-brand ps-3" href="index.html">eMedico 1.0</a>
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
                                <a class="nav-link" href="layout-sidenav-light.html">Patient List</a>
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
                        <div class="card-body">
                            <table class="table table-striped" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Blood Group</th>
                                        <th>Guardian Name</th>
                                        <th>Guardian Mobile</th>
                                        <th>E-mail</th>
                                        <th>Area</th>
                                        <th>Address</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Blood Group</th>
                                        <th>Guardian Name</th>
                                        <th>Guardian Mobile</th>
                                        <th>E-mail</th>
                                        <th>Area</th>
                                        <th>Address</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                </tfoot>
                                <tbody>
                                    @php
                                    $c=1;
                                    @endphp

                                    @if(count($patient)>0)

                                    @foreach($patient as $patientrow)
                                    <tr>
                                        <td>{{$c++}}</td>
                                        <td>{{$patientrow->patient_name}}</td>
                                        <td>{{$patientrow->patient_gender}}</td>
                                        <td>{{$patientrow->patient_age}}</td>
                                        <td>{{$patientrow->patient_blood}}</td>
                                        <td>{{$patientrow->guardian_name}}</td>
                                        <td>{{$patientrow->mobile}}</td>
                                        <td>{{$patientrow->guardian_mobile}}</td>
                                        <td>{{$patientrow->email}}</td>
                                        <td>{{$patientrow->area}}</td>
                                        <td>{{$patientrow->address}}</td>
                                        <td>{{$patientrow->note}}</td>

                                        <td>
                                            <a href="{{Route('patient.edit', $patientrow->id)}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{Route('patient.delete', $patientrow->id)}}" class="btn btn-info btn-sm"><i class="fa-solid fa-trash "></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    @else
                                    <tr>
                                        <td colspan="14" class="text-center text-danger">No Product Data</td>
                                    </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>

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
