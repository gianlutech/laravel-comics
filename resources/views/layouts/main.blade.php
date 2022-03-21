
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> 
    <title>DC Comics</title>
</head>
<body>
    <!-- header-top -->
    @include('includes.header_top')
    <!-- header-bottom -->
    @include('includes.header_bottom')
    <!-- MAIN -->
    <main>
    @include('includes.jumbotron')
    </main>
    <!-- footer-top -->
    @include('includes.footer_top')
    <!-- footer-bottom -->
    @include('includes.footer_bottom')
</body>
</html>