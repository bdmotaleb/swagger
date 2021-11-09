<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link href="{{asset('swagger/style.css')}}" rel="stylesheet">
</head>
<body>
    <div id="swagger-ui"></div>
    <script src="{{asset('swagger/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('swagger/swagger-bundle.js')}}"></script>
    <script type="application/javascript">
        const ui = SwaggerUIBundle({
            url: "{{ asset('swagger/swagger.yaml') }}",
            dom_id: '#swagger-ui',
        });
    </script>
</body>
</html>
