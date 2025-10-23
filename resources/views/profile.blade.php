<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- CSS MERAH & GELAP --}}
    <style>
        body { padding-bottom: 60px; background-color: #1a1a1a; color: #f0f0f0; } 
        .footer { position: fixed; bottom: 0; width: 100%; height: 50px; line-height: 50px; background-color: #1a1a1a; color: white; }
        .card { background-color: #2c2c2c; border: 1px solid #B71C1C; color: white; box-shadow: 0 0 10px rgba(183, 28, 28, 0.3); }
        .card-header { background-color: #B71C1C !important; border-bottom: none; font-weight: bold; color: white; }
        .lead { color: #FF5252; }
    </style>
</head>
<body>
    {{-- Memanggil Navbar (yang akan membawa username via query parameter) --}}
    @include('components.navbar', ['username' => $username])

    <div class="container mt-4">
        <h1 class="mb-4 text-light">Halaman Profile Pengguna</h1>
        
        {{-- Syarat UTS: Menampilkan username dari query parameter --}}
        <p class="lead">Detail akun untuk <span style="color: #FF5252;">Mlers</span>:</p>
        
        <div class="card mt-4 shadow-sm">
            <div class="card-header">Informasi Akun Anda</div>
            <div class="card-body">
                <p class="card-text"><strong>Username Anda:</strong> <span class="text-primary">{{ $username }}</span></p>
                <p class="card-text"><strong>Role:</strong> Visitor</p>
                <p class="card-text"><strong>Akses:</strong> Just See</p>
            </div>
        </div>
    </div>

    <x-footer/> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>