          <!--start sidebar -->
          <aside class="sidebar-wrapper" data-simplebar="true">
              <div class="sidebar-header">
                  <div>
                      <img src="{{ asset('assets/logo-icon-2.png') }}" class="logo-icon" alt="logo icon">
                  </div>
                  <div>
                      <h4 class="logo-text">Fobia</h4>
                  </div>
              </div>
              <!--navigation-->
              <ul class="metismenu" id="menu">
                  <li>
                      <a href="{{ route('dashboard') }}">
                          <div class="parent-icon">
                              <ion-icon name="home-outline"></ion-icon>
                          </div>
                          <div class="menu-title">Dashboard</div>
                      </a>
                  </li>
                  {{-- Admin --}}
                  @if (Auth::user()->type == 'admin')
                      <li class="menu-label">Admin Dashboard</li>
                      <li>
                          <a href="{{ route('tableuser') }}">
                              <div class="parent-icon">
                                  <ion-icon name="receipt-outline"></ion-icon>
                              </div>
                              <div class="menu-title">User Join</div>
                          </a>
                      </li>
                      <li>
                          <a class="has-arrow" href="javascript:;">
                              <div class="parent-icon">
                                  <ion-icon name="gift-outline"></ion-icon>
                              </div>
                              <div class="menu-title">Asset Review</div>
                          </a>
                          <ul>
                              <li> <a href="component-alerts.html">
                                      <ion-icon name="ellipse-outline"></ion-icon>Status Asset
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="parent-icon">
                                  <ion-icon name="grid-outline"></ion-icon>
                              </div>
                              <div class="menu-title">Landing Page</div>
                          </a>
                      </li>
                  @else
                      <li class="menu-label">Creator Dashboard</li>
                      <li>
                          <a href="{{ route('uploadAsset') }}">
                              <div class="parent-icon">
                                  <ion-icon name="gift-outline"></ion-icon>
                              </div>
                              <div class="menu-title">Upload Asset</div>
                          </a>
                      </li>
                  @endif
                  <li class="menu-label">Account</li>
                  <li>
                      <a href="pages-user-profile.html">
                          <div class="parent-icon">
                              <ion-icon name="person-circle-outline"></ion-icon>
                          </div>
                          <div class="menu-title">User Profile</div>
                      </a>
                  </li>
                  <li>
                      <a href="pages-edit-profile.html">
                          <div class="parent-icon">
                              <ion-icon name="create-outline"></ion-icon>
                          </div>
                          <div class="menu-title">Edit Profile</div>
                      </a>
                  </li>
                  <li class="menu-label">Support</li>
                  <li>
                      <a href="{{ route('index_contact') }}">
                          <div class="parent-icon">
                              <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                          </div>
                          <div class="menu-title">Contact Us</div>
                      </a>
                  </li>
                  <li>
                      <a href="javascript:;">
                          <div class="parent-icon">
                              <ion-icon name="warning-outline"></ion-icon>
                          </div>
                          <div class="menu-title">Report Asset</div>
                      </a>
                  </li>
              </ul>
              <!--end navigation-->
          </aside>
          <!--end sidebar -->
