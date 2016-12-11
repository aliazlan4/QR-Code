@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New QR-Code</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addQRCode') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">URL</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" placeholder="http://www.codistan.pk" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('youtube') ? ' has-error' : '' }}">
                            <label for="youtube" class="col-md-4 control-label">Youtube Video Code</label>

                            <div class="col-md-6">
                                <input id="youtube" type="text" class="form-control" name="youtube" value="{{ old('youtube') }}" placeholder="S-JtVTTMU2A" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Generate QR-Code
                                </button>
                            </div>
                        </div>
                    </form>
                    </br>
                    <!-- <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate('Make me into an QrCode!')) !!} "> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
