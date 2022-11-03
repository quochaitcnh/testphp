<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">
        <div class="main-color"></div>
        <div class="main-color"></div>
        <div class="gui-wrapper-1">
            <div class="gui-main-1">
                <form action="{{URL::to('/show')}}" id="gui-form" method="get">
                    <h2 class="gui-title">From Entry Date</h2>
                    <div class="row gui-row">
                        <div class="col-md-6">
                            <div class="gui-field">
                                <label for="from">From</label>
                                <input id="from" type="number" class="form-control" name="from" value="{{ old('from') }}" required>
                            </div>                    
                        </div>
                        <div class="col-md-6">
                            <div class="gui-field">
                                <label for="to">To</label>
                                <input id="to" type="number" class="form-control" name="to" value="{{ old('to') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row gui-row">
                        <div class="col-md-6">
                            <div class="gui-field">
                                <button type="submit" class="btn btn-primary btn-submit" form="gui-form">Submit</button>
                            </div>                    
                        </div>
                        <div class="col-md-6">
                            <div class="gui-field">
                                <button type="reset" class="btn btn-warning btn-clear" form="gui-form">Clear</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>