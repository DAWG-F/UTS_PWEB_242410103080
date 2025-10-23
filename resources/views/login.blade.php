<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    {{-- Wajib ada link Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- CSS MERAH & GELAP (Elegan dan Kuat) --}}
    <style>
        /* Latar belakang Gelap (Hitam/Abu-abu Tua) */
        body { 
            background-color: #1a1a1a; /* Hitam sangat gelap */
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh;
            color: #f0f0f0; /* Teks putih keabu-abuan */
        }
        
        /* Styling Card Login */
        .card { 
            width: 400px; 
            padding: 30px; 
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4); 
            border: 2px solid #B71C1C; /* Merah Marun/Bata Tua */
            border-radius: 12px;
            background-color: #2c2c2c; /* Abu-abu gelap */
        }

        /* Styling Judul */
        .card h3 {
            color: #FF5252; /* Merah terang sebagai aksen */
            font-weight: 700;
        }

        /* Styling Input Field */
        .form-control {
            background-color: #383838;
            border: 1px solid #555555;
            color: white;
        }
        .form-control:focus {
            border-color: #B71C1C;
            box-shadow: 0 0 0 0.25rem rgba(183, 28, 28, 0.5);
            color: white;
            background-color: #3a3a3a;
        }
        .form-control::placeholder {
            color: #aaaaaa;
        }

        /* Styling Tombol Merah Kuat */
        .btn-primary {
            background-color: #B71C1C;
            border-color: #B71C1C;
            color: white; 
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #D32F2F; /* Merah lebih cerah saat hover */
            border-color: #D32F2F;
        }

        /* Error message */
        .alert-danger {
            background-color: #FFCDD2;
            border-color: #D32F2F;
            color: #D32F2F;
        }
    </style>
</head>
<body>

<div class="container py-5 mx-auto">
    <div class="card mx-auto">
        <h3 class="mb-3 text-center">Login</h3>

        {{-- Logika untuk menampilkan pesan error --}}
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        
        {{-- Form action diarahkan ke route POST login --}}
        <form action="/login" method="POST">
            @csrf
            
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

</body>
</html>