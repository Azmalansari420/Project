<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
<head>
    <meta charset="utf-8" />
    <title>All Bank list | {{env("APP_NAME")}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Start Include Css -->
    @include('admin.headers.maincss')
    <!-- End Include Css -->
</head>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Start Include Header -->
        @include('admin.headers.header')
        <!-- End Include Header -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">All Bank list </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">All Bank list </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-bottom-dashed">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm">
                                            <div>
                                                <h5 class="card-title mb-0">All Bank list</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex flex-wrap align-items-start gap-2">
                                                <button type="button" class="btn btn-info">Copy</button>
                                                <button type="button" class="btn btn-success">Excel</button>
                                                <button type="button" class="btn btn-info">CSV</button>
                                                <button type="button" class="btn btn-danger">PDF</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-bottom-dashed border-bottom">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-xl-6">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search....">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xl-6">
                                                <div class="row g-3">
                                                    <div class="col-sm-3">
                                                        <div>
                                                            <button type="button" class="btn btn-primary w-100"
                                                                onclick="SearchData();"> <i
                                                                    class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <div class="card-body">
                                    <table id="example"
                                        class="table table-bordered"
                                       >
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th>Affiliate ID</th>
                                                <th>Image </th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email </th>
                                                <th>Pancard </th>
                                                <th>Bank Holder Name </th>
                                                <th>Bank Name </th>
                                                <th>Account Number </th>
                                                <th>IFSC </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td>KWI3286 </td>
                                                <td class="name">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img
                                                                src="assets/images/users/avatar-10.jpg" alt=""
                                                                class="avatar-xs rounded-circle"></div>
                                                    </div>
                                                </td>
                                                <td>Lopamudra Das </td>
                                                <td>9658164737</td>
                                                <td>eb2842@canarabank.com </td>
                                                <td>ALBPD1230B</td>
                                                <td>Manorama </td>
                                                <td>Canara Bank </td>
                                                <td>2842101006510</td>
                                                <td>CNRB0002842</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <!-- Start Include Footer -->
            @include('admin.headers.footer')
            <!-- End Include Footer -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Start Include Script -->
    @include('admin.headers.mainjs')
    <!-- End Include Script -->
</body>
</html>