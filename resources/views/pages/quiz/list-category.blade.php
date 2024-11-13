@extends('layouts.app')

@section('content')
<div class="container-xxl">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Quiz Tables</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                <li class="breadcrumb-item active">Quiz Tables</li>
            </ol>
        </div>
    </div>


    <div class="col-md-12 col-xl-12">
        <div class="row g-3">

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="fs-14 mb-1">Total Users</div>
                        </div>

                        <div class="d-flex align-items-baseline mb-2">
                            <div class="fs-22 mb-0 me-2 fw-semibold text-black">91.6K</div>
                            <div class="me-auto">
                                <span class="text-primary d-inline-flex align-items-center">
                                    15%
                                    <i data-feather="trending-up" class="ms-1" style="height: 22px; width: 22px;"></i>
                                </span>
                            </div>
                        </div>
                        <div id="website-visitors" class="apex-charts"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="fs-14 mb-1">Active Users</div>
                        </div>

                        <div class="d-flex align-items-baseline mb-2">
                            <div class="fs-22 mb-0 me-2 fw-semibold text-black">15%</div>
                            <div class="me-auto">
                                <span class="text-danger d-inline-flex align-items-center">
                                    10%
                                    <i data-feather="trending-down" class="ms-1" style="height: 22px; width: 22px;"></i>
                                </span>
                            </div>
                        </div>
                        <div id="conversion-visitors" class="apex-charts"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="fs-14 mb-1">Monthly Income</div>
                        </div>

                        <div class="d-flex align-items-baseline mb-2">
                            <div class="fs-22 mb-0 me-2 fw-semibold text-black">90 Sec</div>
                            <div class="me-auto">
                                <span class="text-success d-inline-flex align-items-center">
                                    25%
                                    <i data-feather="trending-up" class="ms-1" style="height: 22px; width: 22px;"></i>
                                </span>
                            </div>
                        </div>
                        <div id="session-visitors" class="apex-charts"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="fs-14 mb-1">Quiz Draft</div>
                        </div>

                        <div class="d-flex align-items-baseline mb-2">
                            <div class="fs-22 mb-0 me-2 fw-semibold text-black">2,986</div>
                            <div class="me-auto">
                                <span class="text-success d-inline-flex align-items-center">
                                    4%
                                    <i data-feather="trending-up" class="ms-1" style="height: 22px; width: 22px;"></i>
                                </span>
                            </div>
                        </div>
                        <div id="active-users" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end sales -->

    <!-- Button Datatable -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Quiz list</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Instruction</th>
                                <th>Paticipants</th>
                                <th>Date created</th>
                                <th>Last updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Smith</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat nemo dolorem eos ipsa nihil, expedita accusantium adipisci laborum iure?</td>
                                <td>35</td>
                                <td>2023-08-10</td>
                                <td>$110,000</td>
                            </tr>
                            <tr>
                                <td>Emily Davis</td>
                                <td>Marketing Specialist</td>
                                <td>29</td>
                                <td>2022-12-05</td>
                                <td>$85,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection('content')
@section('scripts')
<!-- Datatables js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>

<!-- dataTables.bootstrap5 -->
<script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

<!-- buttons.colVis -->
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>

<!-- buttons.bootstrap5 -->
<script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>

<!-- dataTables.keyTable -->
<script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/libs/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js"></script>

<!-- dataTable.responsive -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

<!-- dataTables.select -->
<script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="assets/libs/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>

<!-- Datatable Demo App Js -->
<script src="assets/js/pages/datatable.init.js"></script>

<!-- App js-->
<script src="assets/js/app.js"></script>
@endsection('scripts')