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
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
                <h4 class="page-title">Blog</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Banner</h4>
                    @if(session()->has('datasuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('datasuccess')}}

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('updatesuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('updatesuccess')}}

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="tab-content">
                        <!-- <div class="tab-pane show active" id="basic-datatable-preview"> -->
                        <table id="baanner_table" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Banner 1</th>
                                    <th>Banner 2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($home as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if (!empty($row->banner1))
                                        <img src="{{ asset('uploads/image/home/' . $row->banner1) }}" alt="Image" style="max-width: 300px; max-height: 300px;">
                                        @else
                                        <span>No Image Available</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($row->banner2))
                                        <img src="{{ asset('uploads/image/home/' . $row->banner2) }}" alt="Image" style="max-width: 300px; max-height: 300px;">
                                        @else
                                        <span>No Image Available</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a class="btn btn-primary" href="{{ route ('editbanner',$row->id)}}" ><i class="dripicons-pencil"></i></a>
                                        
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
@extends('jquery.home.index')