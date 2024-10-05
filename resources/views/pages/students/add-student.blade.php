<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wisdom Gate International School</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/vendor/inputmask/css/inputmask.css" />
    <link rel="stylesheet" href="../assets/vendor/bootstrap-select/css/bootstrap-select.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('components.navbar')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('components.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Admission Forms</h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Students</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Admission Form</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Student Info Form -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="student">
                                    <h3 class="section-title">Admission Form</h3>
                                    <p>Add New Students Into the System using this form</p>
                                </div>
                                <div class="card">
                                    <h5 class="card-header">Student Info</h5>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputText3" class="col-form-label">First Name*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputText3" class="col-form-label">Other Name</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputText3" class="col-form-label">Surname*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                        <label for="input-select" class="col-form-label">Class*</label>
                                                        <select class="form-control" id="input-select">
                                                            <option>Class 1</option>
                                                            <option>Class 2</option>
                                                            <option>Class 3</option>
                                                            <option>Class 4</option>
                                                            <option>Class 5</option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Students Picture</label>
                                                    <div class="custom-file mb-3">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">File Input</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Date Of Birth*</label>
                                                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                        </div>
                                                    </div>
                                                    <p>Students age will be derived from Date of Birth</p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Date Of Admission</label>
                                                    <div class="input-group date" id="datetimepicker44" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker44" />
                                                        <div class="input-group-append" data-target="#datetimepicker44" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                        </div>
                                                    </div>
                                                    <p>If left empty, Admission Date will be Todays Date</p>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Hometown*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Nationality*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="input-select" class="col-form-label">Gender*</label>
                                                    <select class="form-control" id="input-select">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Residence Address*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Number of Siblings*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="input-select" class="col-form-label">Living with both Parent*</label>
                                                    <select class="form-control" id="input-select">
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputText3" class="col-form-label">If no, why?*</label>
                                                    <textarea id="inputText3" type="text" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Language Spoken*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Second Language Spoken</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>




                                <div class="card" id="student-health">
                                    <h5 class="card-header">Student Health Info</h5>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputText3" class="col-form-label">Hospital Born*</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Upload Immunization Record</label>
                                                    <div class="custom-file mb-3">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">File Input</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputText3" class="col-form-label">Doctors Name</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputText3" class="col-form-label">Preferred Hospital</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputText3" class="col-form-label">Blood Group Type</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="input-select" class="col-form-label">NHIS?*</label>
                                                    <select class="form-control" id="input-select">
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">List Allergies</label>
                                                    <textarea id="inputText3" type="text" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">List Any Health Challenges</label>
                                                    <textarea id="inputText3" type="text" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputText3" class="col-form-label">Any Special Needs?</label>
                                                    <textarea id="inputText3" type="text" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Our Reference</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputText3" class="col-form-label">Your Reference</label>
                                                    <input id="inputText3" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputText3" class="col-form-label">Headmasters Remarks</label>
                                                    <textarea id="inputText3" type="text" class="form-control"></textarea>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- select options  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="parent">
                                    <h3 class="section-title">Students Parent/Guardian 1</h3>
                                    <p>Info about the Students parent or guardian</p>
                                </div>
                                <div class="card">
                                    <h5 class="card-header">Parent/Guardian 1</h5>
                                    <div class="card-body">
                                        <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="input-select" class="col-form-label">Title*</label>
                                                <select class="form-control" id="input-select">
                                                    <option>Mr.</option>
                                                    <option>Mrs.</option>
                                                    <option>Miss</option>
                                                    <option>Dr.</option>
                                                    <option>Prof.</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputText3" class="col-form-label">First Name*</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputText3" class="col-form-label">Last Names*</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Occupation*</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Employer</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="input-select" class="col-form-label">Level Of Education*</label>
                                                <select class="form-control" id="input-select">
                                                    <option>None</option>
                                                    <option>Primary</option>
                                                    <option>JHS</option>
                                                    <option>SHS</option>
                                                    <option>Diploma</option>
                                                    <option>Bachelors</option>
                                                    <option>Masters</option>
                                                    <option>PHD</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputText3" class="col-form-label">Address*</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Phone Number*</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Email Address</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Relationship to Applicant*</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="card-body border-top">
                                        <h5>Parent/Guardian 2</h5>
                                        <form>

                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="notapplicable" onclick="notapplicableCheck()"><span class="custom-control-label">Not Applicable</span>
                                        </label>

                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="input-select" class="col-form-label">Title*</label>
                                                <select class="form-control" id="parent2-title">
                                                    <option>Mr.</option>
                                                    <option>Mrs.</option>
                                                    <option>Miss</option>
                                                    <option>Dr.</option>
                                                    <option>Prof.</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputText3" class="col-form-label">First Name*</label>
                                                <input id="parent2-fname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputText3" class="col-form-label">Last Names*</label>
                                                <input id="parent2-lname" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Occupation*</label>
                                                <input id="parent2-occupation" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Employer</label>
                                                <input id="parent2-employer" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="input-select" class="col-form-label">Level Of Education*</label>
                                                <select class="form-control" id="parent2-education">
                                                    <option>None</option>
                                                    <option>Primary</option>
                                                    <option>JHS</option>
                                                    <option>SHS</option>
                                                    <option>Diploma</option>
                                                    <option>Bachelors</option>
                                                    <option>Masters</option>
                                                    <option>PHD</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputText3" class="col-form-label">Address*</label>
                                                <input id="parent2-address" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Phone Number*</label>
                                                <input id="parent2-num" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Email Address</label>
                                                <input id="parent2-email" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputText3" class="col-form-label">Relationship to Applicant*</label>
                                                <input id="parent2-relation" type="text" class="form-control">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary btn-block">Submit Form</a>
                        <!-- ============================================================== -->
                        <!-- end select options  -->
                        <!-- ============================================================== -->



                    </div>
                    <!-- ============================================================== -->
                    <!-- sidenavbar -->
                    <!-- ============================================================== -->
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                        <div class="sidebar-nav-fixed">
                            <ul class="list-unstyled">
                                <li><a href="#student" class="active">Student</a></li>
                                <li><a href="#student-health">Student Health Info</a></li>
                                <li><a href="#parent">Parent/Guardian</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sidenavbar -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('components.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script src="../assets/vendor/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
    <script>
    $(function(e) {
        "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
            $(".phone-inputmask").inputmask("(999) 999-9999"),
            $(".international-inputmask").inputmask("+9(999)999-9999"),
            $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
            $(".purchase-inputmask").inputmask("aaaa 9999-****"),
            $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
            $(".ssn-inputmask").inputmask("999-99-9999"),
            $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
            $(".currency-inputmask").inputmask("$9999"),
            $(".percentage-inputmask").inputmask("99%"),
            $(".decimal-inputmask").inputmask({
                alias: "decimal",
                radixPoint: "."
            }),

            $(".email-inputmask").inputmask({
                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                greedy: !1,
                onBeforePaste: function(n, a) {
                    return (e = e.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                }
            })
    });
    </script>
    <script>
        function notapplicableCheck() {
            var isChecked = document.getElementById("notapplicable").checked;
            if (isChecked) {
                document.getElementById("parent2-title").disabled = true
                document.getElementById("parent2-fname").disabled = true
                document.getElementById("parent2-lname").disabled = true
                document.getElementById("parent2-occupation").disabled = true
                document.getElementById("parent2-employer").disabled = true
                document.getElementById("parent2-education").disabled = true
                document.getElementById("parent2-address").disabled = true
                document.getElementById("parent2-num").disabled = true
                document.getElementById("parent2-email").disabled = true
                document.getElementById("parent2-relation").disabled = true
            } else {
                document.getElementById("parent2-title").disabled = false
                document.getElementById("parent2-fname").disabled = false
                document.getElementById("parent2-lname").disabled = false
                document.getElementById("parent2-occupation").disabled = false
                document.getElementById("parent2-employer").disabled = false
                document.getElementById("parent2-education").disabled = false
                document.getElementById("parent2-address").disabled = false
                document.getElementById("parent2-num").disabled = false
                document.getElementById("parent2-email").disabled = false
                document.getElementById("parent2-relation").disabled = false
            }
        }
    </script>
</body>

</html>
