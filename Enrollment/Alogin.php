<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 text-gray-800">

    <section class="bg-purple-100 rounded-2xl p-5">
        <div class="container mx-auto">   
            <div class="flex">
                <a href="new.html" class="text-2xl font-bold pr-5 border-r border-purple-300 mr-5 ">Enrollment</a>
                <div class="my-auto">
                    <u class="flex border font-bold text-gray-600 list-none decoration-0">
                        <li class="pr-5"><a href="index.html"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Home</a></li>
                        <li class="pr-5"><a href="Alogin.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Admin</a></li>
                        <li class="pr-5"><a href="studentLogin.html"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Student</a></li>
                        <li class="pr-5"><a href="#"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Staff</a></li>
                        <li class="pr-5"><a href="#"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">About</a></li>
                        
                    </u>
                </div>
                <a href="Alogin.html" class="text-medium bg-red-500 text-white px-3 py-2 rounded font-bold ml-auto">Admin</a>
            </div>
        </div>

    </section>
<?php


?>


    <section class="bg-sky-100 rounded-2xl p-10 mt-5 ">
        

        <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-20">

            <h1 class="font-serif font-bold text-center ">Admin Login</h1>


        <form action="" method="" class="mt-5 ">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Enter your username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Log In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-purple-500 hover:text-purple-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>

        </div>


        <div class="bg-sky-100 rounded-2xl p-10"></div>

      
   
    </section>




</body>
</html>
