<?php include __DIR__ . "/../../layout/admin/header.php"; ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="/app/index.php/dashboard/users/add">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Add New User
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Rank</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users AS $user): ?>
                <tr>
                    <td><?php echo escape($user->id); ?></td>
                    <td>
                        <a href="/app/index.php/user?id=<?php echo escape($user->id); ?>"><?php echo escape($user->username); ?></a>
                    </td>
                    <td><?php if (!empty($user->rank_id)) {
                            echo escape($this->ranksRepository->findID($user->rank_id)->name);
                        } ?></td>
                    <td>
                        <a href="/app/index.php/dashboard/users/edit?id=<?php echo escape($user->id); ?>"
                           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                        </a>
                        <?php if ($user->username != $_SESSION['login']): ?>
                        <a href="/app/index.php/dashboard/users/delete?id=<?php echo escape($user->id); ?>"
                           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                           onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash-alt fa-sm text-white-50"></i> Delete
                        </a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php include __DIR__ . "/../../layout/admin/footer.php"; ?>