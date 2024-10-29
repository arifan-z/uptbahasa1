
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
@include('layout.header')

<div class="login-page">

    <div class="form">

        <form class="login-form" method="post">

            <?php if (isset($error)) : ?>

                <div class="error">

                    <?php echo $error ?>

                </div>

            <?php endif; ?>


            <main class="bg-gray-300 container mx-auto ">
    <div class="bg-white shadow mx-auto rounded-lg p-6 text-center">
       <div class="grid place-items-center text-center text-black">
            
       </div>
    </div>
</main>

<input type="email" name="email" placeholder="email" required />

<input type="password" name="password" placeholder="password" required />

<button type="submit" name="kirim">login</button>

<p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>

        </form>

    </div>

</div>
</body>
</html>