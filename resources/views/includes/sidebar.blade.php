<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{asset(auth()->user()->image)}}" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column pr-3">
            <span class="font-weight-medium mb-2">{{auth()->user()->name}}</span>
            <span class="font-weight-normal">{{auth()->user()->group->name}}</span>
          </div>
          
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Trang chủ</span>
        </a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Quản lý loại phòng </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href={{route('categories.index')}}>Thể loại </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/dropdowns.html">Thùng rác</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Quản lý phòng</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href={{route('rooms.index')}}>Danh sách</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/dropdowns.html">Thùng rác</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('customers.index')}}">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Quản lý khách hàng</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('groups.index')}}">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Quản lý phân quyền</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('orders.index')}}">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Quản lý đặt phòng</span>
        <a class="nav-link" href="{{route('users.index')}}">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Quản lý nhân viên </span>
        </a>
      </li>
      <li class="nav-item sidebar-actions">
        <div class="nav-link">
          <div class="mt-4">
            <ul class="mt-4 pl-0">
              <a class="dropdown-item" href="{{route('logout')}}">
                <li class="mdi mdi-logout mr-2">Signout</li></a>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <div class="container-fluid page-body-wrapper">

     <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
              <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
              <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                <i class="mdi mdi-menu"></i>
              </button>
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count count-varient1">7</span>
                  </a>
                  <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="{{asset('assets/images/faces/face4.jpg')}}" alt="" class="profile-pic" />
                      </div>
                      <div class="preview-item-content">
                        <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                        </p>
                      </div>
                    </a>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="{{asset('assets/images/faces/face3.jpg')}}" alt="" class="profile-pic" />
                      </div>
                      <div class="preview-item-content">
                        <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                        </p>
                      </div>
                    </a>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="{{asset('assets/images/faces/face2.jpg')}}" alt="" class="profile-pic" />
                      </div>
                      <div class="preview-item-content">
                        <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                        </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0">View all activities</p>
                  </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-flex">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count count-varient2">5</span>
                  </a>
                  <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <a class="dropdown-item preview-item">
                      <div class="preview-item-content flex-grow">
                        <span class="badge badge-pill badge-success">Request</span>
                        <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                      </div>
                      <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                    </a>
                    <a class="dropdown-item preview-item">
                      <div class="preview-item-content flex-grow">
                        <span class="badge badge-pill badge-warning">Invoices</span>
                        <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                      </div>
                      <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                    </a>
                    <a class="dropdown-item preview-item">
                      <div class="preview-item-content flex-grow">
                        <span class="badge badge-pill badge-danger">Projects</span>
                        <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                      </div>
                      <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                    </a>
                    <h6 class="p-3 mb-0">See all activity</h6>
                  </div>
                </li>
                <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                  <form class="nav-link form-inline mt-2 mt-md-0">
                    <div class="input-group">
                      <input type="text" name="key" class="form-control" value="{{ request()->key}}" placeholder="Search" />
                      <div class="input-group-append">
                        <span class="input-group-text">
                        <input type="submit" value="" id="confirmn-search" hidden>
                            <label for="confirmn-search">
                        <i class="mdi mdi-magnify"></i>
                    </label>
                        </span>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right ml-lg-auto">
                <li class="nav-item dropdown d-none d-xl-flex border-0">
                  <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-earth"></i> English </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="#"> French </a>
                    <a class="dropdown-item" href="#"> Spain </a>
                    <a class="dropdown-item" href="#"> Latin </a>
                    <a class="dropdown-item" href="#"> Japanese </a>
                  </div>
                </li>
                <li class="nav-item nav-profile dropdown border-0">
                  <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                    <img class="nav-profile-img mr-2" alt="" src="{{asset(auth()->user()->image)}}" />
                    <span class="profile-name">{{auth()->user()->name}}</span>
                  </a>
                  <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                    <a class="dropdown-item" href="{{route('logout')}}">
                      <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </nav>
