<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../class/style.css">
    <title>Kontak Saya</title>
</head>
<body>
    <div class="kontak">
        <h2>Hubungi Saya</h2>
        <form>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="4" required></textarea>
            
            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>
