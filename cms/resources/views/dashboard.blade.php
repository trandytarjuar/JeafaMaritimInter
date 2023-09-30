@extends('template.index')
@section('header')
@section('content')

<div class="container-fluid">

    

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
           
                <h4 class="page-title">Selamat Datang {{auth()->user()->username}}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

   
    <!-- end row -->


   
    <!-- end row -->

</div>
@endsection