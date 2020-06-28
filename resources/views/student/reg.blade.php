@extends('master.app')

@section ('content')
<div class="container">
<div class="card">

<form action="/store" method="post">

<h1>Form</h1>

<div class="row">

<div class="col-md-6">

  <form method="post" action="submit" >
    {{csrf_field()}}
    <div class="form-group">

         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                         <select name="userType">
                            <div class="col-md-6">
                             <option>Select User</option>
                             <option>admin</option>
                             <option>student</option>
                             <option>teacher</option>
                         </div>
                         </select>
                     </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

      <div class="form-group">
      <label>Subject</label>
      <input type="text" class="form-control" name="subject">
    </div>

    <div class="form-group">
      <label>Phone Number</label>
      <input type="text" class="form-control" name="phone">
    </div>

    <div class="form-group">

      <label>Faculty</label>
      <input type="text" class="form-control" name="faculty">
    </div>


    <div class="form-group">

      <label>class</label>
     <input type="text" class="form-control" name="class">

    </div>

    <div class="form-group">

      <label> DOB </label>
      <input type="date" class="form-control" name="dob">

    </div>


    <button class="btn btn-primary">Submit</button>   
</form>

</div>

</div>
</div>

@stop