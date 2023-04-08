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
    <main
        class="bg-blue-50 drop-shadow-lg text-gray-600 w-10/12 px-2 sm:px-10 lg:px-20 pb-12 rounded-3xl">

        <div class="flex justify-center">
            <img src="./images/3d-illustration-classic-mailbox_643303-26-removebg.png" alt="" class="w-80">
        </div>
        <table class="w-full mb-10">
            <thead>
                <tr class="border-b-2">
                    <th class="w-3/12 text-left text-xl text-blue-600 font-bold px-4 py-2">Name</th>
                    <th class="w-3/12 text-left text-xl text-blue-600 font-bold px-4 py-2">Email</th>
                    <th class="w-6/12 text-left text-xl text-blue-600 font-bold px-4 py-2">Message</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    session_start();

                    // connect database
                    $connect = mysqli_connect('localhost', 'root', '') or die("Error: Could not connect" . mysqli_error());

                    // select database 
                    $select_db = mysqli_select_db($connect, 'contact-form') or die(mysqli_error());

                    $sql = "SELECT * FROM contactinfo";
                    $result = mysqli_query($connect, $sql) or die(mysqli_error());
                    if ($result == true){
                        while($row = mysqli_fetch_assoc($result)){
                            $name = $row['name'];
                            $email = $row['email'];
                            $message = $row['message'];
                            ?>
                            <tr class="border-b-2">
                                <td class="px-4 py-2"><?php echo $name;?></td>
                                <td class="px-4 py-2"><?php echo $email;?></td>
                                <td class="px-4 py-2"><?php echo $message;?></td>
                            </tr>
                            <?php
                        }
                    }
                ?>

            </tbody>
        </table>

        <a href="logout.php" class="flex justify-center font-bold text-blue-500 hover:text-orange-400 mb-1 text-xl">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 mr-2"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
            Logout
        </a>
    </main>
</body>

</html>