
<head>
<link rel="stylesheet" type="text/css" href="view/css/loginpagestyle.css">  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    body{
        background-color: orange;
    }  
</style>
</head>

<div class="sidenav">
    <div class="login-main-text">
        <h2>Institute Polytechnic Gaya</h2>
        <h4 class="TitelHeader"> LOGIN PAGE </h4>
        
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method='post' action="start.php?page=monitorpagecontroller">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="naam" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submituser" class="btn btn-black">Login</button>
                <button type="submit" class="btn btn-secondary">Forgot password</button>
            </form>
            <a> </a>
        </div>
    </div>
</div>
