<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games Collection</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('GamesController@index') }}" class="navbar-brand">Games Collection</a>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>