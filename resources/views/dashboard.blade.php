<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- CSS MERAH & GELAP --}}
    <style>
        body { padding-bottom: 60px; background-color: #1a1a1a; color: #f0f0f0; } 
        .footer { position: fixed; bottom: 0; width: 100%; height: 50px; line-height: 50px; background-color: #1a1a1a; color: white; }
        .card { background-color: #2c2c2c; border: 1px solid #B71C1C; color: white; box-shadow: 0 0 10px rgba(183, 28, 28, 0.3); }
        .card-header { background-color: #B71C1C !important; border-bottom: none; font-weight: bold; color: white; }
        .display-4 { color: #FF5252; }
    </style>
</head>
<body>
    @include('components.navbar', ['username' => $username])

    <div class="container mt-4">
        <h1 class="mb-4 text-light">Selamat datang, <span style="color: #FF5252;">{{ $username }}</span>!</h1>
        <p class="lead text-light">Ringkasan cepat koleksi Skin Mobile Legends Anda.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">Total Skin Terdaftar</div>
                    <div class="card-body">
                        <h5 class="card-title display-4">8</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">Skin Terlangka (Legend)</div>
                    <div class="card-body">
                        <h5 class="card-title display-4">2</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">Rank Tertinggi Anda</div>
                    <div class="card-body">
                        <h5 class="card-title display-4">Elite</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer/> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>