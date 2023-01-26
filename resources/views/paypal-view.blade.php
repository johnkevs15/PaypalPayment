<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://www.paypal.com/sdk/js?client-id=AQO9ZdzqKnMDjqM2JRCmFKHioRL_ncK9TRdknGBKqemutD2PvDm_gttlI8Ppxtkla2ZR4XxVahwZjac6&currency=USD"></script>

    <title>Paypal</title>
</head>
<body>
    <a class="btn btn-primary" href="{{route('processpaypal')}}">Pay 10$</a>
    @if (\Session::has('error'))
        <div class="alert alert-danger">{{\Session::get('error')}}</div>
        {{\Session::forget('error')}}
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">{{\Session::get('success')}}</div>
    {{\Session::forget('success')}}
@endif
</body>
</html>


