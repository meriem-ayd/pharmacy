<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrapdash.com/xollo/template/demo_1/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 22:43:11 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Xollo</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="https://demo.bootstrapdash.com/xollo/template/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="https://demo.bootstrapdash.com/xollo/template/assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="https://demo.bootstrapdash.com/xollo/template/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-equal"></span>
          </button>
          <form class="form-inline d-none d-lg-block search my-auto">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search here...">
              <div class="input-group-append">
                <i class="mdi mdi-magnify"></i>
              </div>
            </div>
          </form>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-flex">
              <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-bs-toggle="dropdown">

            </li>
            <li class="nav-item dropdown d-none d-lg-flex">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0 bg-white">Notifications</h6>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="text-small text-muted text-right mb-0">4:10 PM</p>
                    <p class="preview-subject">Event today</p>
                    <p class="text-muted text-small ellipsis"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="text-small text-muted text-right mb-0">4:10 PM</p>
                    <p class="preview-subject">Settings</p>
                    <p class="text-muted text-small ellipsis"> Update dashboard </p>
                  </div>
                </a>
                <h6 class="p-3 mb-0 text-center bg-white">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item dropdown d-flex">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-white">Messages</h6>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow">
                    <span class="badge badge-pill badge-danger">REQUEST</span>
                    <p class="preview-subject">Support request</p>
                    <p class="text-small text-muted ellipsis mb-0"> Please provide support for the items in queue </p>
                  </div>
                  <p class="text-small text-muted align-self-start">4:10 PM</p>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow">
                    <span class="badge badge-pill badge-primary">INVOICES</span>
                    <p class="preview-subject">Invoice received</p>
                    <p class="text-small text-muted ellipsis mb-0"> The invoice for the items have been received in your inbox </p>
                  </div>
                  <p class="text-small text-muted align-self-start">1 day ago</p>
                </a>
                <h6 class="p-3 mb-0 text-center bg-white">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-flex">
              <a class="nav-link" href="#">
                <i class="mdi mdi-arrow-expand-all"></i>
              </a>
            </li>
            <li class="nav-item nav-item-highlight d-flex">
              <a class="nav-link" href="#">
                <i class="mdi mdi-logout"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-equal"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles light"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
              <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                </form>
              </div>
              <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Team review meeting at 3.00 PM </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Prepare for presentation </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Resolve all the low priority tickets due today </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked> Schedule meeting for next week </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked> Project review </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                </ul>
              </div>
              <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary me-2"></i>
                  <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
              </div>
              <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary me-2"></i>
                  <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
              </div>
            </div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
              <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pe-3 font-weight-normal">See All</small>
              </div>
              <ul class="chat-list">
                <li class="list active">
                  <div class="profile"><img src="../../../assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../../assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <div class="wrapper d-flex">
                      <p>Catherine</p>
                    </div>
                    <p>Away</p>
                  </div>
                  <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                  <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../../assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../../assets/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                  </div>
                  <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../../assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="../../../assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">47 min</small>
                </li>
              </ul>
            </div>
            <!-- chat tab ends -->
          </div>
        </div>
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav nav-height">
            <li class="nav-item nav-profile">
              <span class="nav-link" href="#">
                <div class="profile-image online">
                  <img src="../../../assets/images/faces/face20.jpg" />
                </div>
                <p> Donald Azin </p>
                <p> donaldazin@xollo.com </p>
                <div class="d-flex justify-content-center mt-4 mb-2">
                  <i class="mdi mdi-gmail me-3"></i>
                  <i class="mdi mdi-account"></i>
                </div>
              </span>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <i class="mdi mdi-compass-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../samples/widgets.html">
                <i class="mdi mdi-atom menu-icon"></i>
                <span class="menu-title">Widgets</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Page Layouts</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../layout/boxed-layout.html">Boxed</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/rtl-layout.html">RTL</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Sidebar Layouts</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../layout/compact-menu.html">Compact menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-collapsed.html">Icon menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">UI Features</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-buffer menu-icon"></i>
                <span class="menu-title">Basic Elements</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/accordions.html">Accordions</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/badges.html">Badges</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/modals.html">Modals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/progress.html">Progress bar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/pagination.html">Pagination</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/tabs.html">Tabs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/typography.html">Typography</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/tooltips.html">Tooltips</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Advanced Elements</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/dragula.html">Dragula</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/clipboard.html">Clipboard</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/context-menu.html">Context menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/slider.html">Sliders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/carousel.html">Carousel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/colcade.html">Colcade</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/loaders.html">Loaders</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ui-features/popups.html">
                <i class="mdi mdi-message-text-outline menu-icon"></i>
                <span class="menu-title">Popups</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ui-features/notifications.html">
                <i class="mdi mdi-bell-outline menu-icon"></i>
                <span class="menu-title">Notifications</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="mdi mdi-emoticon-happy menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../icons/flag-icons.html">Flag icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../icons/font-awesome.html">Font Awesome</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../icons/simple-line-icon.html">Simple line icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../icons/themify.html">Themify icons</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Forms</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="mdi mdi-clipboard-outline menu-icon"></i>
                <span class="menu-title">Form Elements</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="../forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="../forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="../forms/wizard.html">Wizard</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                <i class="mdi mdi-pencil-box-outline menu-icon"></i>
                <span class="menu-title">Editors</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="../forms/text_editor.html">Text editors</a></li>
                  <li class="nav-item"><a class="nav-link" href="../forms/code_editor.html">Code editors</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Data Representation</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-donut menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../charts/chartjs.html">ChartJs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/morris.html">Morris</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/flot-chart.html">Flot</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/google-charts.html">Google charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/sparkline.html">Sparkline js</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/c3.html">C3 charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/chartist.html">Chartists</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/justGage.html">JustGage</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-table menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="basic-table.html">Basic table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="data-table.html">Data table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="js-grid.html">Js-grid</a></li>
                  <li class="nav-item"> <a class="nav-link" href="sortable-table.html">Sortable table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <i class="mdi mdi-map-marker-outline menu-icon"></i>
                <span class="menu-title">Maps</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../maps/vector-map.html">Vector Map</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../maps/google-maps.html">Google Map</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Sample pages</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/login-2.html"> Login 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/register-2.html"> Register 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <i class="mdi mdi-send menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/profile.html"> Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/faq.html"> FAQ </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/faq-2.html"> FAQ 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/news-grid.html"> News grid </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/timeline.html"> Timeline </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/search-results.html"> Search Results </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/portfolio.html"> Portfolio </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <i class="mdi mdi-cart-outline menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
              <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/invoice.html"> Invoice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/pricing-table.html"> Pricing Table </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/orders.html"> Orders </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Apps</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/email.html">
                <i class="mdi mdi-email-open-outline menu-icon"></i>
                <span class="menu-title">E-mail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/calendar.html">
                <i class="mdi mdi-calendar-today menu-icon"></i>
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/todo.html">
                <i class="mdi mdi-calendar-text menu-icon"></i>
                <span class="menu-title">Todo List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/gallery.html">
                <i class="mdi mdi-image-filter menu-icon"></i>
                <span class="menu-title">Gallery</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.bootstrapdash.com/demo/xollo/documentation/documentation.html">
                <i class="mdi mdi-file-outline menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Data table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
              </nav>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"> table DCI</h4>
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>IDdci</th>
                            <th>DCI</th>
                            <th>Forme</th>
                            <th>Dosage</th>
                            <th>Quantité en Stock</th>
                            <th>Prix Unitaire</th>
                            <th>Montant</th>
                            <th>Date de Péremption</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                 @foreach($dcis as $dci)
                <tr id="row{{ $dci->id }}">
                    <td>{{ $dci->IDdci }}</td>
                    <td>{{ $dci->dci }}</td>
                    <td>{{ $dci->forme }}</td>
                    <td>{{ $dci->dosage }}</td>
                    <td>{{ $dci->quantite_en_stock }}</td>
                    <td>{{ $dci->prix_unitaire }}</td>
                    <td>{{ $dci->Montant }}</td>
                    <td>{{ $dci->date_peremption }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modifierModal{{ $dci->id }}">Modifier</button>
                    </td>
                </tr>
                @endforeach









                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="d-block text-center text-sm-start d-sm-inline-block">Copyright © 2023 <a href="#">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../assets/js/data-table.js"></script>
    <!-- End custom js for this page -->
  </body>

<!-- Mirrored from demo.bootstrapdash.com/xollo/template/demo_1/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 22:43:12 GMT -->
</html>
