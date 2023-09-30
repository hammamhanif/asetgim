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
                                          <h4 class="mb-0">{{ auth()->user()->username }}</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
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
                                          <h4 class="mb-0">$92,854</h4>
                                      </div>
                                      <div class="ms-auto">+6.32%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
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
                                          <h4 class="mb-0">48,789</h4>
                                      </div>
                                      <div class="ms-auto">+12.45%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col">
                          <div class="card radius-10">
                              <div class="card-body">
                                  <div class="d-flex align-items-start gap-2">
                                      <div>
                                          <p class="mb-0 fs-6">Your Assets</p>
                                      </div>
                                      <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                                          <ion-icon name="bar-chart-outline"></ion-icon>
                                      </div>
                                  </div>
                                  <div class="d-flex align-items-center mt-3">
                                      <div>
                                          <h4 class="mb-0">48</h4>
                                      </div>
                                      <div class="ms-auto">+8.52%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--end row-->



                  <div class="card radius-10 w-100">
                      <div class="card-body">
                          <div class="d-flex align-items-center">
                              <h6 class="mb-0">Detail Assets Post</h6>
                              <div class="fs-5 ms-auto dropdown">
                                  <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                      data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li>
                                          <hr class="dropdown-divider">
                                      </li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="table-responsive mt-2">
                              <table class="table align-middle mb-0">
                                  <thead class="table-light">
                                      <tr>
                                          <th>No.</th>
                                          <th>Name</th>
                                          <th>Status</th>
                                          <th>Date</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>#89742</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3">
                                                  <div class="product-box border">
                                                      <img src="assets/images/products/11.png" alt="">
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                                                  </div>
                                              </div>
                                          </td>
                                          <td><span class="badge bg-success">Completed</span></td>
                                          <td>Apr 8, 2021</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3 fs-6">
                                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="View detail" aria-label="Views">
                                                      <ion-icon name="eye-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Edit info" aria-label="Edit">
                                                      <ion-icon name="pencil-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Delete" aria-label="Delete">
                                                      <ion-icon name="trash-outline"></ion-icon>
                                                  </a>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>#68570</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3">
                                                  <div class="product-box border">
                                                      <img src="assets/images/products/07.png" alt="">
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-name mb-1">Sports Time Watch</h6>
                                                  </div>
                                              </div>
                                          </td>
                                          <td><span class="badge bg-success">Completed</span></td>
                                          <td>Apr 9, 2021</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3 fs-6">
                                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="View detail" aria-label="Views">
                                                      <ion-icon name="eye-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Edit info" aria-label="Edit">
                                                      <ion-icon name="pencil-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Delete" aria-label="Delete">
                                                      <ion-icon name="trash-outline"></ion-icon>
                                                  </a>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>#38567</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3">
                                                  <div class="product-box border">
                                                      <img src="assets/images/products/17.png" alt="">
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-name mb-1">Women Red Heals</h6>
                                                  </div>
                                              </div>
                                          </td>
                                          <td><span class="badge bg-danger">Cancelled</span></td>
                                          <td>Apr 10, 2021</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3 fs-6">
                                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="View detail" aria-label="Views">
                                                      <ion-icon name="eye-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Edit info" aria-label="Edit">
                                                      <ion-icon name="pencil-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Delete" aria-label="Delete">
                                                      <ion-icon name="trash-outline"></ion-icon>
                                                  </a>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>#48572</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3">
                                                  <div class="product-box border">
                                                      <img src="assets/images/products/04.png" alt="">
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                                  </div>
                                              </div>
                                          </td>
                                          <td><span class="badge bg-success">Completed</span></td>
                                          <td>Apr 11, 2021</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3 fs-6">
                                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="View detail" aria-label="Views">
                                                      <ion-icon name="eye-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Edit info" aria-label="Edit">
                                                      <ion-icon name="pencil-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Delete" aria-label="Delete">
                                                      <ion-icon name="trash-outline"></ion-icon>
                                                  </a>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>#96857</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3">
                                                  <div class="product-box border">
                                                      <img src="assets/images/products/10.png" alt="">
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                                                  </div>
                                              </div>
                                          </td>
                                          <td><span class="badge bg-danger">Cancelled</span></td>
                                          <td>Apr 15, 2021</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3 fs-6">
                                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="View detail" aria-label="Views">
                                                      <ion-icon name="eye-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Edit info" aria-label="Edit">
                                                      <ion-icon name="pencil-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Delete" aria-label="Delete">
                                                      <ion-icon name="trash-outline"></ion-icon>
                                                  </a>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>#96857</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3">
                                                  <div class="product-box border">
                                                      <img src="assets/images/products/12.png" alt="">
                                                  </div>
                                                  <div class="product-info">
                                                      <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                                                  </div>
                                              </div>
                                          </td>
                                          <td><span class="badge bg-warning">Pending</span></td>
                                          <td>Apr 18, 2021</td>
                                          <td>
                                              <div class="d-flex align-items-center gap-3 fs-6">
                                                  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="View detail" aria-label="Views">
                                                      <ion-icon name="eye-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Edit info" aria-label="Edit">
                                                      <ion-icon name="pencil-outline"></ion-icon>
                                                  </a>
                                                  <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                      data-bs-placement="bottom" title=""
                                                      data-bs-original-title="Delete" aria-label="Delete">
                                                      <ion-icon name="trash-outline"></ion-icon>
                                                  </a>
                                              </div>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
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
                  Copyright © 2023. All right reserved.
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
              <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                  data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
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
