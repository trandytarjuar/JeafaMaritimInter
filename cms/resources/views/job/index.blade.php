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
                        <li class="breadcrumb-item active">Job</li>
                    </ol>
                </div>
                <h4 class="page-title">Job Portal</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Job Portal</h4>
                    <a href="{{ route ('addjob')}}" class="btn btn-primary">Add</a>

                    <div class="tab-content">
                        <!-- <div class="tab-pane show active" id="basic-datatable-preview"> -->
                        <table id="job_table" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Job Title</th>
                                    <th>Gaji</th>
                                    <th>Benefite</th>
                                    <th>Qualification</th>
                                    <th>Job Description</th>
                                    <th>Kualifikasi</th>
                                    <th>Created By</th>
                                    <th>Created Date</th>
                                    <th>Update By</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($job as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>
                                        @if($row->gaji != NULL)
                                        @php
                                        // Memisahkan rentang gaji berdasarkan tanda minus
                                        $gajiParts = explode('-', $row->gaji);

                                        // Mengonversi masing-masing bagian menjadi format rupiah
                                        $minGaji = number_format((float) str_replace('.', '', $gajiParts[0]), 0, ',', '.');
                                        $maxGaji = number_format((float) str_replace('.', '', $gajiParts[1]), 0, ',', '.');
                                        @endphp

                                        {{ $minGaji }} - {{ $maxGaji }}
                                        @endif
                                    </td>
                                    <td>{{ $row->benefit }}</td>
                                    <td>{{ $row->kualifikasi }}</td>
                                    <td>{{ $row->deskripsi }}</td>
                                    <td>{{ $row->create_at }}</td>
                                    <td><?php echo date('d-m-Y', strtotime($row->created_date)); ?></td>
                                    <td>{{ $row->update_at }}</td>
                                    <td>
                                        @if($row->update_date != NULL)
                                        {{ date('d-m-Y', strtotime($row->update_date)) }}
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route ('editjob',$row->id)}}"><i class="dripicons-pencil"></i></a>
                                        <a class="btn btn-danger" onclick="confirmDelete('{{ $row->id }}')"><i class="dripicons-trash"></i></a>
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
@extends('jquery.job.index')