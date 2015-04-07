    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">User edit</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="user/editSave/<?php echo $this->user['id']; ?>" method="post">
                        <input type="text" name="name" id="first_name" class="form-control input-sm"
                               placeholder="First Name" value="<?php echo $this->user['name']; ?>" required>
                        <br>
                        <input type="text" name="sname" id="last_name" class="form-control input-sm"
                               placeholder="Last Name" value="<?php echo $this->user['sname']; ?>" required>
                        <hr>
                        <input type="email" name="email" id="email" class="form-control input-sm"
                               placeholder="Email Address" value="<?php echo $this->user['email']; ?>" required>
                        <hr>
                        <div class="form-group">
                            <input type="text" name="password" id="password" class="form-control input "
                                   placeholder="Password" value="<?php echo $this->user['password']; ?>" required>
                        </div>
                        <select name="role" class="form-group form-control">
                            <option value="admin"
                                <?php if ($this->user['role'] == 'admin') echo 'selected';?>>
                                admin
                            </option>
                            <option value="user"
                                <?php if ($this->user['role'] == 'user') echo 'selected';?>>
                                user
                            </option>
                            <option value="owner"
                                <?php if ($this->user['role'] == 'owner') echo 'selected';?>>
                                owner
                            </option>
                        </select>
                        <br>
                        <input type="submit" value="Register" class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
