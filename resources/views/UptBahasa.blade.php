<!DOCTYPE html>


<!-- body -->
@include('layout.header')

<title>Beranda</title>

<header>
    
  <!--   STELAN FRAME FULL    -->
<!-- <header class="bg-white shadow">
    <div class=" container mx-auto flex justify-between items-center py-4 px-6">
        <div class="bg-white shadow mx-auto rounded-lg p-6 text-center">

        </div>
    </div>
</header> -->

<main class="bg-white-300  ">
    <div class="bg-white shadow my-3 flex justify-center py-2 px-3">
        <div >
            <img src="{{ asset('images/default.png') }}" class="text-center" alt="Default Image">
        </div>
    </div>
</main>

<main class="bg-white-300 container mx-auto ">
    <div class="bg-white shadow mx-auto rounded-lg p-6 text-center">
       <div class="grid place-items-center">
        <h1 class="text-xl font-bold mb-2"> UPT Bahasa, Kehumasan, dan Penerbitan</h1>
       </div>
    </div>
</main>

    <main class="bg-white-300 container mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <i class="fas fa-chalkboard-teacher text-4xl text-gray-500 mb-4"></i>
                <h2 class="text-xl font-bold mb-2">Pendaftaran TOEFL</h2>
                <p class="text-3xl font-bold mb-4">ITP ETP</p>
                <button class="bg-gray-500 text-white px-4 py-2 rounded">Selengkapnya</button>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <i class="fas fa-university text-4xl text-gray-500 mb-4"></i>
                <h2 class="text-xl font-bold mb-2">Kelas Terbuka</h2>
                <p class="text-3xl font-bold mb-4">7 Kelas</p>
                <button class="bg-gray-500 text-white px-4 py-2 rounded">Selengkapnya</button>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center ">
                <i class="fas fa-file-alt text-4xl text-gray-500 mb-4"></i>
                <h2 class="text-xl font-bold mb-2">Tanggal Tes</h2>
                <p class="text-3xl font-bold mb-4">28 Oktober 2025</p>
                <button class="bg-gray-500 text-white px-4 py-2 rounded">Selengkapnya</button>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <i class="fas fa-users text-4xl text-gray-500 mb-4"></i>
                <h2 class="text-xl font-bold mb-2">Mahasiswa Akt </h2>
                <p class="text-3xl font-bold mb-4">20226</p>
                <button class="bg-gray-500 text-white px-4 py-2 rounded">Selengkapnya</button>
            </div>
        </div>
</header>
        <!-- <div class="text-center mt-12">
            <h2 class="text-3xl font-bold mb-4">Mari Bergabung Menjadi Bagian Dari Kampus Universitas Malikussaleh</h2>
            <button class="bg-green-500 text-white px-6 py-3 rounded-full">Let's Talk <i class="fas fa-arrow-right"></i></button>
        </div> -->
    </main>
</body>
</html>