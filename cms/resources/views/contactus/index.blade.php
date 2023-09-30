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
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
                <h4 class="page-title">Contact Us</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Contact US</h4>
                    <a href="{{ route ('addcontact')}}" class="btn btn-primary">Add</a>

                    <div class="tab-content">
                        <!-- <div class="tab-pane show active" id="basic-datatable-preview"> -->
                        <table id="contact_table" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gmaps</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$row->gmaps}}</td>
                                    <td>{{$row->alamat}}</td>
                                    <td>{{$row->no_telp}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->created_by}}</td>
                                    <td>{{$row->update_at}}</td>
                                    <td>
                                        <a href="{{ route ('editcontact',$row->id)}}" class="btn btn-primary"><i class="dripicons-pencil"></i></a>
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