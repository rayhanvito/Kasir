<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
    <link rel="stylesheet" href="{{ asset('custom/css/pos.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body>
    <div class="pos-container">
        <div class="pos-nav">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <ul>
                <li class="active"><i data-feather="grid"></i><a href="#">Dashboard</a></li>
                <li><i data-feather="package"></i><a href="#">Inventory</a></li>
                <li><i data-feather="bar-chart-2"></i><a href="#">Reports</a></li>
                <li><i data-feather="settings"></i><a href="#">Settings</a></li>
            </ul>
            <div class="nav-bottom">
                <div class="dark-mode-toggle">
                    <i data-feather="moon"></i>
                    <span>Dark Mode</span>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="user-profile">
                    <img src="{{ asset('images/avatar.png') }}" alt="Avatar">
                    <span>{{ auth()->user()->name }}</span>
                </div>
            </div>
        </div>
        <div class="pos-main">
            @yield('content')
        </div>
    </div>
    <script>
        feather.replace()
    </script>
    <script src="{{ asset('custom/js/pos.js') }}"></script>
</body>
</html>
