<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../assets/images/logo.svg" alt="logo" class="logo-dark" />
            <img src="../../assets/images/logo-light.svg" alt="logo-light" class="logo-light">
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome stellar dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-start me-2">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ms-2" src="../../assets/images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Henry Klein</p>
                  <p class="font-weight-light text-muted mb-0">kleinhenry@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item navbar-brand-mini-wrapper">
              <a class="nav-link navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            </li>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Henry Klein</p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/icons/font-awesome.html">Font Awesome</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Forms</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/forms/basic_elements.html">Form Elements</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">Basic Table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Extra Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="icon-disc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Help</span></li>
            <li class="nav-item">
              <a class="nav-link" href="../../../../docs/documentation.html" target="_blank">
                <span class="menu-title">Documentation</span>
                <i class="icon-folder-alt menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Buttons </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Single color buttons</h4>
                    <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-primary btn-fw">Primary</button>
                      <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                      <button type="button" class="btn btn-success btn-fw">Success</button>
                      <button type="button" class="btn btn-danger btn-fw">Danger</button>
                      <button type="button" class="btn btn-warning btn-fw">Warning</button>
                      <button type="button" class="btn btn-info btn-fw">Info</button>
                      <button type="button" class="btn btn-light btn-fw">Light</button>
                      <button type="button" class="btn btn-dark btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Inverse buttons</h4>
                    <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                      <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                      <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                      <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                      <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                      <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                      <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                      <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Rounded buttons</h4>
                    <p class="card-description">Add class <code>.btn-rounded</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                      <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                      <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                      <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                      <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                      <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                      <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                      <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Outlined buttons</h4>
                    <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                      <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                      <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                      <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                      <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                      <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                      <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                      <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Normal buttons</h4>
                    <p class="card-description">Use any of the available button classes to quickly create a styled button.</p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-primary">Primary</button>
                      <button type="button" class="btn btn-secondary">Secondary</button>
                      <button type="button" class="btn btn-success">Success</button>
                      <button type="button" class="btn btn-danger">Danger</button>
                      <button type="button" class="btn btn-warning">Warning</button>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-light">Light</button>
                      <button type="button" class="btn btn-dark">Dark</button>
                      <button type="button" class="btn btn-link">Link</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <h4 class="card-title">Icon Buttons</h4>
                        <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-primary btn-rounded btn-icon">
                            <i class="icon-home"></i>
                          </button>
                          <button type="button" class="btn btn-dark btn-rounded btn-icon">
                            <i class="icon-globe"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="icon-envelope-open"></i>
                          </button>
                          <button type="button" class="btn btn-info btn-rounded btn-icon">
                            <i class="icon-star"></i>
                          </button>
                          <button type="button" class="btn btn-success btn-rounded btn-icon">
                            <i class="icon-location-pin"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-inverse-primary btn-icon">
                            <i class="icon-home"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-dark btn-icon">
                            <i class="icon-globe"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-danger btn-icon">
                            <i class="icon-envelope-open"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-info btn-icon">
                            <i class="icon-star"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-success btn-icon">
                            <i class="icon-location-pin"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-heart text-danger"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-music-tone-alt text-dark"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-star text-primary"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-speedometer text-info"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-graph text-success"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-heart"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-music-tone-alt"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-star"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-speedometer"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="icon-graph"></i>
                          </button>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <h4 class="card-title">Button Size</h4>
                        <p class="card-description">Use class <code>.btn-{size}</code></p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                          <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                          <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                        </div>
                        <div class="template-demo mt-4">
                          <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                          <button type="button" class="btn btn-success btn-md">btn-md</button>
                          <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Block buttons</h4>
                    <p class="card-description">Add class <code>.d-grid .gap-2</code></p>
                    <div class="d-grid gap-2">
                      <button type="button" class="btn btn-info btn-lg">Block buttons <i class="icon-menu float-end"></i>
                      </button>
                      <button type="button" class="btn btn-dark btn-lg">Block buttons</button>
                      <button type="button" class="btn btn-primary btn-lg">
                        <i class="mdi mdi-account"></i> Block buttons </button>
                      <button type="button" class="btn btn-outline-secondary btn-lg">Block buttons</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="card-title">Button groups</h4>
                        <p class="card-description">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code></p>
                        <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">1</button>
                            <button type="button" class="btn btn-outline-secondary">2</button>
                            <button type="button" class="btn btn-outline-secondary">3</button>
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-heart"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-calendar"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-clock"></i>
                            </button>
                          </div>
                        </div>
                        <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>
                            <button type="button" class="btn btn-primary">3</button>
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">
                              <i class="icon-heart"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                              <i class="icon-calendar"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                              <i class="icon-clock"></i>
                            </button>
                          </div>
                        </div>
                        <div class="template-demo mt-4">
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-arrow-up"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-menu"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-arrow-down"></i>
                            </button>
                          </div>
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Default</button>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Go back</a>
                                <a class="dropdown-item">Delete</a>
                                <a class="dropdown-item">Swap</a>
                              </div>
                            </div>
                            <button type="button" class="btn btn-outline-secondary">Default</button>
                          </div>
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Top</button>
                            <button type="button" class="btn btn-outline-secondary">Middle</button>
                            <button type="button" class="btn btn-outline-secondary">Bottom</button>
                          </div>
                        </div>
                        <div class="template-demo mt-4">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-star d-block mb-1"></i> Favourites </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-reload d-block mb-1"></i> Reload </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="icon-user d-block mb-1"></i> Users </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h4 class="card-title">Button with text and icon</h4>
                        <p class="card-description">Wrap icon and text inside <code>.btn-icon-text</code> and use <code>.btn-icon-prepend</code> or <code>.btn-icon-append</code> for icon tags</p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="icon-doc btn-icon-prepend"></i> Submit </button>
                          <button type="button" class="btn btn-dark btn-icon-text"> Edit <i class="icon-doc btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-success btn-icon-text">
                            <i class="icon-info btn-icon-prepend"></i> Warning </button>
                        </div>
                        <div class="template-demo">
                          <button type="button" class="btn btn-danger btn-icon-text">
                            <i class="icon-cloud-upload btn-icon-prepend"></i> Upload </button>
                          <button type="button" class="btn btn-info btn-icon-text"> Print <i class="icon-printer btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-warning btn-icon-text">
                            <i class="icon-reload btn-icon-prepend"></i> Reset </button>
                        </div>
                        <div class="template-demo mt-2">
                          <button type="button" class="btn btn-outline-primary btn-icon-text">
                            <i class="icon-doc btn-icon-prepend"></i> Submit </button>
                          <button type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="icon-doc btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-outline-success btn-icon-text">
                            <i class="icon-info btn-icon-prepend"></i> Warning </button>
                        </div>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-danger btn-icon-text">
                            <i class="icon-cloud-upload btn-icon-prepend"></i> Upload </button>
                          <button type="button" class="btn btn-outline-info btn-icon-text"> Print <i class="icon-printer btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-outline-warning btn-icon-text">
                            <i class="icon-reload btn-icon-prepend"></i> Reset </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Social Icon Buttons</h4>
                    <p class="card-description">Add class <code>.btn-social-icon</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-outline-facebook"><i class="icon-social-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="icon-social-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-twitter"><i class="icon-social-twitter"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i class="icon-social-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i class="icon-social-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-google"><i class="icon-social-google"></i></button>
                    </div>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-facebook"><i class="icon-social-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-youtube"><i class="icon-social-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-twitter"><i class="icon-social-twitter"></i></button>
                      <button type="button" class="btn btn-social-icon btn-dribbble"><i class="icon-social-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-linkedin"><i class="icon-social-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-google"><i class="icon-social-google"></i></button>
                    </div>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="icon-social-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="icon-social-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="icon-social-twitter"></i></button>
                      <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i class="icon-social-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i class="icon-social-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-google btn-rounded"><i class="icon-social-google"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Social button with text</h4>
                    <p class="card-description">Add class <code>.btn-social-icon-text</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon-text btn-facebook"><i class="icon-social-facebook"></i>Facebook</button>
                      <button type="button" class="btn btn-social-icon-text btn-youtube"><i class="icon-social-youtube"></i>Youtube</button>
                      <button type="button" class="btn btn-social-icon-text btn-twitter"><i class="icon-social-twitter"></i>Twitter</button>
                      <button type="button" class="btn btn-social-icon-text btn-dribbble"><i class="icon-social-dribbble"></i>Dribbble</button>
                      <button type="button" class="btn btn-social-icon-text btn-linkedin"><i class="icon-social-linkedin"></i>Linkedin</button>
                      <button type="button" class="btn btn-social-icon-text btn-google"><i class="icon-social-google"></i>Google</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 Stellar. All rights reserved. <a href="#"> Terms of use</a><a href="#">Privacy Policy</a></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>