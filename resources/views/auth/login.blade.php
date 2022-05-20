<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>Inicio de sesión</title>
</head>
<body>


    <div class="bg-blue-500">
    <img class=" w-16 h-16 absolute img" src="https://lh3.googleusercontent.com/4hCY7QU-BzMMNFOut18uBJ9h3zNJFNelUUB7GVFqXOdU5jTBiGEt31oT9VolQtcIa0OLHp3csKr-i6bNEAlHbp5wxjNHxuYqasSBjSyy7H1WJTnsDjfC_TXySSTOA-uMneCmeFgqsHwyOyO5QMRAhkT1DgX81DZpMdK9tD2IdX2iiI9v6pPUhO62X8jZ1-NQbh8k_ctXPRNh8KQSpRr7IoPEnBymS4BRy9esozc3Z28V2Od-rWv7GNFD5SibyH44_zsVWpfjt-jr4vNxOLXCEVOOtVZ8nhRbLqhoRptpiXNnPgxtA0AzzQ1CsT7NZ6Cu7JvOn2rjMRFl55QKzVASoyJZSFt9NvpB_RDKjpjZCxO0hDcpE5AvQWuoq2xN7cFPYkz5f6IG5o6zyswEmDBVyU4kEWSxzOpYQ44icpvH2l5WJRuJK_g_W8Lo7Xz1rMj0_9CQASP-20Erum6wEDXVP0n4-bO7HsSoS_fuaD1sGJthw_4GIUQrkK3Tn0i63GvP2O1ICbZxvIVvusUFw1NDkoNvCRWUClae87FjXjyAAfNlhQV6neuy16lu-V79auJWr3VqgvrH_Y0xxXujfHQEBb0hoS46C9U_vM0oP5RaHf39XbLqB_kJI-DvmI_pyLYHs_xC77Jvh8S6uIMvIOC85k5y8UzeWwENa9KBqS4uJYi-4AAdrWUoKXOmnsUbxclV_0mHW6aSGS5nWoG7gv2DaoZFXWg06gkP7LbDG9patOnjUKvYBmIN4EYE6J9_0w=w769-h695-no?authuser=0">


        <div class="bg-white border-b-2 border-blue-400 h-36 mx-9 text-center font-semibold">
            <br>
            <br>

            <h1 class="text-blue-500 text-2xl">
                HOSPITAL <br>
                FLORENCIA
            </h1>
        </div>
    
        <div class="bg-white h-screen mx-9 text-center font-semibold">
            <br>
            <h1 class="text-blue-500 text-xl">INICIO DE SESIÓN</h1>
            <br>
            <br>
            <div>
                <form action="{{route('login.authenticate')}}" method="post">
                    @csrf
                    <input type="email" placeholder="Correo Electronico" name="email" class="placeholder-gray-500 p-2 w-60"> <br> <br>
                    <input type="password" placeholder="Password" name="password" class="placeholder-gray-500 p-2 w-60"> <br> <br>
                    <input type="submit" class="p-2 bg-blue-400 btn w-60 " value="INGRESAR"> <br> <br>
                </form>
            </div>
        </div>

    </div>
    
    

</body>
</html>