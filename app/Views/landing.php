<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <h1>POS System</h1>
    <p>A simple Point-of-Sale account management website for viewing customer and staff information.</p>
    <div class="actions">
        <a class="button" href="<?= base_url('customers') ?>">View customers</a>
        <a class="button button-secondary" href="<?= base_url('users') ?>">View users</a>
    </div>
</section>

<section class="feature-grid" aria-label="Account pages">
    <article class="card">
        <h2>Customer Accounts</h2>
        <p>View customer names, email addresses, and phone numbers in one organized list.</p>
        <a href="<?= base_url('customers') ?>">Open customer accounts &rarr;</a>
    </article>
    <article class="card">
        <h2>User Accounts</h2>
        <p>View usernames, complete names, and the assigned roles of system staff.</p>
        <a href="<?= base_url('users') ?>">Open user accounts &rarr;</a>
    </article>
</section>
<?= $this->endSection() ?>
