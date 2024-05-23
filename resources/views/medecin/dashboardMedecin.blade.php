<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrapdash.com/xollo/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 22:41:54 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Xollo</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
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
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/xollo-bootstrap-admin-template/" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/xollo-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="https://demo.bootstrapdash.com/xollo/template/assets/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://demo.bootstrapdash.com/xollo/template/assets/images/logo-mini.svg" alt="logo" /></a>
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
                            <i class="mdi mdi-earth me-2"></i> English </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="#"> French </a>
                            <a class="dropdown-item" href="#"> Spain </a>
                            <a class="dropdown-item" href="#"> Latin </a>
                            <a class="dropdown-item" href="#"> Japanese </a>
                        </div>
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
            <!-- partial:partials/_settings-panel.html -->
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
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
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
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
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
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav nav-height">
                    <li class="nav-item nav-profile">
                        <span class="nav-link" href="#">
                            <div class="profile-image online">
                                <img src="images/faces/face20.jpg" />
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
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-compass-outline menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    @if(Auth::check() && Auth::user()->doctor)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('getBons') }}">
                            <i class="la la-users menu-icon"></i>
                            <span class="menu-title">Bons De commande sevice</span>
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/widgets.html">
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
                                <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/popups.html">
                            <i class="mdi mdi-message-text-outline menu-icon"></i>
                            <span class="menu-title">Popups</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/notifications.html">
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
                                <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
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
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Apps</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/apps/email.html">
                            <i class="mdi mdi-email-open-outline menu-icon"></i>
                            <span class="menu-title">E-mail</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/apps/calendar.html">
                            <i class="mdi mdi-calendar-today menu-icon"></i>
                            <span class="menu-title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/apps/todo.html">
                            <i class="mdi mdi-calendar-text menu-icon"></i>
                            <span class="menu-title">Todo List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/apps/gallery.html">
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
                    <div class="mb-4">
                        <h5>Hi Donald Azin<span class="font-weight-normal ms-2 small">Welcome back, very detailed & featured admin !!</span></h5>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 grid-margin stretch-card">
                            <!--activities card-->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Activities</h5>
                                    <div class="d-flex justify-content-between">
                                        <p>Latest Campaign</p>
                                        <p><i class="mdi mdi-arrow-up me-2 bg-black text-white"></i>58 more than last month</p>
                                    </div>
                                    <canvas id="chart-activity" height="250"></canvas>
                                </div>
                            </div>
                            <!--activities card ends-->
                        </div>
                        <div class="col-xl-6 grid-margin d-flex flex-column justify-content-stretch">
                            <!--statistics cards-->
                            <div class="row grid-margin flex-grow">
                                <div class="col-md-4 stretch-card">
                                    <div class="card card-statistics bg-success text-white">
                                        <div class="card-body">
                                            <div class="icon-wrapper mb-4">
                                                <i class="mdi mdi-security"></i>
                                                <span class="badge"><i class="mdi mdi-alert-circle"></i></span>
                                            </div>
                                            <h6>Maintenance</h6>
                                            <p> last run:Today </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 stretch-card">
                                    <div class="card card-statistics bg-warning text-white">
                                        <div class="card-body">
                                            <div class="icon-wrapper mb-4">
                                                <i class="mdi mdi-speedometer"></i>
                                                <span class="badge"><i class="mdi mdi-alert-circle"></i></span>
                                            </div>
                                            <h6>Speed up</h6>
                                            <p> 6 Errors found </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 stretch-card">
                                    <div class="card card-statistics bg-danger text-white">
                                        <div class="card-body">
                                            <div class="icon-wrapper mb-4">
                                                <i class="mdi mdi-broom"></i>
                                                <span class="badge"><i class="mdi mdi-alert-circle"></i></span>
                                            </div>
                                            <h6>Free space</h6>
                                            <p> 200 mb free </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-grow">
                                <div class="col-md-4 stretch-card">
                                    <div class="card card-statistics bg-info text-white">
                                        <div class="card-body">
                                            <div class="icon-wrapper mb-4">
                                                <i class="mdi mdi-settings"></i>
                                                <span class="badge"><i class="mdi mdi-alert-circle"></i></span>
                                            </div>
                                            <h6>Fix problems</h6>
                                            <p> 9 Problems </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 stretch-card">
                                    <div class="card card-statistics bg-secondary text-white">
                                        <div class="card-body">
                                            <div class="icon-wrapper mb-4">
                                                <i class="mdi mdi-signal"></i>
                                            </div>
                                            <h6>All Functions</h6>
                                            <p> 55 available </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 stretch-card">
                                    <div class="card card-statistics bg-primary text-white">
                                        <div class="card-body">
                                            <div class="icon-wrapper mb-4">
                                                <i class="mdi mdi-autorenew"></i>
                                            </div>
                                            <h6>Update</h6>
                                            <p> New changes </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--statistics cards end-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 grid-margin stretch-card">
                            <div class="card card-data-traffic">
                                <div class="card-body">
                                    <div class="row pb-5 border-bottom">
                                        <div class="col-6 border-right">
                                            <h5 class="mb-0">856958.00</h5>
                                            <p> Data sent </p>
                                            <div class="float-chart-container">
                                                <div id="data-sent-chart" class="float-chart"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">52565</h5>
                                            <p> Invitations sent </p>
                                            <div class="float-chart-container">
                                                <div id="invite-sent-chart" class="float-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-lg-4">
                                            <h6>60.00%</h6>
                                            <p> Read rate </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6>25.00%</h6>
                                            <p> Open Rate </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6>50.00%</h6>
                                            <p> Attachments </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 grid-margin stretch-card">
                            <!--task progress-->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tasks in Progress</h5>
                                    <p class="card-description text-muted"> Your tasks are here </p>
                                    <div class="row">
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Update JQuery </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Code cleanup </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Sprint planning </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Review code </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Update server </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Close tickets </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Latest fonts </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 grid-margin">
                                            <p class="mb-2"> Update demo </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--task progress ends-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 grid-margin stretch-card">
                            <!--updates card-->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Updates</h5>
                                    <ul class="bullet-line-list">
                                        <li>
                                            <h6>User confirmation</h6>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
                                            <p class="text-muted">
                                                <i class="mdi mdi-clock"></i> 7 months ago.
                                            </p>
                                        </li>
                                        <li>
                                            <h6>Continuous evaluation</h6>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
                                            <p class="text-muted">
                                                <i class="mdi mdi-clock"></i> 7 months ago.
                                            </p>
                                        </li>
                                        <li>
                                            <h6>Promotion</h6>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing </p>
                                            <p class="text-muted">
                                                <i class="mdi mdi-clock"></i> 7 months ago.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--updates card ends-->
                        </div>
                        <div class="col-lg-3 grid-margin stretch-card">
                            <!--profile card-->
                            <div class="card card-profile-preview">
                                <img class="card-img-top" src="images/samples/profile_bg.jpg" alt="image">
                                <div class="card-img-overlay d-flex align-items-center profile-details">
                                    <div class="d-flex align-items-end">
                                        <div class="profile-preview-rounded">
                                            <img src="images/faces/face21.jpg" alt="image" />
                                        </div>
                                        <div class="flex-grow text-white">
                                            <p class="mb-0">Jack</p>
                                            <p class="mb-0">Administrator</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <i class="mdi mdi-google-maps"></i> Administrator
                                    </p>
                                    <p>
                                        <i class="mdi mdi-volume-high"></i> Singapore
                                    </p>
                                    <p>
                                        <i class="mdi mdi-buffer"></i> 56 offers
                                    </p>
                                    <div class="row">
                                        <div class="col d-flex justify-content-center">
                                            <button class="btn social-btn btn-facebook icon-btn btn-rounded me-1">
                                                <i class="mdi mdi-facebook"> </i>
                                            </button>
                                            <button class="btn social-btn btn-twitter icon-btn btn-rounded me-1">
                                                <i class="mdi mdi-twitter"></i>
                                            </button>
                                            <button class="btn social-btn btn-dribbble icon-btn btn-rounded me-1">
                                                <i class="mdi mdi-dribbble-box"></i>
                                            </button>
                                            <button class="btn social-btn btn-linkedin icon-btn btn-rounded">
                                                <i class="mdi mdi-linkedin"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--profile card ends-->
                        </div>
                        <div class="col-lg-5 grid-margin stretch-card">
                            <!--projects card-->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Open Projects</h5>
                                    <div class="preview-list">
                                        <div class="preview-item px-0 border-bottom">
                                            <div class="preview-item-content">
                                                <h6 class="preview-subject">Broadcast mockup</h6>
                                                <p>
                                                    <span class="text-muted">5 tasks, 3 issues </span>
                                                </p>
                                            </div>
                                            <div class="preview-actions ms-auto">
                                                <a href="#"><i class="mdi mdi-pencil text-info" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                <a href="#"><i class="mdi mdi-dots-vertical text-black" data-toggle="tooltip" data-placement="bottom" title="Options"></i></a>
                                            </div>
                                        </div>
                                        <div class="preview-item px-0 border-bottom">
                                            <div class="preview-item-content">
                                                <h6 class="preview-subject">Bootstrap 5 </h6>
                                                <p>
                                                    <span class="text-muted">5 tasks, 3 issues </span>
                                                </p>
                                            </div>
                                            <div class="preview-actions ms-auto">
                                                <a href="#"><i class="mdi mdi-pencil text-info" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                <a href="#"><i class="mdi mdi-dots-vertical text-black" data-toggle="tooltip" data-placement="bottom" title="Options"></i></a>
                                            </div>
                                        </div>
                                        <div class="preview-item px-0 border-bottom">
                                            <div class="preview-item-content">
                                                <h6 class="preview-subject">Android app </h6>
                                                <p>
                                                    <span class="text-muted">5 tasks, 3 issues </span>
                                                </p>
                                            </div>
                                            <div class="preview-actions ms-auto">
                                                <a href="#"><i class="mdi mdi-pencil text-info" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                <a href="#"><i class="mdi mdi-dots-vertical text-black" data-toggle="tooltip" data-placement="bottom" title="Options"></i></a>
                                            </div>
                                        </div>
                                        <div class="preview-item px-0 border-bottom">
                                            <div class="preview-item-content">
                                                <h6 class="preview-subject">Design application</h6>
                                                <p>
                                                    <span class="text-muted">5 tasks, 3 issues </span>
                                                </p>
                                            </div>
                                            <div class="preview-actions ms-auto">
                                                <a href="#"><i class="mdi mdi-pencil text-info" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                <a href="#"><i class="mdi mdi-dots-vertical text-black" data-toggle="tooltip" data-placement="bottom" title="Options"></i></a>
                                            </div>
                                        </div>
                                        <div class="preview-item px-0 border-bottom">
                                            <div class="preview-item-content">
                                                <h6 class="preview-subject">Web application</h6>
                                                <p>
                                                    <span class="text-muted">5 tasks, 3 issues </span>
                                                </p>
                                            </div>
                                            <div class="preview-actions ms-auto">
                                                <a href="#"><i class="mdi mdi-pencil text-info" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                <a href="#"><i class="mdi mdi-dots-vertical text-black" data-toggle="tooltip" data-placement="bottom" title="Options"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--projects card ends-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!--Member activity-->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Member activity</h5>
                                    <div class="row">
                                        <div class="col-lg-4 grid-margin grid-margin-lg-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <h4>30,000</h4>
                                                <h6 class="font-weight-normal">Total visit</h6>
                                                <div id="total-visit-chart" sparkType="bar" sparkBarColor="#52d1b7"> 2, 5, 7, 9, 11, 13, 11, 9, 7, 5, 1,2, 5, 7, 9, 11, 13, 11, 9, 7, 5, 1 </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 grid-margin grid-margin-lg-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <h4>26,512</h4>
                                                <h6 class="font-weight-normal">Unique visitor</h6>
                                                <div id="unique-visitor-chart" sparkType="bar" sparkStackedBarColor="[#52d1b7, #f97c71]"> 1:4,2:3,3:5,4:6,5:8,4:7,3:5,2:5,1:4,2:3,3:5,4:6,5:8,4:7,3:5,2:5 </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex flex-column align-items-center">
                                                <h4>14,312</h4>
                                                <h6 class="font-weight-normal">Page views</h6>
                                                <div id="page-views-chart" sparkType="bar" sparkBarColor="#52d1b7" sparkNegBarColor="#f97c71"> 2, 5, -7, 9, -11, 13, 11, -9, 7, 5, -1, 2, 5, -5 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th> Member </th>
                                                            <th> Username </th>
                                                            <th> Project </th>
                                                            <th> Due Date </th>
                                                            <th> Status </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="images/faces/face2.jpg" class="border-rounded" /> Jacob
                                                            </td>
                                                            <td> @Otto </td>
                                                            <td> UI deisgn </td>
                                                            <td> March 24 </td>
                                                            <td>
                                                                <label class="badge badge-pill badge-danger">Pending</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="images/faces/face3.jpg" class="border-rounded" /> Messsy
                                                            </td>
                                                            <td> @Lie </td>
                                                            <td> UX deisgn </td>
                                                            <td> March 25 </td>
                                                            <td>
                                                                <label class="badge badge-pill badge-warning">In progress</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="images/faces/face4.jpg" class="border-rounded" /> John
                                                            </td>
                                                            <td> @alex </td>
                                                            <td> Development </td>
                                                            <td> March 26 </td>
                                                            <td>
                                                                <label class="badge badge-pill badge-info">Fixed</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="images/faces/face5.jpg" class="border-rounded" /> Nina
                                                            </td>
                                                            <td> @nina </td>
                                                            <td> Testing </td>
                                                            <td> March 24 </td>
                                                            <td>
                                                                <label class="badge badge-pill badge-success">Completed</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="images/faces/face6.jpg" class="border-rounded" /> Jwale
                                                            </td>
                                                            <td> @jwa </td>
                                                            <td> UX design </td>
                                                            <td> March 28 </td>
                                                            <td>
                                                                <label class="badge badge-pill badge-warning">In progress</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="images/faces/face7.jpg" class="border-rounded" /> Alex
                                                            </td>
                                                            <td> @alex </td>
                                                            <td> Testing </td>
                                                            <td> March 29 </td>
                                                            <td>
                                                                <label class="badge badge-pill badge-info">Fixed</label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Member activity ends-->
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
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
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <script src="vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="vendors/flot/jquery.flot.js"></script>
    <script src="vendors/flot/jquery.flot.resize.js"></script>
    <script src="vendors/flot/curvedLines.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

<!-- Mirrored from demo.bootstrapdash.com/xollo/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 22:42:19 GMT -->

</html>
