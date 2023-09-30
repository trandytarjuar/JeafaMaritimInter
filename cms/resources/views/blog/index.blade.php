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
                    <h4 class="header-title">Blog</h4>
                    <a href="{{ route ('addblog')}}" class="btn btn-primary">Add Blog</a>
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
                        <table id="blog_table" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Chapter</th>
                                    <th>Description</th>
                                    <th>Created By</th>
                                    <th>Created Date</th>
                                    <th>Updated By</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if (!empty($row->image))
                                        <img src="{{ asset('uploads/image/blog/' . $row->image) }}" alt="Image" style="max-width: 300px; max-height: 300px;">
                                        @else
                                        <span>No Image Available</span>
                                        @endif
                                    </td>
                                    <td>{{ $row->judul }}</td>
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
                                        <a class="btn btn-primary" href="{{ route ('editblog',$row->id)}}" ><i class="dripicons-pencil"></i></a>
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
@extends('jquery.blog.index')