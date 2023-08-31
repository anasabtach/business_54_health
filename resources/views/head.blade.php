<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="token" content="{{ encryptData(config('constants.CLIENT_ID')) }}">
    @if( !empty(session('user')) )
        <meta name="auth" content="{{ encryptData(session('user')->api_token) }}">
    @endif
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap-5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsve.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/skylo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
    @stack('stylesheet')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend/assets/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        let base_url     = '{{ URL::to("/") }}';
        let api_base_url = '{{ env("API_URL") }}';
    </script>
    <link rel="shortcut icon" href="/favicon.ico">

</head>
