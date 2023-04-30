<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Options App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link icons-->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">
   <!-- Navigation menu-->
   <nav class="h-16 flex justify-end py-4 px-16">

    <!-- we get the name of CategoriesController to take us to the categories route route('categories.options', ['id' => $category->id])-->
    
      
       
   </nav>
  
  <main class="p-16 flex justify-center">
    @yield('content')
  </main>
  
  </body>
</html>