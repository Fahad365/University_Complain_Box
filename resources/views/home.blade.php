@extends('layouts.app')

@section('content')
<link href="{{ asset('frontend/css/complain form.css') }}" rel="stylesheet">
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   


                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="control-group hidden-phone">
  <p class="alert-success">

    <?php

        $message=Session::get('message');

        if($message){
          echo $message;
          Session::put('message',null);
        }

     ?>

  </p>
</div>

      
<form action="/complainshow" method="POST" enctype="multipart/form-data">
   {{csrf_field()}}
  
  
    <h1><strong>Drop Your Complain Here</strong></h1>
    
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control bg-white text-dark"/>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control bg-white text-dark"/>
    </div>



    <div class="form-group">


          <label for="caption">complain type</label>

        <select name="caption" class="form-control bg-white text-dark dropdown" id="caption">

            <option value="" disabled selected>Select</option>  
            <option value="Ragistration">Ragistration</option>
            <option value="Administrative">Administrative</option>
        </select>
    </div>
    
    <div class="form-group file-area">
          <label for="file">Complain File (.PDF Only)</label>
      <input type="file" name="file" id="file" required="required" multiple="multiple"/>
      
      <div class="file-dummy">
          <!-- <div class="success">Great, your files are selected. Keep on.</div>
          <div class="default">Please select some files</div> -->
      </div>
      <button type="submit" class="btn btn-light mt-2">Submit</button>
    </div>
</form>
  


  
  
  
  
  <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
  
  

@endsection
