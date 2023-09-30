@extends('template.index')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route ('index')}}">PT. Jeafa Maritim Internasional</a></li>
                        <li class="breadcrumb-item active">Edit Job</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Edit Job</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Job</h4>



                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate>

                                <div class="mb-3">
                                    <label class="form-label" for="title">Job Title</label>
                                    <input type="text" class="form-control" id="title" value="{{ $job->title }}" placeholder="Web developer" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="salary">Salary Min</label>
                                    <span class="input-group-text">Rp
                                    <input type="text" class="form-control" id="salarymin" placeholder="Minimum salary" oninput="formatCurrency(this)">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="salary">Salary Max</label>
                                    <span class="input-group-text">Rp
                                    <input type="text" class="form-control" id="salarymax" placeholder="Minimum salary" oninput="formatCurrency(this)">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="salary">Qualification</label>
                                    <textarea type="text" class="form-control" id="qualifition" placeholder="qualifition" required>{{ $job->kualifikasi }}</textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="benefit">Benefite</label>
                                    <textarea type="text" class="form-control" id="benefite" placeholder="benefite" required>{{ $job->benefit }}</textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="benefit">Job Description</label>
                                    <textarea type="text" class="form-control" id="deskripsi" placeholder="Job description" required>{{ $job->deskripsi }}</textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <input type="hidden" value="{{ $job->id }}" id="jobid">
                               
                                

                                <a class="btn btn-danger" href="{{ route('job')}}">Cancel</a>
                                <a class="btn btn-primary" onclick="submitjob()">Add</a>
                            </form>
                        </div> <!-- end preview-->

                        <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->



    </div>
    <!-- end row -->

</div>
@endsection
@extends('jquery.job.edit')