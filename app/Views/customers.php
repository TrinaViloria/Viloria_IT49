<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <h1>Customer Accounts</h1>
</section>
<div class="table-card">
    <table>
        <thead><tr><th scope="col">Full Name</th><th scope="col">Email Address</th><th scope="col">Phone Number</th></tr></thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['name']) ?></td>
                    <td><a href="mailto:<?= esc($customer['email'], 'attr') ?>"><?= esc($customer['email']) ?></a></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
