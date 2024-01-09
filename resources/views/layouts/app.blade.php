<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
					integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add this line to your <head> tag -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('/../../css/main.css') }}">
</head>

<body>
    <!-- Navbar -->
		    <nav class="purple-header mb-4">
						<h2> <i class="bi bi-flower2"></i> Registro </h2>
						<!-- <img alt="logo.png" src="{{ asset('assets/logo.png') }}" /> -->
				</nav>
				<nav>
        <!-- Your navbar content here -->
        <!-- This section will be common to all pages -->
    </nav>
		
    <!-- Content -->
		<!-- <p> This is cool </p> -->
    <div>
        @yield('content')
				</div>

				<!-- Footer -->
				<div class="footer-section">
        <footer class="beige-footer"> .... </footer>
        <footer class="purple-footer">
        <span class="text-sm"> © 2023 Secretaria de Salud Tlaxcala.</span>
        </footer>
    </div>

</body>

</html>
