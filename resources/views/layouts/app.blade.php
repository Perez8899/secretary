<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Categories App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link icons-->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">
   <!-- Navigation menu-->
   <nav class="h-16 flex justify-end py-4 px-16">

    <!-- we get the name of CategoriesController to take us to the categories route-->
    <a href="" class="border border-blue-500
           rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">
           Options</a>

      <a href="" class="border border-blue-500
           rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">
           Categories</a> 
       
      <a href="" class="text-white rounded px-4 pt-1 h-10 bg-green-500
           font-semibold mx-2 hover:bg-green-600">Create</a>
   </nav>
  
  <main class="p-16 flex justify-center">
    @yield('content')
  </main>
  
  </body>
</html>