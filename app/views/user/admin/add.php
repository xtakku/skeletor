<?php include __DIR__ . "/../../layout/admin/header.php"; ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
    </div>
<?php if (!empty($savedSuccess)): ?>
    <p class="alert alert-success">
        User added successfully.
    </p>
<?php endif; ?>
<?php if (!empty($error)): ?>
    <p class="alert alert-danger">
        <?php echo $error; ?>
    </p>
<?php endif; ?>
    <div class="card">
        <form method="POST" action="/app/index.php/dashboard/users/add" class="form-horizontal">
            <div class="card-header">
                New User
            </div>
            <div class="card-body">
                <input type="text" name="username" id="username" value=""
                       class="form-control" required/>
                <label class="control-label col-md-3" for="username">
                    Username
                </label>
                <select name="rank_id" id="rank_id"
                        class="form form-control col-md-4">
                    <?php foreach ($ranks AS $rank): ?>
                        <option value="<?php echo escape($rank->id); ?>"><?php echo escape($rank->name); ?></option>
                    <?php endforeach; ?>
                </select>
                <label class="control-label col-md-2" for="rank_id">
                    Rank
                </label>
                <input type="email" name="email" id="email" value=""
                       class="form-control"/>
                <label class="control-label col-md-3" for="email">
                    E-Mail
                </label>
                <input type="password" name="password" id="password" value=""
                       class="form-control" required/>
                <label class="control-label col-md-3" for="password">
                    Password
                </label>
                <input type="password" name="password_confirm" id="password_confirm" value=""
                       class="form-control" required/>
                <label class="control-label col-md-3" for="password_confirm">
                    Confirm Password
                </label>
                <br/>
                <button type="submit" name="save" id="save" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus-circle fa-sm text-white-50"></i> Save
                </button>
            </div>
        </form>
    </div>
<?php include __DIR__ . "/../../layout/admin/footer.php"; ?>