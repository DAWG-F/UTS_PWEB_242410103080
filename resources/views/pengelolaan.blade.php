<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Skin</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya wajib agar footer dan tampilan rapi */
        body { padding-bottom: 60px; background-color: #f8f9fa; } 
        .footer { position: fixed; bottom: 0; width: 100%; height: 50px; line-height: 50px; background-color: #343a40; color: white; }
    </style>
</head>
<body>

    @include('components.navbar')

    <div class="container mt-4">
        <h1 class="mb-4">Daftar Koleksi Skin Mobile Legends</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Hero</th>
                        <th>Nama Skin</th>
                        <th>Rarity</th>
                        <th>Harga (Diamond)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skins as $index => $skin)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $skin['hero'] }}</td>
                        <td>{{ $skin['skin_name'] }}</td>
                        <td>
                            <span class="badge bg-{{ 
                                strtolower($skin['rarity']) == 'legend' ? 'danger' : 
                                (strtolower($skin['rarity']) == 'epic' ? 'warning' : 
                                (strtolower($skin['rarity']) == 'special' ? 'primary' : 'info')) 
                            }}">
                                {{ $skin['rarity'] }}
                            </span>
                        </td>
                        <td>{{ $skin['price'] }}</td>
                    </tr>
                    @endforeach

                    @if (count($skins) == 0)
                    <tr>
                        <td colspan="5" class="text-center text-muted">Tidak ada data skin yang tersimpan.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <x-footer/> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>