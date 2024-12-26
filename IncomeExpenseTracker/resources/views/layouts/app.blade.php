<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income & Expense Tracker</title>
</head>
<body>
    <nav>
        <a href="{{ route('transactions.index') }}">Home</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>