@extends('layouts.app')

@section('content')
<!-- Start Content-->
<div class="container-xxl">

    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">General Elements</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                <li class="breadcrumb-item active">General Elements</li>
            </ol>
        </div>
    </div>

    <!-- General Form -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Create New Quiz Category</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form>
                                <!-- Row for Name and Status -->
                                <div class="row mb-4">
                                    <!-- Name Input -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Name</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div>

                                    <!-- Status Select -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="example-select" class="form-label">Status</label>
                                            <select class="form-select" id="example-select">
                                                <option value="">Select status</option>
                                                <option value="active">Active</option>
                                                <option value="draft">Draft</option>
                                                <option value="archived">Archived</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Instructions Textarea -->
                                <div class="mb-4">
                                    <label for="example-textarea" class="form-label">Instructions</label>
                                    <textarea class="form-control" id="example-textarea" rows="5" placeholder="Enter instructions here..." spellcheck="false"></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit">Create</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



</div> <!-- container-fluid -->
@endsection('content')