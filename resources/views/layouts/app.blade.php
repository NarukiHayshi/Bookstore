<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSfChMuiJWHKkfeEriKALhHv0PpcE_OxTajlk4HqRr8ivmjGvYJ'); background-size: cover; background-attachment: fixed;">
        
            @include('commons.navbar')
             
            
            @include('commons.error_messages')
            
            @yield('content')
            
        
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        </div>
    </body>
</html>
