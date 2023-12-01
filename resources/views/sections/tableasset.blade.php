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
                                <li class="breadcrumb-item active" aria-current="page">Review Asset</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('reviewasset') }}">
                                <h5 class="mb-0">Review Asset</h5>
                            </a>
                            <form class="ms-auto position-relative" action="{{ route('reviewasset') }}" method="GET">
                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><ion-icon
                                        name="search-sharp"></ion-icon></div>
                                <input class="form-control ps-5" type="text" placeholder="search" name="search">
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
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Asset Type</th>
                        <th>Creator</th>
                        <th>Daerah</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $index => $asset)
                        <tr>
                            <td>{{ $assets->firstItem() + $index }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <div class="">
                                        <p class="mb-0">{{ htmlentities($asset->name) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ htmlentities($asset->description) }}</td>
                            <td>{{ htmlentities($asset->status) }}</td>
                            <td>{{ htmlentities($asset->asset_type) }}
                            </td>
                            <td>{{ htmlentities($asset->user->name) }}
                            </td>
                            <td>{{ htmlentities($asset->area) }}</td>
                            <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#user{{ $asset->id }}">
                                    <ion-icon name="create-outline"></ion-icon></button>
                                <div class="modal fade" id="user{{ $asset->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <!-- Tambahkan class modal-dialog-scrollable di sini -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Asset</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                                                <div style="text-align: center;">
                                                    <img src="{{ asset('storage/' . $asset->path) }}" alt="Image"
                                                        style="max-width: 200px; max-height: 200px;">
                                                </div>
                                                <form role="form text-left"
                                                    action="{{ route('reviewasset.update', $asset->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    <form role="form text-left"
                                                        action="{{ route('reviewasset.update', $asset->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="name" class="col-form-label">Nama:</label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" value="{{ htmlentities($asset->name) }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description"
                                                                class="col-form-label">description:</label>
                                                            <textarea class="form-control" id="description" name="description">{{ htmlentities($asset->description) }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="status" class="col-form-label">Status</label>
                                                            <select class="form-select form-select-md"
                                                                aria-label=".form-select-md example" name="status"
                                                                id="status">
                                                                @foreach (['active', 'inactive', 'pending'] as $status)
                                                                    <option
                                                                        @if ($asset->status === $status) selected @endif
                                                                        value="{{ $status }}">{{ $status }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="type" class="col-form-label">Daerah</label>
                                                            <select class="form-select form-select-md"
                                                                aria-label=".form-select-md example" name="area"
                                                                id="area">
                                                                @foreach (['Jawa Tengah', 'Sumatera Utara', 'Sulawesi Utara', 'NTB', 'NTT', 'Bali'] as $area)
                                                                    <option
                                                                        @if ($asset->area === $area) selected @endif
                                                                        value="{{ $area }}">{{ $area }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="file" class="col-form-label">Poster
                                                                Aset (Maksimal 4 mb)</label>
                                                            <input class="form-control" type="file" name="file"
                                                                multiple="" id="file">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="file2" class="col-form-label">Aset File (Format
                                                                .zip atau .rar )</label>
                                                            <input type="file" class="form-control" id="file2"
                                                                name="file2">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Perbarui</button>
                                                    </form>
                                                </form>
                                                <a href="{{ route('reviewasset.delete', ['id' => $asset->id]) }}"
                                                    onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this asset?')) document.getElementById('delete-form-{{ htmlentities($asset->id) }}').submit();">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Hapus</button>
                                                </a>
                                                <form id="delete-form-{{ htmlentities($asset->id) }}"
                                                    action="{{ route('reviewasset.delete', ['id' => $asset->id]) }}"
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
        <div class="d-flex justify-content-center mt-4">
            {{ $assets->links() }}
        </div>
    </div>
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
            Copyright © 2022 BRIN. GANA (Game Asset Nusantara).
        </div>
    </footer>
    <!--end footer-->
@endsection
