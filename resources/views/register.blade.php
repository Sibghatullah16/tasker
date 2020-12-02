<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="labour.ico" sizes="16x16" type="image/png">
    <style>
        body
{
margin: 0;
padding: 0;
font-family: sans-serif;
background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url({{asset('data/images/image7.jpg')}});
background-size: cover;
background-position: center;
}
.Login-form
{
width: 300px;
box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0);
background: #fff;
padding: 20px;
margin: 8% auto 0;
text-align: center;
}

.Login-form h1
{
color: #1c8adb;
margin-bottom: 30px;

}

.Register-form
{
width: 500px;
box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0);
background: #fff;
padding: 20px;
margin: 8% auto 0;
text-align: center;
}

.Register-form h1
{
color: #1c8adb;
margin-bottom: 30px;

}

.Post-form
{
width: 500px;
box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0);
background: #fff;
padding: 20px;
margin: 8% auto 0;
text-align: left;
}

.Post-form h1
{
color: #1c8adb;
margin-bottom: 30px;

}


.input-box
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 90%;
    border: 1px solid #999;
    outline: none;
}

.input-box2
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 50%;
    border: 1px solid #999;
    outline: none;
}

.input-box3
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 97%;
    border: 1px solid #999;
    outline: none;
}



.input-box4
{
    border-radius: 20px;
    padding: 10px;
    margin: 10px 0;
    width: 43%;
    border: 1px solid #999;
    outline: none;
}






button
{
    color:#fff;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    font-size: 15px;
    margin: 10px 0;
    border: none;
    outline: none;
    cursor: pointer;

}
.signup-btn
{
    background-color: #1c8adb;
}
.gmail-btn
{
    background-color: #ff1717;
}

.Next-btn
{
    background-color:  #1c8adb;
}

a
{
    text-decoration: none;
}
hr{
    margin-top: 20px;
    width: 80%;
}
.or
{
    background: #fff;
    width: 30px;
    margin: -19px auto 10px;
}
img
{

    width: 70px;
    margin-top: -50px;
}



#regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }
  
  h1 {
    text-align: center; 
    color: #1c8adb; 
  }
  .tab {
    display: none;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }
  
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  
  .step.active {
    opacity: 1;
  }
  
  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #4CAF50;
  }





    </style>
</head>
<body>
 <div class="Register-form">
<img src="{{asset('data/images/logo2.png')}}">
  <h1>Register</h1>
 <form action="/register_post" method="post">
 @csrf
 <input type="first name" name="fname" class="input-box" placeholder="First Name" required>
 <input type="last name" name="lname" class="input-box" placeholder="Last Name" required>
 <input type="email" name="email" class="input-box" placeholder="Your Email" required>
 <input type="password" name="password" class="input-box" placeholder="Your Pasword" required>
 <input type="password" name="cpassword" class="input-box" placeholder="Re-Pasword" required>
 <input type="Phone" name="phone" class="input-box" placeholder="Phone no" required>
 <input type="City" name="city" class="input-box" placeholder="City Name" required>
 <input type="Province" name="province" class="input-box" placeholder="Province" required>
 <select class="input-box" name="usertype">
   <option value="customer">Customer</option>
   <option value="labour">Labour</option>
 </select>
 <input type="Address" name="address" class="input-box" placeholder="address" required>
  <p><span><input type="checkbox" required></span>I agree to the terms of services</p>
 <button type="submit"class="signup-btn"> Register</button> 

 </form>


 </div>

</body>
</html