<h1><?php
if(isset($this->msg))
    echo "$this->msg";
?></h1>
<div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Please input your data </h3>
            </div>
            <div class="panel-body">
                <form role="form" action="register/regist" method="post">
                    <input type="text" name="name" id="first_name" class="form-control input-sm"
                           placeholder="First Name">
                    <br>
                    <input type="text" name="sname" id="last_name" class="form-control input-sm"
                           placeholder="Last Name">
                    <hr>
                    <input type="email" name="email" id="email" class="form-control input-sm"
                           placeholder="Email Address" required autofocus>
                    <hr>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input "
                               placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="c_password" id="password_confirmation" class="form-control input"
                               placeholder="Confirm Password" required>
                    </div>
                    <br>
                    <input type="submit" value="Register" class="btn btn-info btn-block">
                </form>
            </div>
        </div>
    </div>
</div>