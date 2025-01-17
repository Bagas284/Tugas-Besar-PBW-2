<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Tambah Menu untuk {{ $warung->nama_warung }}</h2>
        
        <!-- Form untuk menambahkan menu baru -->
        <form action="{{ route('menu.store', $warung->warung_id) }}" method="POST">
            @csrf
            <!-- Mengirim ID warung secara otomatis -->
            <input type="hidden" name="warung_id" value="{{ $warung->warung_id }}">

            <div class="mb-3">
                <label for="nama_menu" class="form-label">Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control" id="nama_menu" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga" required>
            </div>

            <div class="mb-3">
                <label for="ketersediaan" class="form-label">Ketersediaan</label>
                <select name="ketersediaan" id="ketersediaan" class="form-select" required>
                    <option value="tersedia">Tersedia</option>
                    <option value="habis">Habis</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Menu</button>
        </form>

        <!-- Back button -->
        <a href="{{ route('warung.menu', $warung->warung_id) }}" class="btn btn-secondary mt-3">Kembali ke Menu</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
