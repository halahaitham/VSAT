
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terminal</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body class="c">
<br>
<br>
<div class="container">
    <div class="row">
        <div class="content-box-large col-md-12">
            <h3 style="color: #0c4d78"> Terminal's information :</h3>
            <br>

            <div class="col-md-6 col-md-offset-3">
                <b>
                    {!! Form::open([ 'route' => 'terminal.store','method' => 'post','files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('mac_address', 'Mac Address') !!}
                        {!!Form::text('mac_address' ,null, ['class'=>'form-control','placeholder'=>'enter the mac address'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('modem_type', 'Modem Type') !!}
                        {!!Form::text('modem_type', null,['class'=>'form-control','placeholder'=>'enter the modem type'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('transceivers_information', 'Transceivers Information') !!}
                        {!!Form::text('transceivers_information',null, ['class'=>'form-control','placeholder'=>'enter the transceivers information'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('service_type', 'Service Type') !!}
                        {!!Form::text('service_type',null, ['class'=>'form-control','placeholder'=>'enter theservice type'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('service_profile', 'Service Profile') !!}
                        {!! Form::select('service_profile', array('Satellite' => 'Satellite', 'Sharing ratio' => ' Sharing ratio', 'Upload speed' => 'Upload speed','Download speed' => 'Download speed'));!!}


                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">service_start_date</label>
                        <div class="col-sm-10">
                            <input  name="service_start_date" type="date"  class="form-control " >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">service_due_date</label>
                        <div class="col-sm-10">
                            <input  name="service_due_date" type="date"  class="form-control " >
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('monthly_rate', 'Monthly Rate') !!}
                        {!!Form::text('monthly_rate', null,['class'=>'form-control','placeholder'=>'enter the monthly_rate'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('', '') !!}
                        {!!Form::hidden('organizer',$orginazer, null,['class'=>'form-control','placeholder'=>'enter the organizer'])!!}
                    </div>

                    {!! Form::submit('Add',array('class'=>'btn btn-primary btn-lg'))!!}
                    {!!Form::close()!!}
                </b>
            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>