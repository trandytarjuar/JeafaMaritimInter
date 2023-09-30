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
                        <li class="breadcrumb-item active">Manfaat Sistem Kerja sama</li>
                    </ol>
                </div>
                <h4 class="page-title">Manfaat Sistem Kerja sama</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Manfaat Sistem Kerja sama</h4>
                    <a href="{{ route ('addmanfaat')}}" class="btn btn-primary">Add</a>

                    <div class="tab-content">
                        <!-- <div class="tab-pane show active" id="basic-datatable-preview"> -->
                        <table id="manfaat_table" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($manfaat as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->deskripsi }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route ('editmanfaat',$row->id)}}"><i class="dripicons-pencil"></i></a>
                                        <a class="btn btn-danger" onclick="confirmDeletemanfaat('{{ $row->id }}')"><i class="dripicons-trash"></i></a>
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
@extends('jquery.about.msk.index')