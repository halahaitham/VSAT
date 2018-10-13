
@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
</head>
<body>
<br>
<h2>Terminal's Table :</h2>
<br>

<table>
    <tr>
        <td>id</td>
        <td>mac_address</td>
        <td>modem_type</td>
        <td>transceivers_information</td>
        <td>service_type</td>
        <td>service_profile</td>
        <td>service_start_date</td>
        <td>service_due_date</td>
        <td>monthly_rate</td>
        <td>organizer</td>
        <td>edit</td>
        <td>delete</td>

    </tr>
    @foreach($terminals as $trm)
        <tr>
            <td>{{$trm->id}}</td>
            <th>{{$trm->mac_address}}</th>
            <th>{{$trm->modem_type}}</th>
            <th>{{$trm->transceivers_information}}</th>
            <th>{{$trm->service_type}}</th>
            <th>{{$trm->service_profile}}</th>
            <th>{{$trm->service_start_date}}</th>
            <th>{{$trm->service_due_date}}</th>
            <th>{{$trm->monthly_rate}}</th>
            <th>{{$trm->organizer}}</th>


            <td style="padding-top: 1em">
                <form action="{{route('terminal.edit',$trm->id)}}" method="get">
                    {{csrf_field()}}
                    {{method_field('edit')}}
                    <input class="btn btn-sm btn-primary"  type="submit" value="edit"  />


                </form>
            </td>

            <td style="padding-top: 1em">
                <form action="{{route('terminal.destroy',$trm->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    <input class="btn btn-sm btn-danger"  type="submit" value="delete"  />


                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>
<form>
    <a href="{{route('terminal.create')}}" class="btn btn-lg btn-success">
        Add new Terminal
    </a>

</form>

</body>
</html>

@endsection