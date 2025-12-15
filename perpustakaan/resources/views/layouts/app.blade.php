<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: #f4f6f9;
        }

        .sidebar {
            width: 230px;
            min-height: 100vh;
        }

        .sidebar .nav-link {
            color: #ddd;
            padding: 10px 15px;
            border-radius: 6px;
            transition: 0.2s;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }

        .sidebar .nav-link.active {
            background-color: #0d6efd;
            color: #fff;
        }

        .content-wrapper {
            width: 100%;
        }

        .topbar {
            background: #fff;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar bg-dark p-3">
        <h4 class="text-center text-white mb-3">📚 Perpustakaan</h4>
        <hr class="text-secondary">

        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="/books" class="nav-link {{ request()->is('books*') ? 'active' : '' }}">
                    <i class="bi bi-book"></i> Books
                </a>
            </li>

            <li class="nav-item">
                <a href="/members" class="nav-link {{ request()->is('members*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Members
                </a>
            </li>

            <li class="nav-item">
                <a href="/borrowings" class="nav-link {{ request()->is('borrowings*') ? 'active' : '' }}">
                    <i class="bi bi-arrow-repeat"></i> Borrowings
                </a>
            </li>
        </ul>
    </div>

    <!-- CONTENT -->
    <div class="content-wrapper">

        <!-- TOPBAR -->
        <div class="topbar px-4 py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">@yield('title', 'Dashboard')</h5>
            <span class="text-muted">👤 Admin</span>
        </div>

        <!-- PAGE CONTENT -->
        <div class="p-4">
            @yield('content')
        </div>
    </div>

</div>

</body>
</html>
