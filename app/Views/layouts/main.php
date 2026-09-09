<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | Viloria TA1</title>
    <style>
    :root {
        --ink: #4a1831;
        --muted: #865c72;
        --brand: #db2777;
        --brand-dark: #ad1457;
        --surface: #fffafd;
        --canvas: #fff1f7;
        --line: #f3cddd;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        color: var(--ink);
        background: var(--canvas);
        font: 16px/1.6 system-ui, -apple-system, "Segoe UI", sans-serif;
    }

    a {
        color: var(--brand);
    }

    .site-header {
        background: var(--surface);
        border-bottom: 1px solid var(--line);
    }

    .nav-wrap {
        width: min(1100px, calc(100% - 32px));
        min-height: 72px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }

    .brand {
        color: var(--ink);
        font-size: 1.25rem;
        font-weight: 800;
        text-decoration: none;
        letter-spacing: -.03em;
    }

    .brand span {
        color: var(--brand);
    }

    nav {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    nav a {
        color: #75445e;
        padding: 7px 11px;
        border-radius: 8px;
        font-size: .94rem;
        font-weight: 600;
        text-decoration: none;
    }

    nav a:hover,
    nav a:focus {
        color: var(--brand);
        background: #fce7f3;
    }

    main {
        width: min(1100px, calc(100% - 32px));
        margin: 0 auto;
        padding: 64px 0 80px;
    }

    h1,
    h2 {
        margin-top: 0;
        line-height: 1.15;
        letter-spacing: -.03em;
    }

    h1 {
        max-width: 760px;
        margin-bottom: 18px;
        font-size: clamp(2.2rem, 6vw, 4.5rem);
    }

    h2 {
        font-size: 1.3rem;
    }

    p {
        color: var(--muted);
    }

    .hero {
        padding: 46px 0 68px;
    }

    .hero p,
    .page-heading p {
        max-width: 680px;
        font-size: 1.1rem;
    }

    .eyebrow {
        display: block;
        margin-bottom: 12px;
        color: var(--brand);
        font-size: .78rem;
        font-weight: 800;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    .actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px;
    }

    .button {
        display: inline-block;
        padding: 11px 18px;
        border: 1px solid var(--brand);
        border-radius: 9px;
        color: #fff;
        background: var(--brand);
        font-weight: 700;
        text-decoration: none;
    }

    .button:hover {
        background: var(--brand-dark);
    }

    .button-secondary {
        color: var(--brand);
        background: transparent;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .card,
    .table-card {
        padding: 28px;
        background: var(--surface);
        border: 1px solid var(--line);
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(190, 24, 93, .08);
    }

    .card p {
        margin-bottom: 0;
    }

    .page-heading {
        margin-bottom: 36px;
    }

    .page-heading h1 {
        font-size: clamp(2rem, 5vw, 3.3rem);
    }

    .table-card {
        padding: 0;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    th,
    td {
        padding: 17px 22px;
        border-bottom: 1px solid var(--line);
    }

    th {
        color: #75445e;
        background: #fdf2f8;
        font-size: .78rem;
        letter-spacing: .06em;
        text-transform: uppercase;
    }

    tbody tr:last-child td {
        border-bottom: 0;
    }

    tbody tr:hover {
        background: #fff5f9;
    }

    .badge {
        display: inline-block;
        padding: 3px 10px;
        border-radius: 999px;
        color: var(--brand-dark);
        background: #fce7f3;
        font-size: .84rem;
        font-weight: 700;
    }

    footer {
        padding: 24px 16px;
        color: var(--muted);
        border-top: 1px solid var(--line);
        text-align: center;
    }

    @media (max-width:680px) {
        .nav-wrap {
            align-items: flex-start;
            flex-direction: column;
            padding: 16px 0;
        }

        nav {
            gap: 2px;
        }

        main {
            padding-top: 40px;
        }

        .feature-grid {
            grid-template-columns: 1fr;
        }

        th,
        td {
            padding: 13px 15px;
        }
    }
    </style>
</head>

<body>
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="<?= base_url() ?>">Viloria <span>TA1</span></a>
            <nav aria-label="Main navigation">
                <a href="<?= base_url() ?>">Home</a>
                <a href="<?= base_url('about') ?>">About</a>
                <a href="<?= base_url('customers') ?>">Customer Accounts</a>
                <a href="<?= base_url('users') ?>">User Accounts</a>
            </nav>
        </div>
    </header>
    <main><?= $this->renderSection('content') ?></main>
    <footer>&copy; <?= date('Y') ?> Viloria TA1</footer>
</body>

</html>
