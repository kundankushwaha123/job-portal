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
                                <h4 class="page-title">Settings</h4>
                            </div>
                            <div class="col-4 text-end">
                                <div class="head-icons">
                                    <a href="company-settings.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Collapse" id="collapse-header"><i
                                            class="ti ti-chevrons-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Settings Menu -->
                    <div class="card">
                        <div class="card-body pb-0 pt-2">
                            <ul class="nav nav-tabs nav-tabs-bottom">
                                <li class="nav-item me-3">
                                    <a href="profile.html" class="nav-link px-0">
                                        <i class="ti ti-settings-cog me-2"></i>General Settings
                                    </a>
                                </li>
                                <li class="nav-item me-3">
                                    <a href="company-settings.html" class="nav-link px-0 active">
                                        <i class="ti ti-world-cog me-2"></i>Website Settings
                                    </a>
                                </li>
                                <li class="nav-item me-3">
                                    <a href="invoice-settings.html" class="nav-link px-0">
                                        <i class="ti ti-apps me-2"></i>App Settings
                                    </a>
                                </li>
                                <li class="nav-item me-3">
                                    <a href="email-settings.html" class="nav-link px-0">
                                        <i class="ti ti-device-laptop me-2"></i>System Settings
                                    </a>
                                </li>
                                <li class="nav-item me-3">
                                    <a href="payment-gateways.html" class="nav-link px-0">
                                        <i class="ti ti-moneybag me-2"></i>Financial Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="storage.html" class="nav-link px-0">
                                        <i class="ti ti-flag-cog me-2"></i>Other Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings Menu -->

                    <div class="row">

                        <div class="col-xl-12 col-lg-12">
                            <!-- Company Settings -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-semibold mb-3">Post A New Job</h4>
                                    <form action="{{ route('jobpost.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <!-- Company Info -->
                                        <div class="border-bottom mb-3 pb-3">
                                            <h5 class="fw-semibold mb-1">Company Information</h5>
                                            <p>Provide the company information below</p>
                                        </div>

                                        <div class="border-bottom mb-3">
                                            <div class="row">

                                                <!-- Company Name -->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Company You Are Hiring For
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="company_name"
                                                            required placeholder="Enter Company name">
                                                    </div>
                                                </div>

                                                <!-- Job Title / Category -->
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Job Title / Designation <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select" name="designation_id">
                                                            <option disabled selected>Select Designation</option>
                                                            @foreach ($jobcategories as $jobrole)
                                                                <option value="{{ $jobrole->id }}">{{ $jobrole->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Job Role -->
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Job Role <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select" name="job_role_id">
                                                            <option disabled selected>Select Role</option>
                                                            @foreach ($jobroles as $jobrole)
                                                                <option value="{{ $jobrole->id }}">{{ $jobrole->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Job Type -->
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Job Type</label>
                                                        <select class="form-select" name="job_type" required>
                                                            <option value="full_time">Full Time</option>
                                                            <option value="part_time">Part Time</option>
                                                            <option value="night_shift">Night Shift</option>
                                                            <option value="internship">Internship</option>
                                                            <option value="temporary">Temporary</option>
                                                            <option value="remote">Remote</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Work Location Type -->
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Work Location Type <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select" name="work_location_type" required>
                                                            <option value="work_from_office">Work From Office</option>
                                                            <option value="work_from_home">Work From Home</option>
                                                            <option value="field_job">Field Job</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Pay Type -->
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Pay Type</label>
                                                        <select class="form-select" name="pay_type" required>
                                                            <option value="fixed">Fixed</option>
                                                            <option value="hourly">Hourly</option>
                                                            <option value="fixed+incentive">Fixed + Incentive</option>
                                                            <option value="commission">Commission</option>
                                                            <option value="not_disclosed">Not Disclosed</option>
                                                            <option value="incentive_only">Incentive Only</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Salary -->
                                                <div class="col-md-8">
                                                    <label class="fw-bold mb-2">Salary <span
                                                            class="text-danger">*</span></label>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <input type="number" name="salary_min" class="form-control"
                                                                placeholder="Min Salary">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="number" name="salary_max" class="form-control"
                                                                placeholder="Max Salary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Company Images -->
                                        <div class="border-bottom mb-3 pb-3">
                                            <h5 class="fw-semibold mb-1">Company Images</h5>
                                            <p>Provide the company images</p>
                                        </div>

                                        <div class="border-bottom mb-3">
                                            <div class="row">

                                                <!-- Upload + Preview -->
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Company Logo</label>
                                                        <!-- Upload Input -->
                                                        <input type="file" name="company_logo" class="form-control"
                                                            id="logoInput">
                                                    </div>
                                                </div>

                                                <!-- Contact Email -->
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Contact Email</label>
                                                        <input type="email" name="contact_email" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Contact Phone -->
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Contact Phone</label>
                                                        <input type="text" name="contact_phone" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Website -->
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Website</label>
                                                        <input type="text" name="website" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Image Preview Script -->
                                        {{-- <script>
                                            document.getElementById('logoInput').addEventListener('change', function(event) {
                                                let reader = new FileReader();
                                                reader.onload = function() {
                                                    document.getElementById('logoPreview').src = reader.result;
                                                };
                                                reader.readAsDataURL(event.target.files[0]);
                                            });
                                        </script> --}}


                                        <!-- Candidate Requirements -->
                                        <div class="border-bottom mb-3 pb-3">
                                            <h4 class="fw-semibold mb-1">Candidate Requirements</h4>
                                            <p>We'll use these details to help you find the right candidates.</p>
                                        </div>

                                        <div class="border-bottom mb-3">
                                            <div class="row">

                                                <!-- Minimum Education -->
                                                <label class="fw-bold mb-2">Minimum Education <span
                                                        class="text-danger">*</span></label>
                                                <div class="d-flex flex-wrap gap-3 mb-3">

                                                    <!-- checkbox values -->
                                                    @php
                                                        $educationLevels = [
                                                            '10th',
                                                            '12th',
                                                            'Diploma',
                                                            'Graduate',
                                                            'Post Graduate',
                                                        ];
                                                    @endphp

                                                    @foreach ($educationLevels as $edu)
                                                        <label class="border p-2 rounded bg-light">
                                                            <input type="checkbox" name="education[]"
                                                                value="{{ $edu }}"> {{ $edu }}
                                                        </label>
                                                    @endforeach
                                                </div>

                                                <!-- Experience -->
                                                <div class="col-md-4">
                                                    <label class="fw-bold mb-2">Total Experience <span
                                                            class="text-danger">*</span></label>
                                                    <div class="d-flex flex-wrap gap-3 mb-3">
                                                        @php
                                                            $exp = ['any', 'experienced_only', 'fresher_only'];
                                                        @endphp

                                                        <label class="border p-2 rounded">
                                                            <input type="checkbox" name="experience[]" value="any">
                                                            Any
                                                        </label>

                                                        <label class="border p-2 rounded">
                                                            <input type="checkbox" name="experience[]"
                                                                value="experienced_only"> Experienced Only
                                                        </label>

                                                        <label class="border p-2 rounded">
                                                            <input type="checkbox" name="experience[]"
                                                                value="fresher_only"> Fresher Only
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- Age Requirement -->
                                                <div class="col-md-8">
                                                    <label class="fw-bold mb-2">Age Requirement <span
                                                            class="text-danger">*</span></label>
                                                    <div class="row mb-3">
                                                        <div class="col-md-4">
                                                            <input type="number" name="age_min" class="form-control"
                                                                placeholder="Min Age">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="number" name="age_max" class="form-control"
                                                                placeholder="Max Age">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Job Description -->
                                                <div class="col-md-12">
                                                    <label class="fw-bold mb-2">Job Description <span
                                                            class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="job_description" rows="4"
                                                        placeholder="Describe the job requirements here..." required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="border-bottom mb-3 pb-3">
                                            <h5 class="fw-semibold mb-1">Address</h5>
                                            <p>Please enter the company address details</p>
                                        </div>

                                        <div class="border-bottom mb-3">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Address</label>
                                                        <input type="text" name="address" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Country</label>
                                                        <input type="text" name="country" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">State / Province</label>
                                                        <input type="text" name="state" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Zip Code</label>
                                                        <input type="text" name="zipcode" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        {{-- Other Information --}}
                                        <div class="border-bottom mb-3 pb-3">
                                            <h5 class="fw-semibold mb-1">Other Information</h5>
                                            <p>Provide additional details about the job posting</p>
                                        </div>

                                        <div class="border-bottom mb-3">
                                            <div class="row">

                                                <!-- Deadline -->
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Application Deadline</label>
                                                        <input type="date" name="application_deadline"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Vacancies -->
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Total Vacancies</label>
                                                        <input type="number" name="vacancies" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Status -->
                                                <div class="col-xl-3 col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select class="form-select" name="status">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- posted by  --}}
                                                <input type="hidden" value="{{ Auth::user()->id }}"
                                                    name="jobposted_by">



                                            </div>
                                        </div>

                                        <div>
                                            <a href="#" class="btn btn-light me-2">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>

                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Custom Json Js -->
    <script src="assets/js/jsonscript.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!-- Profile Upload JS -->
    <script src="assets/js/profile-upload.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!--- Custom Js -->
    <!-- Color Picker JS -->
    <script src="assets/plugins/%40simonwep/pickr/pickr.es5.min.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <!--- Custom Js -->
    <script src="assets/js/theme-colorpicker.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>
    <script src="assets/js/script.js" type="fa1cc07b8bbbeb889ee60542-text/javascript"></script>

    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="fa1cc07b8bbbeb889ee60542-|49" defer></script>
    </body>


    <!-- Mirrored from crms.dreamstechnologies.com/html/template/company-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Dec 2024 06:46:19 GMT -->

    </html>
    <!-- /Create Deal --> --}}
@endsection
