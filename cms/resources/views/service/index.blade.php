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
                        <li class="breadcrumb-item active">Service</li>
                    </ol>
                </div>
                <h4 class="page-title">Service</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Service</h4>
                    <a href="{{ route ('addservice')}}" class="btn btn-primary">Add</a>

                    <div class="tab-content">
                        <!-- <div class="tab-pane show active" id="basic-datatable-preview"> -->
                        <table id="service_table" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->description}}</td>

                                    <td>
                                        <a class="btn btn-primary" href="{{ route ('editservice',$row->id)}}"><i class="dripicons-pencil"></i></a>
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
@extends('jquery.service.index')