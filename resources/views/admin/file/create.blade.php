@extends('admin.layouts.app')


@section('headSection')


<link rel="stylesheet"  href="{{ asset('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('/admin/bower_components/select2/dist/css/select2.min.css')}}">

@endsection
@section('main-content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    @include('admin.layouts.pageHead')
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Titles</h3>
    </div>

    @include('include.message')
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{ route('file.store')}}" method="post" enctype="multipart/form-data">

      {{csrf_field()}}

      <div class="box-body">

        <div class="col-lg-6">

         <div class="form-group">
          <label for="title">Document Title/Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="form-group">
                <label for="Subject">Subject</label>
                <select name="Subject" id="Subject" class="form-control">
                  <option selected disabled>Select Subject</option>
                  <option value="Operating System Concepts">Operating System Concepts</option>
                  <option value="Computer Networks">Computer Networks</option>
                  <option value="Mobile Communication">Mobile Communication</option>
                  <option value="Telecom Network Management(TNM)">Telecom Network Management(TNM)</option>
                  <option value="Computer Programming">Computer Programming</option>
                  <option value="Digital Logic & Design">Digital Logic & Design</option>
                  <option value="Management Information Systems">Management Information Systems</option>
                  <option value="Statistical Analysis — Basic Terminologies">Statistical Analysis — Basic Terminologies</option>
                  
                </select> 
                <!--   <input type="text" name="Subject" class="form-control" id="Subject" placeholder="Subject">-->
       
                </div>

      </div>

      <div class="col-lg-6">
        <br>
        <div class="form-group">

           <div class="pull-right">
          
           <label for="File">File input</label>
          <input type="file" id="file" name="file">


        </div>
         
        </div>
        <br>
         
      </div>
    </div>  
    <!-- /.box-body -->
    
    
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-warning" href='{{ route('file.index')}}'>Back</a>
    </div>
  </form>
</div>
<!-- /.box -->



</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
@section('footerSection')
<script language="JavaScript" type="text/javascript" src="{{ asset('/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script language="JavaScript" src="{{ asset('/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script  language="JavaScript" type="text/javascript" src="{{ asset('/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script type="JavaScript" src="{{ asset('/admin/dist/js/demo.js')}}"></script>
<script src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>


@endsection

