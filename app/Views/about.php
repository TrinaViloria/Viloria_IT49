<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-heading">
    <h1>About</h1>
    <p>Viloria TA1 is the first version of a basic Point-of-Sale website created as a laboratory activity using CodeIgniter 4.</p>
</section>

<section class="feature-grid" aria-label="Project details">
    <article class="card">
        <h2>Project Purpose</h2>
        <p>The project demonstrates how routes, controllers, views, and PHP arrays work together in a CodeIgniter application.</p>
    </article>
    <article class="card">
        <h2>Current Features</h2>
        <p>It includes a landing page, an About page, a customer directory, and a user directory with navigation between every page.</p>
    </article>
    <article class="card">
        <h2>Temporary Data</h2>
        <p>Customer and user records currently come from static PHP arrays. No database is required for this version.</p>
    </article>
    <article class="card">
        <h2>Built With</h2>
        <p>The website uses PHP, CodeIgniter 4, HTML, and CSS with a responsive pink interface.</p>
    </article>
</section>
<?= $this->endSection() ?>
