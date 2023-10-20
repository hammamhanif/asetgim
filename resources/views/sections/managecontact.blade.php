@extends('Tamplate.dashboard.main')

@section('content_dashboard')
    @include('Tamplate.dashboard.sidebar')

    @include('Tamplate.dashboard.header')

    <!--start wrapper-->
    <div class="wrapper">
        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                <!--start breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Tables</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><ion-icon
                                            name="home-outline"></ion-icon></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Message Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('contact.index') }}">
                                <h5 class="mb-0">Contact Details</h5>
                            </a>
                            <form class="ms-auto position-relative" method="GET" action="{{ route('contact.index') }}">
                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><ion-icon
                                        name="search-sharp"></ion-icon></div>
                                <input class="form-control ps-5" type="text" name="search" placeholder="search">
                            </form>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-dismissible fade show py-2 bg-success mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-dark"><ion-icon name="information-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-dark">Success!—{{ session('success') }}!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @elseif(session('unsuccess'))
                            <div class="alert alert-dismissible fade show py-2 bg-danger mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-dark"><ion-icon name="information-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-dark">Unsuccess!—{{ session('unsuccess') }}!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-dismissible fade show py-2 bg-danger mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-dark"><ion-icon name="information-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-dark">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ htmlentities($error) }}</li>
                                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Massage</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <div class="">
                                        <p class="mb-0">{{ htmlentities($contact->name) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ htmlentities($contact->email) }}</td>
                            <td>{{ htmlentities($contact->subject) }}</td>
                            <td>{{ htmlentities($contact->message) }}
                            </td>
                            <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#user{{ $contact->id }}">
                                    <ion-icon name="create-outline"></ion-icon></button>
                                <div class="modal fade" id="user{{ $contact->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail Pesan
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form text-left" action="" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="name" class="col-form-label">Nama:</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" value="{{ htmlentities($contact->name) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="col-form-label">email:</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{ htmlentities($contact->email) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="subject" class="col-form-label">subject:</label>
                                                        <input type="text" class="form-control" id="subject"
                                                            name="subject" value="{{ htmlentities($contact->subject) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message" class="col-form-label">message:</label>
                                                        <input type="text" class="form-control" id="message"
                                                            name="message" value="{{ htmlentities($contact->message) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                </form>
                                                <a href="{{ route('contact.destroy', ['id' => $contact->id]) }}"
                                                    onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this massage?')) document.getElementById('delete-form-{{ htmlentities($contact->id) }}').submit();">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Hapus</button>
                                                </a>
                                                <form id="delete-form-{{ htmlentities($contact->id) }}"
                                                    action="{{ route('contact.destroy', ['id' => $contact->id]) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                        aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                        aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                        aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $contacts->links() }}
    </div>

    </div>
    <!-- end page content-->
    </div>
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon name="color-palette-sharp"
                class="me-0"></ion-icon></button>
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
    <!--start footer-->



    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    </div>
    <!--end wrapper-->
    <footer class="footer">
        <div class="footer-text">
            Copyright © 2023. All right reserved.
        </div>
    </footer>
    <!--end footer-->
@endsection
