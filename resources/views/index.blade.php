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
    <nav class="purple-header mb-4">
        <h2> <i class="bi bi-flower2"></i> Registro </h2>
        <!-- <img alt="logo.png" src="{{ asset('assets/logo.png') }}" /> -->
    </nav>
    <!-- resources/views/index.blade.php -->
    <form method="post" action="{{ route('submitForm') }}">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-user"></i> <!-- Icon for Full Name -->
            </span>
            <input type="text" name="full_name" required placeholder="Full name" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-briefcase"></i> <!-- Icon for Profession -->
            </span>
            <input type="text" name="profession" required placeholder="Profession" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-hospital"></i> <!-- Icon for Hospital -->
            </span>
            <input type="text" name="hospital" required placeholder="Hospital" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-venus-mars"></i> <!-- Icon for Sex -->
            </span>
            <select name="sex" required placeholder="Sexo" class="form-control">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-calendar"></i> <!-- Icon for Age -->
            </span>
            <input type="number" name="age" required placeholder="age" class="form-control">
        </div>
				<div class="text-center">
            <input name="submit" type="submit" value="Registrar" class="btn-submit">
				</div>
    </form>

    @if (session('formSuccess'))
        <div class="alert alert-success">
            {{ session('formSuccess') }}
            <ul>
                <li><strong>Full Name:</strong> {{ old('full_name') }}</li>
                <li><strong>Profession:</strong> {{ old('profession') }}</li>
                <li><strong>Hospital:</strong> {{ old('hospital') }}</li>
                <li><strong>Sex:</strong> {{ old('sex') }}</li>
                <li><strong>Age:</strong> {{ old('age') }}</li>
            </ul>
        </div>
    @endif

    @if (session('deleteSuccess'))
        <div class="alert alert-danger">
            {{ session('deleteSuccess') }}
        </div>
    @endif

    <footer class="beige-footer"> .... </footer>

    <footer class="purple-footer ">
        <span class="text-sm"> © 2023 Secretaria de Salud Tlaxcala.</span>
    </footer>
</body>

</html>
