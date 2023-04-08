<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
    </style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/bfc3faebb3.js" crossorigin="anonymous"></script>
    <!-- stylesheet -->
    <link rel="stylesheet" href="form-style.css">
</head>
<body class="form-container flex items-center justify-center lg:px-20">
    <main class="bg-blue-50 drop-shadow-lg text-gray-600 w-10/12 md:w-6/12 px-10 lg:px-20 py-12 my-12 md:my-0 rounded-3xl">
        <h1 class="text-4xl text-blue-600 font-bold mb-6">Login</h1>
        <form action="login.php" method="post">
            <label for="uname" class="text-xl">User Name</label><br>
            <input type="text" name="uname" id="uname" placeholder="admin"
                class="bg-slate-300 w-full mt-2 mb-2 rounded-3xl border-0"><br>
            <label for="password" class="text-xl">Password</label><br>
            <input type="password" name="password" id="password" placeholder="123456"
                class="bg-slate-300 w-full mt-2 mb-6 rounded-3xl border-0"><br>
            <button type="submit" class="bg-blue-500 hover:bg-orange-400 text-white px-12 py-2 rounded-3xl">Login</button>
        </form>
    </main>
</body>
</html>