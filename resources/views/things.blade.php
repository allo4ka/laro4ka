<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                margin-top: 50px;
                margin-left: 50%;
            }
        </style>
    </head>
    <body>

        <div class="content">
            <span id="object_id">
            </span>
            <span id="information" class="links">
                .. information ..
            </span>
        </div>

        <script>
            $.ajax({
                url: 'api/things',
                success: function(data) {
                    $('#object_id').text(data[0]['id']);
                    $('#information').text(data[0]['name']);
                    console.log(data);
                }
            });
        </script>

    </body>
</html>
