<link rel="stylesheet" href="../frontend/style3.css">
<div>
<h1>Login<br><small>Service Provider</small></h1>

<form action="splogin" method="POST">
 @csrf
    <input type="text" name="spemail" placeholder="Enter Email"/>
    <span style="color:red">@error('spemail'){{$message}}@enderror</span><br>

    <br>
    <input type="password" name="sppassword" placeholder="Enter  Password"/>
    <span style="color:red">@error('sppassword'){{$message}}@enderror</span><br>

    <br>

    <button type="submit" >Login</button>
</form>
</div>
