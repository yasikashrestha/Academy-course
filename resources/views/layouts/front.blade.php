<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alime - Personal Portfolio</title>
  <meta name="description" content="Professional portfolio showcasing creative work, videos, and media highlights">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <meta name="author" content="Lovable">

  <meta property="og:title" content="my-alime-showcase">
  <meta property="og:description" content="Lovable Generated Project">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@lovable_dev">
  <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png">
  <link rel="stylesheet" crossorigin="" href="/assets/index-nlUjXxZ7.css">
  <link rel="stylesheet" href="/CSS/style.css">

</head>



<body>
@include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script>
      // Sticky navbar functionality
      window.addEventListener('scroll', function() {
        const navbar = document.querySelector('nav');
        if (window.scrollY > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    </script>
    
</body>

</html>

