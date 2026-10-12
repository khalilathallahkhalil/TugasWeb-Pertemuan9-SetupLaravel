<!DOCTYPE html>
<html lang="id">
<head>
    <title>Contact</title>
    <nav class="mb-6 space-x-4 bg-white p-4 rounded shadow max-w-md">
    <a href="/" class="text-blue-600 font-bold hover:underline">Home</a> | 
    <a href="/about" class="text-blue-600 font-bold hover:underline">About</a> | 
    <a href="/contact" class="text-blue-600 font-bold hover:underline">Contact</a>
</nav>
</head>
<body>
    <h1>Halaman Contact</h1>
    <p>Email: {{ $kontak['email'] }}</p>
    <p>Telepon: {{ $kontak['phone'] }}</p>
</body>
</html>