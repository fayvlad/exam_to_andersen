<?php if (Session::get('role') !== "user"): ?>
<div class="col-md-6">
    <div class="row centered-form">
        <div class="col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please input your data </h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="user/create" method="post">
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
                        <select name="role" class="form-group form-control">
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                            <option value="owner">owner</option>
                        </select>
                        <br>
                        <input type="submit" value="Register" class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<div class="col-md-6">
    <div class="row centered-form">
        <?php foreach ($this->userList as $key => $value): ?>
            <div class="row table-bordered">
                <div class="col-md-1">
                    <?php echo $value['id']; ?>
                </div>
                <div class="col-md-3">
                    <?php echo $value['name']; ?>
                </div>
                <div class="col-md-3">
                    <?php echo $value['sname']; ?>
                </div>
                <?php if (Session::get('role') == "admin"&& $value['role'] != "superadmin" || Session::get('role') == "superadmin"): ?>
                    <div class="col-md-1">
                        <a href="<?php echo URL; ?>/user/edit/<?php echo $value['id']; ?>">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (Session::get('role') == "superadmin"): ?>
                    <div class="col-md-1">
                        <?php if ($value['role'] != "superadmin"): ?>
                            <a href="<?php echo URL; ?>/user/delete/<?php echo $value['id']; ?>">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach ?>
    </div>
</div>
