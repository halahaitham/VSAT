
@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
</head>
<body>
<br>
<h2>Customer's Table :</h2>
<br>

<table>
    <tr>
        <td>id</td>
        <td>customer_name</td>
        <td>customer_email</td>
        <td>customer_phone</td>
        <td>city</td>
        <td>details</td>
        <td>balance</td>
        <td>edit</td>
        <td>delete</td>
    </tr>
    @foreach($customer as $user)
        <tr>
            <td>{{$user->id}}</td>
            <th>{{$user->customer_name}}</th>
            <th>{{$user->customer_email}}</th>
            <th>{{$user->customer_phone}}</th>
            <th>{{$user->city}}</th>
            <th>{{$user->details}}</th>
            <th>{{$user->balance}}</th>


            <td style="padding-top: 1em">
                <form action="{{route('customer.edit',$user->id)}}" method="get">
                    {{csrf_field()}}
                    {{method_field('edit')}}
                    <input class="btn btn-sm btn-primary"  type="submit" value="edit"  />


                </form>
            </td>

            <td style="padding-top: 1em">
                <form action="{{route('customer.destroy',$user->id)}}" method="post">
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
    <a href="{{route('customer.create')}}" class="btn btn-lg btn-success">
        Add new Customer
    </a>

</form>

</body>
</html>

@endsection