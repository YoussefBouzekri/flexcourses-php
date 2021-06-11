<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/tailwind.css">
    <title>Ninja Seller</title>
</head>
<body class="font-mono bg-gray-900">
    <div class="flex flex-col h-screen">
        <?php require("includes/navbar.html") ?>
        <div class="flex-grow container mx-auto lg:px-60 md:px-40 px-10 pt-5">
            <h2 class="text-3xl my-3 text-indigo-600">Get in touch</h2>
            <form action="" method="post">
                <div>
                    <label for="name" class="block text-gray-300">Your Name</label>
                    <input 
                    type="text" name="name" placeholder="Rick Astley" 
                    class="my-2 border-2 border-gray-700 text-gray-50 rounded-lg w-full h-10 px-3 bg-gray-800 focus:border-indigo-600">
                </div>

                <div>
                    <label for="email" class="block text-gray-300">Email Adresse</label>
                    <input 
                    type="email" name="email" placeholder="rick@astley.com" 
                    class="my-2 border-2 border-gray-700 text-gray-50 rounded-lg w-full h-10 px-3 bg-gray-800 focus:border-indigo-600">
                </div>
                <div class="">
                    <p class="text-gray-300">Upload Attachment (optional)</p>
                    <label class="w-full flex flex-col items-center my-2 p-2 bg-gray-800 text-gray-400 rounded-lg border-2 border-gray-700 cursor-pointer ">
                        <span>PNG, JPG and PDF are accepted up to 5mb</span>
                        <input type='file' class="hidden"/>
                    </label>
                </div>
                <div>
                    <label for="email" class="block text-gray-300">Message</label>
                    <textarea class="bg-gray-800 my-2 block w-full rounded-lg p-3 text-gray-50 border-gray-700 focus:border-indigo-600 border-2" rows="3" placeholder="Never gonna give you up, never gonna let you down.."></textarea>
                </div>
              <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 mt-2 p-2 rounded-lg text-gray-50">Send</button>
            </form>
        </div>
        <?php require("includes/footer.html") ?>

    </div>
</body>
</html>