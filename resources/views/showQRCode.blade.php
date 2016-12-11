@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Save QR-Code</div>

                <div class="panel-body">
                    Shortcode: {{ $shortcode }} </br>
                    Redirect URL: {{ $url }} </br>
                    Youtube Video Code: {{ $youtube }} </br>
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($qr_code_url)) !!} ">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
