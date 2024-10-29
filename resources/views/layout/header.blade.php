<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!-- titel di bagian atas -->

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="styles.css" rel="stylesheet"/>
</head>

<body>
    <header class="bg-gray-700 shadow">
        <div class=" container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
            <img src="{{ asset('images/default_logo.png') }}"  class="h-10" height="50" alt="Default Image">
                <!-- <img alt="Universitas Malikussaleh Logo" class="h-10" height="50" src="https://storage.googleapis.com/a1aa/image/sZklJmC26TbSMZW5SCzn2h7uB1CKLwgFzacTZGlXKWV3Sh5E.jpg" width="50"/> -->
                <span class="ml-3 text-xl font-bold text-white "><a href="UptBahasa">UPT bahasa</a></span>
            </div>
            <nav class="flex space-x-10 text-white ">
                <a href="{{ route('profile.show') }}">Profil </a>
                <a href="https://news.unimal.ac.id/">Berita </a>
                <a href="#">Mahasiswa </a>
                <a href="../Data Base/login.php">Pengguna</a>
                <a href="#">Layanan </a>
            </nav>
            <!-- <div class=" flex items-center space-x-4 ">
                <select class="bg-gray-700 text-white">
                    <option>Aceh</option>
                    <option>Batak</option>
                    <option>Jawa</option>
                </select>
                <i class="text-white fas fa-search"></i>
                
            </div> -->
            <div class="flex items-center space-x-4">
            <a href="{{ route('login') }}"><button class="bg-green-500 space-x-6 text-white px-4 py-2 rounded">Login User</button> </a>
                <!-- <button class="bg-green-500 space-x-6 text-white px-4 py-2 rounded">Login User</button> -->
                <img src="{{ asset('images/avatar_default.png') }}"  class="h-10" height="50" alt="Default Image">
            </div>
        </div>
    </header>