<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Php Dischi</title>
</head>
<body>
  <header>
     <nav class="navbar navbar-expand-lg">
       <a class="navbar-brand" href="#"><img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="logo"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="{{route('cds')}}">Home<span></span></a>
           </li>
         </ul>
       </div>
     </nav>
   </header>
