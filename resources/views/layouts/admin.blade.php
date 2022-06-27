<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="shortcut icon" href="/media/img/bg/icon/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body class="nav-fixed sidenav-toggled">
    <div class='loader'>
        <div class='loader__gif'>
            <div class='loader__infinity'></div>
        </div>
    </div>
    <header class="admin__header">
        <div class="container-xl">
            <a class="admin__header_link" href="{{ route('index') }}">
                <img class="admin__header_logo" src="/media/img/bg/icon/logo.svg" alt="logo">
            </a>
        </div>
    </header>


    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header admin__header_top page-header-dark pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        @yield('adminHeader')
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-xl admin__items">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Skills</div>
                                                <div class="text-lg fw-bold">{{ $skillsCount }}</div>
                                            </div>
                                            <img class="admin__menu_icon" src="/media/img/admin/icons/skill.png"
                                                alt="skills">
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="{{ route('skills.index') }}">View
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Certificates</div>
                                                <div class="text-lg fw-bold">{{ $certificatesCount }}</div>
                                            </div>
                                            <img class="admin__menu_icon" src="/media/img/admin/icons/certificate.png"
                                                alt="certificate">
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link"
                                            href="{{ route('certificates.index') }}">View
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Projects</div>
                                                <div class="text-lg fw-bold">{{ $projectsCount }}</div>
                                            </div>
                                            <div class="admin__menu_icon_overview">
                                                <img class="admin__menu_icon" src="/media/img/admin/icons/project.png"
                                                    alt="projects">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="{{ route('projects.index') }}">View
                                            Projects</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Back Projects</div>
                                                <div class="text-lg fw-bold">{{ $backProjectsCount }}</div>
                                            </div>
                                            <div class="admin__menu_icon_overview">
                                                <img class="admin__menu_icon" src="/media/img/admin/icons/project.png"
                                                    alt="back projects">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link"
                                            href="{{ route('back-projects.index') }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Education</div>
                                                <div class="text-lg fw-bold">{{ $educationsCount }}</div>
                                            </div>
                                            <img class="admin__menu_icon" src="/media/img/admin/icons/education.png"
                                                alt="education">
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link"
                                            href="{{ route('educations.index') }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Experience</div>
                                                <div class="text-lg fw-bold">{{ $experiencesCount }}</div>
                                            </div>
                                            <img class="admin__menu_icon" src="/media/img/admin/icons/experience.png"
                                                alt="experience">
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link"
                                            href="{{ route('experiences.index') }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Contacts</div>
                                                <div class="text-lg fw-bold">{{ $contactsCount }}</div>
                                            </div>
                                            <img class="admin__menu_icon" src="/media/img/admin/icons/contact.png"
                                                alt="contact">
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link"
                                            href="{{ route('admin.contacts') }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide col-lg-6 col-xl-3 mb-4">
                                <div class="card admin__item_bg text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="menu__item_title">Users</div>
                                                <div class="text-lg fw-bold">{{ $usersCount }}</div>
                                            </div>
                                            <img class="admin__menu_icon" src="/media/img/admin/icons/users.png"
                                                alt="users">
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="{{ route('users.index') }}">View
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                    {{-- content --}}
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="/js/admin.js"></script>

</body>

</html>
