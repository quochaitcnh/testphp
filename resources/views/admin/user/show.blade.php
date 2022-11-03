<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">        
        <div class="gui-wrapper-2">
            <div class="gui-main-2">
                <div class="group-button">
                    <a class="btn-back" href="{{ URL::to('/') }}">Back</a>
                    {{-- <a class="btn-back" href="{{ URL::to('/') }}">PDF</a> --}}
                    <button type="submit" class="btn-pdf" form="pdf-form">PDF</button>
                    <div class="btn-email-group">
                    <form action="{{URL::to('/pdf')}}" id="pdf-form" method="POST">
                    @csrf
                        <input type="hidden" name="from" value="{{$request->from}}">
                        <input type="hidden" name="to" value="{{$request->to}}">
                        <div class="gui-field gui-field-2">
                                <div class="btn-email">Email</div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" required>
                        </div>     
                    </form>
                    </div>
                </div>               
                @if (!empty($mess_success))
                <div class="alert alert-success" id="sent-message">
                    {{$mess_success}}
                </div>
                @endif
            </div>  
            <div class="main-table table-responsive-xl">
                <table class="table-users table">
                    <colgroup>
                        <col width="10%" />
                        <col width="20%" />
                        <col width="15%" />
                        <col width="15%" />
                        <col width="10%" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Entry Date</th>
                            <th scope="col">Date of Week</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (empty($users))
                            <tr class="table__nodata text-center">
                                <td colspan="5">Nothing Found</td>
                            </tr>
                        @else
                            @foreach ($users as $key => $user)
                            <tr>
                                <td>{{$user->StaffID}}</td>                                
                                <td>{{ $user->Name }}</td>
                                <td>{{ $user->Email }}</td>
                                <td>{{ $user->Entry_Date}}</td>
                                <td class="jp-font">{{ $user->DayofWeek}}</td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table> 
                @if (!empty($users))
                    <div class="total">{{count($users)}} Staff</div> 
                @endif   
                           
            </div>          
        </div>
    </div>
</body>
</html>