<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
@include('layout.header')

<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="nama" required/>
    <input type="text" name="nim" placeholder="nim" required/>
    <input type="email" name="email" placeholder="email address" required/>
    <input type="password" name="password" placeholder="password" required/>
    <input type="text" name="fakultas" placeholder="fakultas" required/>
    <input type="text" name="jurusan" placeholder="jurusan" required/>
    <input type="text" name="prodi" placeholder="prodi" required/>
    <input type="text" name="tempat_lahir" placeholder="tempat lahir" required/>
    <input type="text" name="tanggal_lahir" placeholder="tanggal lahir" required/>
    <input type="text" name="no_hp" placeholder="no hp/wa" required/>
    <input type="text" name="jumlah_tes" placeholder="jumlah tes" required/>
    <input type="text" name="nama_lembaga" placeholder="nama lembaga" required/>
    <input type="text" name="jenjang_pendidikan" placeholder="jenjang pendidikan" required/>
    <button type="submit" name="kirim">create</button>
    <p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
</form>

</body>
</html>