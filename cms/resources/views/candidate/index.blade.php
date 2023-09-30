@extends('template.index')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">PT. Jeafa Maritim Internasional</a></li>
                        <li class="breadcrumb-item active">Candidate</li>
                    </ol>
                </div>
                <h4 class="page-title">Candidate</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Candidate</h4>

                    <div class="tab-content">
                        <!-- <div class="tab-pane show active" id="basic-datatable-preview"> -->
                        <table id="contact_table" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Job Name</th>
                                    <th>Fullname</th>
                                    <th>Date Of Birth</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Gender</th>
                                    <th>Education</th>
                                    <th>Mariatal Status</th>
                                    <th>CV</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($candidate as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$row->nama_loker}}</td>
                                    <td>{{$row->nama_lengkap}}</td>
                                    <td>{{$row->tgl_lahir}}</td>
                                    <td>{{$row->alamat}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->no_telp}}</td>
                                    <td>{{$row->jenis_kelamin}}</td>
                                    <td>{{$row->pendidikan}}</td>
                                    <td>{{$row->status_pernikahan}}</td>
                                    <td>
                                    <a href="{{ route('cv.serve', ['filename' => $row->document]) }}" target="_blank">Download</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- </div> end preview -->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->



    <!-- end row-->



    <!-- end row-->

</div>

@endsection
@extends('jquery.contact.index')