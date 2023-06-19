<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Laravel Agency Application" />
        <meta name="author" content="" />
        <title>Agency Laravel Application</title>
        {{-- css file linking --}}
        <link href="{{ url('/frontend/css/styles.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ url('/frontend/assets/favicon.ico') }}" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
    </head>
    <body>



        @section('content')
        @show





    {{-- JavaSCript File Linking --}}
    <script src="{{ url('/frontend/js/scripts.js') }}"></script>
    <script src="{{ url('https://cdn.startbootstrap.com/sb-forms-latest.js') }}"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>