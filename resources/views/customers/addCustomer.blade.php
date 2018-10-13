
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>customers</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body class="c">
<br>
<br>
<div class="container">
    <div class="row">
        <div class="content-box-large col-md-12">
            <h3 style="color: #0c4d78"> Customer's information :</h3>
            <br>

            <div class="col-md-6 col-md-offset-3">
                <b>
                    {!! Form::open([ 'route' => 'customer.store','method' => 'post','files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('customer_name', 'Customer_name') !!}
                        {!!Form::text('customer_name' ,null, ['class'=>'form-control','placeholder'=>'enter the customer name'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('customer_email', 'Customer_email') !!}
                        {!!Form::text('customer_email', null,['class'=>'form-control','placeholder'=>'enter the customer email'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('customer_phone', 'Customer_phone') !!}
                        {!!Form::text('customer_phone',null, ['class'=>'form-control','placeholder'=>'enter the customer phone number'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('city', 'City') !!}
                        {!!Form::text('city',null, ['class'=>'form-control','placeholder'=>'enter the city'])!!}
                    </div>

                    <div class="form-group col-md-6">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Details</label>
                        <textarea name="details" rows="5" class="form-control" placeholder="enter the customer details"></textarea>
                    </div>

                    <div class="form-group">
                        {!! Form::label('balance', 'Balance') !!}
                        {!!Form::text('balance', null,['class'=>'form-control','placeholder'=>'enter the balance'])!!}
                    </div>

                    {!! Form::submit('Add',array('class'=>'btn btn-primary btn-lg'))!!}
                    {!!Form::close()!!}
                </b>
            </div>
        </div>
    </div>
</div>

</body>
</html>