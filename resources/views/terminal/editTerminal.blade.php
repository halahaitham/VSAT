
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terminals</title>
    <link href={{asset("dist/css/style.css")}} rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body class="c">
<br>
<br>
<div class="container">
    <div class="row">
        <div class="content-box-large col-md-12">
            <h3 style="color: #0c4d78"> Edit Terminal's information :</h3>
            <br>

            <div class="col-md-6 col-md-offset-3">


                <form action="{{ route('terminal.update',['id' => $terminal->id]) }}" method="POST">
                    {{ method_field('patch')}}
                    {!! csrf_field() !!}

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">mac_address</label>
                        <div class="col-sm-10">
                            <input  value="{{$mac_address}}" name="mac_address" class="form-control form-control-lg"  >
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">modem_type</label>
                        <div class="col-sm-10">
                            <input  value="{{$modem_type}}" name="modem_type" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">transceivers_information</label>
                        <div class="col-sm-10">
                            <input value="{{$transceivers_information}}" name="transceivers_information" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">service_type</label>
                        <div class="col-sm-10">
                            <input  value="{{$service_type}}" name="service_type" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">service_profile</label>
                        <div class="col-sm-10">
                            <select name ="service_profile">
                                <option>Satellite</option>
                                <option>Sharing ratio</option>
                                <option>Upload speed</option>
                                <option>Download speed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">service_start_date</label>
                        <div class="col-sm-10">
                            <input name="service_start_date" value="{{$service_start_date}}" class="form-control form-control-lg" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">service_due_date</label>
                        <div class="col-sm-10">
                            <input name="service_due_date" value="{{$service_due_date}}" class="form-control form-control-lg" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">monthly_rate</label>
                        <div class="col-sm-10">
                            <input  name="monthly_rate" value="{{$monthly_rate}}" class="form-control form-control-lg" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">date</label>
                        <div class="col-sm-10">
                            <input  name="date" type="date" class="form-control form-control-lg" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">organizer</label>
                        <div class="col-sm-10">
                            <input  name="organizer" value="{{$organizer}}" class="form-control form-control-lg" >
                        </div>
                    </div>




                    <button type="submit" class="btn btn-primary btn-lg"  > Edit</button>


                </form>


            </div>
        </div>
    </div>
</div>




</body>
</html>