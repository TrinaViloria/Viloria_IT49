<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <h1>User Accounts</h1>
</section>
<div class="table-card">
    <table>
        <thead><tr><th scope="col">Username</th><th scope="col">Full Name</th><th scope="col">Role</th></tr></thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><strong><?= esc($user['username']) ?></strong></td>
                    <td><?= esc($user['fullname']) ?></td>
                    <td><span class="badge"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
