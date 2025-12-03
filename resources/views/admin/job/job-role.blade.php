@extends('admin.layouts.main')
@section('main-section')
    @push('styles')
        <!-- Daterangepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
        <!-- Summernote CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-lite.min.css') }}">
    @endpush

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="page-title">Total Jobs Role<span
                                        class="count-title">{{ $jobroles->count() }}</span></h4>
                            </div>
                            <div class="col-4 text-end">
                                <div class="head-icons">
                                    <a href="deals.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Refresh">
                                        <i class="ti ti-refresh-dot"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Collapse" id="collapse-header">
                                        <i class="ti ti-chevrons-up"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-header">
                            <!-- Search -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <div class="icon-form mb-3 mb-sm-0">
                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search Deals">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">

                                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#create_jobcategory"><i
                                                class="ti ti-square-rounded-plus me-2"></i>Add New Job Role</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Search -->
                        </div>
                        <div class="card-body">

                            <!-- Contact List -->
                            <div class="table-responsive custom-table">
                                <table class="table" id="deal_list">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>S.No</th>
                                            <th class="no-sort">
                                                <label class="checkboxs"><input type="checkbox" id="select-all"><span
                                                        class="checkmarks"></span></label>
                                            </th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>desc.</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobroles as $jobrole)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <label class="checkboxs">
                                                        <input type="checkbox" class="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </td>

                                                <td>{{ $jobrole->name }}</td>
                                                <td>{{ $jobrole->jobCategory->name }}</td>
                                                <td>{{ $jobrole->description }}</td>
                                                <td>
                                                    @if ($jobrole->status == 1)
                                                        <span class="badge bg-success-light">Active</span>
                                                    @else
                                                        <span class="badge bg-danger-light">Inactive</span>
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" class="me-3" data-bs-toggle="offcanvas"
                                                        data-bs-target="#offcanvas_edit{{ $jobrole->id }}">
                                                        <i class="ti ti-pencil"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#delete_deal{{ $jobrole->id }}">
                                                        <i class="ti ti-trash"></i>
                                                    </a>
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

        </div>
    </div>
    <!-- /Page Wrapper -->

    @foreach ($jobroles as $jobrole)
        <!-- Edit Deals -->
        <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit{{ $jobrole->id }}">
            <div class="offcanvas-header border-bottom">
                <h5 class="fw-semibold">Edit Job Role</h5>
                <button type="button"
                    class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
                    data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <form action="{{ route('jobrole.update', $jobrole->id) }}" method="post">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="col-form-label">Job Category</label>
                                <select class="form-select" name="job_category_id">
                                    @foreach ($jobcategories as $jobcategory)
                                        <option value="{{ $jobcategory->id }}"
                                            {{ $jobrole->job_category_id == $jobcategory->id ? 'selected' : '' }}>
                                            {{ $jobcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ old('name', $jobrole->name) }}"
                                        name="name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" rows="4">{{ old('description', $jobrole->description) }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Status</label>
                                    <select class="form-select" class="select" name="status">
                                        <option value="1" {{ $jobrole->status == 1 ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0"{{ $jobrole->status == 0 ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                </form>
            </div>

        </div>
        <!-- /Edit Deals -->

        <!-- Delete Deal -->
        <div class="modal fade" id="delete_deal{{ $jobrole->id }}" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
                                <i class="ti ti-trash-x fs-36 text-danger"></i>
                            </div>
                            <h4 class="mb-2">Remove Deal?</h4>
                            <p class="mb-0">Are you sure you want to remove <br> deal you selected.</p>
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                                <form action="{{ route('jobcategory.destroy', $jobrole->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- /Delete Deal -->

    <!-- Create Deal -->
    <div class="modal custom-modal fade" id="create_jobcategory" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header (Title + Close Button) -->
                <div class="modal-header">
                    <h5 class="modal-title">Create Job Role</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{ route('jobrole.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Job Category</label>
                                    <select class="form-select" name="job_category_id">
                                        @foreach ($jobcategories as $jobcategory)
                                            <option value="{{ $jobcategory->id }}">{{ $jobcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Job Role Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Job Role Name"
                                        value="{{ old('name') }}" name="name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option selected value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Buttons -->
                        <div class="d-flex align-items-center justify-content-end">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- /Create Deal -->
@endsection
