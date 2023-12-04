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
                      <div class="breadcrumb-title pe-3">Dashboard</div>
                  </div>
                  <!--end breadcrumb-->
                  @if (session('success'))
                      <div class="alert alert-dismissible fade show py-2 bg-success mt-3">
                          <div class="d-flex align-items-center">
                              <div class="fs-3 text-dark"><ion-icon name="information-circle-sharp"></ion-icon>
                              </div>
                              <div class="ms-3">
                                  <div class="text-dark">Success!—{{ session('success') }}!</div>
                              </div>
                          </div>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  @endif

                  <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
                      <div class="col">
                          <div class="card radius-10">
                              <div class="card-body">
                                  <div class="d-flex align-items-start gap-2">
                                      <div>
                                          <p class="mb-0 fs-6">Selamat Datang, di Gana !</p>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center mt-2 mb-3">
                                      <div>
                                          <h4 class="mb-0">{{ auth()->user()->name }}</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @if (Auth::user()->account_type == 'admin')
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Total Asset</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                              <ion-icon name="wallet-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCount }}</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @else
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Total Point</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                              <ion-icon name="wallet-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ auth()->user()->points }}</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                      @if (Auth::user()->account_type == 'admin')
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Total Creator </p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                              <ion-icon name="people-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $users }}</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @else
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Aset 3D </p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                              <ion-icon name="dice-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCount3D }}</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif

                      @if (Auth::user()->account_type == 'admin')
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Aset Kamu</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                                              <ion-icon name="layers-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCountUser }}</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @else
                          <div class="col">
                              <div class="card radius-10">
                                  <div class="card-body">
                                      <div class="d-flex align-items-start gap-2">
                                          <div>
                                              <p class="mb-0 fs-6">Aset 2D</p>
                                          </div>
                                          <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                                              <ion-icon name="images-outline"></ion-icon>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center mt-3">
                                          <div>
                                              <h4 class="mb-0">{{ $assetCount2D }}</h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                  </div>
                  <!--end row-->



                  <div class="card radius-10 w-100">
                      <div class="card-body">
                          <div class="d-flex align-items-center">
                              <h6 class="mb-0">Detail Unggahan Asset</h6>
                          </div>
                          <div class="table-responsive mt-2">

                              <table class="table align-middle mb-0">
                                  <thead class="table-light">
                                      <tr>
                                          <th>No.</th>
                                          <th>Nama Aset</th>
                                          <th>Status</th>
                                          <th>Deskripsi</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($assets as $asset)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>
                                                  <div class="d-flex align-items-center gap-3">
                                                      <div class="product-info">
                                                          <h6 class="product-name mb-1">{{ $asset->name }}</h6>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="badge bg-success">{{ $asset->status }}</span></td>
                                              <td>{{ $asset->description }}</td>
                                              <td>
                                                  <div class="d-flex align-items-center gap-3 fs-6">

                                                      <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                          data-bs-target="#user{{ $asset->id }}">
                                                          <ion-icon name="create-outline"></ion-icon></button>
                                                      <div class="modal fade" id="user{{ $asset->id }}"
                                                          tabindex="-1" aria-labelledby="exampleModalLabel"
                                                          aria-hidden="true">
                                                          <div class="modal-dialog modal-dialog-scrollable">
                                                              <!-- Tambahkan class modal-dialog-scrollable di sini -->
                                                              <div class="modal-content">
                                                                  <div class="modal-header">
                                                                      <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                          Asset</h5>
                                                                      <button type="button" class="btn-close"
                                                                          data-bs-dismiss="modal"
                                                                          aria-label="Close"></button>
                                                                  </div>
                                                                  <div class="modal-body"
                                                                      style="max-height: 400px; overflow-y: auto;">
                                                                      <div style="text-align: center;">
                                                                          <img src="{{ asset('storage/' . $asset->path) }}"
                                                                              alt="Image"
                                                                              style="max-width: 200px; max-height: 200px;">
                                                                      </div>
                                                                      <form role="form text-left"
                                                                          action="{{ route('dashboard.update', $asset->id) }}"
                                                                          method="post" enctype="multipart/form-data">
                                                                          <form role="form text-left"
                                                                              action="{{ route('dashboard.update', $asset->id) }}"
                                                                              method="post"
                                                                              enctype="multipart/form-data">
                                                                              @method('PUT')
                                                                              @csrf
                                                                              <div class="mb-3">
                                                                                  <label for="name"
                                                                                      class="col-form-label">Nama:</label>
                                                                                  <input type="text"
                                                                                      class="form-control" id="name"
                                                                                      name="name"
                                                                                      value="{{ htmlentities($asset->name) }}">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                  <label for="description"
                                                                                      class="col-form-label">description:</label>
                                                                                  <textarea class="form-control" id="description" name="description">{{ htmlentities($asset->description) }}</textarea>
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                  <label for="type"
                                                                                      class="col-form-label">Daerah</label>
                                                                                  <select
                                                                                      class="form-select form-select-md"
                                                                                      aria-label=".form-select-md example"
                                                                                      name="area" id="area">
                                                                                      @foreach (['Jawa Tengah', 'Sumatera Utara', 'Sulawesi Utara', 'NTB', 'NTT', 'Bali'] as $area)
                                                                                          <option
                                                                                              @if ($asset->area === $area) selected @endif
                                                                                              value="{{ $area }}">
                                                                                              {{ $area }}
                                                                                          </option>
                                                                                      @endforeach
                                                                                  </select>
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                  <label for="file"
                                                                                      class="col-form-label">Poster
                                                                                      Aset (Maksimal 4 mb)</label>
                                                                                  <input class="form-control"
                                                                                      type="file" name="file2"
                                                                                      multiple="" id="file2">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                  <label for="file2"
                                                                                      class="col-form-label">Aset File
                                                                                      (Format
                                                                                      .zip atau .rar)
                                                                                  </label>
                                                                                  <input type="file"
                                                                                      class="form-control" id="file2"
                                                                                      name="file2">
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                  <button type="button"
                                                                                      class="btn btn-secondary"
                                                                                      data-bs-dismiss="modal">Close</button>
                                                                                  <button type="submit"
                                                                                      class="btn btn-primary">Update</button>
                                                                          </form>
                                                                      </form>
                                                                      <a href="{{ route('reviewasset.delete2', ['id' => $asset->id]) }}"
                                                                          onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this asset?')) document.getElementById('delete-form-{{ htmlentities($asset->id) }}').submit();">
                                                                          <button type="button" class="btn btn-danger"
                                                                              data-bs-dismiss="modal">Hapus</button>
                                                                      </a>
                                                                      <form
                                                                          id="delete-form-{{ htmlentities($asset->id) }}"
                                                                          action="{{ route('reviewasset.delete2', ['id' => $asset->id]) }}"
                                                                          method="POST" style="display: none;">
                                                                          @csrf
                                                                          @method('DELETE')
                                                                      </form>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>

                                              </td>

                          </div>

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
          <div class="card radius-10 w-100">
              <div class="card-body">
                  <div class="d-flex align-items-center">
                      <h6 class="mb-0">Pesan dari Admin</h6>
                  </div>

                  <table class="table align-middle mb-0">
                      <thead class="table-light">
                          <tr>
                              <th>No.</th>
                              <th>Subjek</th>
                              <th>Pesan</th>
                              <th>Waktu</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($messages as $index => $message)
                              <tr>
                                  <td>{{ $messages->firstItem() + $index }}</td>
                                  <td>
                                      <div class="d-flex align-items-center gap-3">
                                          <div class="product-info">
                                              <h6 class="product-name mb-1">{{ $message->subject }}</h6>
                                          </div>
                                      </div>
                                  </td>
                                  <td>{{ $message->message }}</td>
                                  <td>{{ $message->updated_at }}</td>
                                  <td>
                                      <div class="d-flex align-items-center gap-3 fs-6">

                                          <a href="javascript:;" class="text-danger delete-asset"
                                              data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"
                                              aria-label="Delete" data-asset-id="{{ $message->id }}">
                                              <ion-icon name="trash-outline"></ion-icon>
                                          </a>
                                          <div class="modal fade" id="confirmDeleteModalMessage" tabindex="-1"
                                              aria-labelledby="deleteMessage" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title" id="deleteMessage">
                                                              Hapus Pesan</h5>
                                                          <button type="button" class="btn-close"
                                                              data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                          Apakah Anda yakin menghapus pesan ini?
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary"
                                                              data-bs-dismiss="modal">Cancel</button>
                                                          <form method="POST"
                                                              action="/message/{{ $message->id }}/delete">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>

              </div>
              </td>
              </tr>
              @endforeach
              </tbody>
              </table>

          </div>
          <div class="d-flex justify-content-center mt-4">
              {{ $messages->links() }}
          </div>


      </div>
      <div class="card radius-10 w-100 mt-4">
          <div class="card-body">
              <div class="alert alert-warning">
                  <strong>PERHATIAN!</strong> Akses fitur-fitur lain menggunakan tombol menu di pojok kiri atas.
                  Untuk mengakses halaman profil dan melakukan log out gunakan tombol di pojok kanan atas. Apabila login
                  dengan google silahkan <strong>ubah password</strong> terlebih dahulu.
              </div>
          </div>
      </div>
      </div>
      <!-- end page content-->
      </div>
      <!--end page content wrapper-->


      <!--start footer-->
      <footer class="footer">
          <div class="footer-text">
              Copyright © 2023 BRIN. GANA (Game Asset Nusantara).
          </div>
      </footer>
      <!--end footer-->


      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top">
          <ion-icon name="arrow-up-outline"></ion-icon>
      </a>
      <!--End Back To Top Button-->

      <!--start switcher-->
      <div class="switcher-body">
          <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
              <ion-icon name="color-palette-outline" class="me-0"></ion-icon>
          </button>
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
  @endsection
