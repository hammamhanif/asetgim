@extends('Tamplate.dashboard.main')

@section('content_dashboard')
    <!--start wrapper-->
    <div class="wrapper">

        @include('Tamplate.dashboard.sidebar')

        @include('Tamplate.dashboard.header')
        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                <!--start breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Forms</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="javascript:;"><ion-icon
                                            name="home-outline"></ion-icon></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary">Settings</button>
                            <button type="button"
                                class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                    href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                    link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->


                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <h6 class="mb-0 text-uppercase">Upload Asset</h6>
                                    <hr>
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            <strong class="font-bold">Success!</strong>
                                            <span class="block sm:inline">{{ session('success') }}</span>
                                        </div>
                                    @elseif(session('unsuccess'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong class="font-bold">Unsuccess!</strong>
                                            <span class="block sm:inline">{{ session('unsuccess') }}</span>
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            <ul class="list-disc pl-5">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ htmlentities($error) }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="post" action="{{ route('file.upload') }}" class="row g-3"
                                        enctype="multipart/form-data">
                                        @method('POST')
                                        @csrf
                                        <div class="col-12">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="type">Jenis Asset</label>
                                            <select class="form-select mb-3" aria-label="Default select example"
                                                name="type" id="type">
                                                <option selected="">Pilih Jenis Asset</option>
                                                <option value="2D">2D
                                                </option>
                                                <option value="3D">3D
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="area">Asal Daerah</label>
                                            <select class="form-select mb-3" aria-label="Default select example"
                                                id="area" name="area">
                                                <option selected="">Pilih Daerah</option>
                                                <option value="Bandung">Bandung</option>
                                                <option value="Jogja">Jogja</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="file" class="form-label">Input File</label>
                                            <div class="mb-3">
                                                <input class="form-control" type="file" name="file" multiple=""
                                                    id="file">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="description">Deskripsi</label>
                                            <textarea class="form-control" rows="4" cols="4" name="description" id="description"></textarea>
                                        </div>
                                        <div class="col-12">
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!-- end page content-->
        </div>

        <!--start footer-->
        <footer class="footer">
            <div class="footer-text">
                Copyright © 2023. All right reserved.
            </div>
        </footer>
        <!--end footer-->



        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon
                    name="color-palette-sharp" class="me-0"></ion-icon></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
                tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                            value="option1" checked>
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                            value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark"
                            value="option3">
                        <label class="form-check-label" for="SemiDark">Semi Dark</label>
                    </div>
                    <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end switcher-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->
    </div>
@endsection
