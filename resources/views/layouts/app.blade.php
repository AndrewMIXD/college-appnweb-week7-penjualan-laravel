<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Penjualan Sederhana')</title>
    <style>
        :root {
            --bg: #f6f7f9;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --line: #e5e7eb;
            --accent: #dc2626;
            --accent-dark: #b91c1c;
            --success: #15803d;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: var(--text);
            background: var(--bg);
        }
        .container { width: min(1050px, 92%); margin: 40px auto; }
        .topbar {
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 24px;
        }
        h1, h2, p { margin-top: 0; }
        .muted { color: var(--muted); }
        .card {
            background: var(--card); border: 1px solid var(--line);
            border-radius: 14px; padding: 22px; margin-bottom: 20px;
        }
        .grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
        label { display: block; font-weight: 600; margin-bottom: 7px; }
        input, select, textarea {
            width: 100%; padding: 11px 12px; border: 1px solid #d1d5db;
            border-radius: 9px; background: white; font: inherit;
        }
        textarea { min-height: 90px; resize: vertical; }
        .full { grid-column: 1 / -1; }
        .actions { display: flex; gap: 8px; flex-wrap: wrap; }
        .btn {
            display: inline-block; border: 0; border-radius: 9px; padding: 10px 14px;
            text-decoration: none; cursor: pointer; font-weight: 600;
            background: #e5e7eb; color: #111827;
        }
        .btn-primary { background: var(--accent); color: white; }
        .btn-primary:hover { background: var(--accent-dark); }
        .btn-danger { background: #fee2e2; color: #991b1b; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 10px; border-bottom: 1px solid var(--line); text-align: left; }
        th { font-size: 13px; color: var(--muted); }
        .alert { padding: 12px 14px; border-radius: 9px; margin-bottom: 18px; }
        .alert-success { background: #dcfce7; color: #166534; }
        .alert-error { background: #fee2e2; color: #991b1b; }
        .error { color: #b91c1c; font-size: 13px; margin-top: 5px; }
        .metric { font-size: 28px; font-weight: 700; }
        .badge { padding: 5px 9px; border-radius: 999px; background: #f3f4f6; font-size: 12px; }
        .badge-selesai { background: #dcfce7; color: #166534; }
        .badge-pending { background: #fef3c7; color: #92400e; }
        .badge-batal { background: #fee2e2; color: #991b1b; }
        @media (max-width: 700px) {
            .grid { grid-template-columns: 1fr; }
            .topbar { align-items: flex-start; gap: 12px; flex-direction: column; }
            table { display: block; overflow-x: auto; }
        }
    </style>
</head>
<body>
    <main class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>
</body>
</html>