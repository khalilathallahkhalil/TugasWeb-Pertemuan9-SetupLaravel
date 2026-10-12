<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Tugas 9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-8">
    <h1 class="text-3xl font-bold text-blue-600 mb-4">Halaman Utama</h1>
    <p class="mb-2 font-semibold">Daftar Keahlian (Data Dinamis):</p>
    <ul class="list-disc pl-5 bg-white p-4 rounded shadow max-w-md">
        @foreach($skills as $skill)
            <li class="text-gray-700">{{ $skill }}</li>
        @endforeach
    </ul>
</body>
</html>