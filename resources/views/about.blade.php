<!DOCTYPE html>
<html lang="id">
<head>
    <nav class="mb-6 space-x-4 bg-white p-4 rounded shadow max-w-md">
    <a href="/" class="text-blue-600 font-bold hover:underline">Home</a> | 
    <a href="/about" class="text-blue-600 font-bold hover:underline">About</a> | 
    <a href="/contact" class="text-blue-600 font-bold hover:underline">Contact</a>
</nav>
    <title>About</title>
</head>
<body>
    <h1>Halaman About</h1>
    <p>Nama: {{ $info['nama'] }}</p>
    <p>Kelas: {{ $info['kelas'] }}</p>
</body>
</html>