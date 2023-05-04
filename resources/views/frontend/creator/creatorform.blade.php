<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>USER REGISTRATION</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- fontawesome cdn for icon -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" /> --}}
  <!-- main css file -->
 <style>
    body{
  margin: 0px;
  padding: 0px;
  background: #1d1d29;
}
.container{
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.my-form{
  background: #040410;
  padding: 30px 50px;
  border-radius: 10px;
}
.form-title{
  text-align: center;
  margin-bottom: 30px;
}
.form-title h1{
  margin: 0px;
  color: #391039;
}
.single-input{
  width: 270px;
  border:1px solid #c1c1c1;
  display: flex;
  margin-bottom: 15px;
}
.single-input i{
  padding: 8px 16px;
  color: #0cd6a8;
}
.single-input input{
  border:0px solid #c1c1c1;
  width: 100%;
  outline: none;
  height: 30px;
  font-size: 18px;
}
.submit-btn{
   border:0px solid #c1c1c1;
   margin-top: 30px;
  
}
.submit-btn input{
   background: #290d29;
   color: #fff;
   cursor: pointer; 
   border-radius: 5px
}
 </style>
</head>
<body>
<div class="container">
    
    <!-- form start -->
  <div class="my-form">
    <div class="form-title">
      <h1>User Registration</h1>
    </div>
    <!-- main form -->
    <form action="{{route('creator.register')}}" method="POST">
        @csrf

      <div class="single-input">
        <input type="text" name="name" placeholder="User Name">
      </div>
      @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
     @enderror


     <div class="single-input">
        <input type="text" name="email" placeholder="Email">
      </div>
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
     @enderror



      <div class="single-input">
        <input type="password" name="password" placeholder="Password">
      </div>
      @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
     @enderror

      <div class="single-input">
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
      </div>
      @error('password_confirmation')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
     @enderror

      <div class="single-input submit-btn">
        <input type="submit" value="Registration">
      </div>
    </form>

  </div>


</div>




  
</body>
</html>