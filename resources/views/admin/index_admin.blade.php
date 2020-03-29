
@extends('layouts/header')
@section('title', 'Admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard, Welcome {{{ Auth::user()->name}}}</h1>
            <a href="/exportPdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <div class="row">

        </div>
        <!-- /.container-fluid -->
        <img style: width="100%" height="100%" src="{{ asset('/img/1.jpg') }}"></img>
      </div>
      </div>
      <!-- End of Main Content -->
      @endsection

      