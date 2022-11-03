<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <style>
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        min-width: 100%;
        min-height: 100%;
    }
    /* @font-face {
        font-family: 'NotoSansCJKjp';
        src: url('../fonts/NotoSansCJKjp-Regular.ttf') format('truetype');
    } */
    .jp-font {
        font-family: NotoSansCJKjp;
        text-align: center;
    }
    .main-wrapper {
        text-align: center;
    }
    .gui-wrapper-2 {
        text-align: center;
    }
    table, td, th {
        border: 1px solid;
        padding: 5px;
    }
    table {
        border-collapse: collapse;
    }
    table.table-users {
        margin-left: auto; 
        margin-right: auto;
}
    </style>
</head>
<body>
    <div class="main-wrapper">        
        <h1>Staff</h1>
        <div class="gui-wrapper-2">
            <div class="main-table table-responsive-xl">
                <table class="table-users table">
                    <thead>
                        <tr>
                            <th style="width:15%" scope="col">ID</th>
                            <th style="width:25%" scope="col">Name</th>
                            <th style="width:25%" scope="col">Email</th>
                            <th style="width:20%" scope="col">Entry Date</th>
                            <th style="width:15%" scope="col">Date of Week</th>
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