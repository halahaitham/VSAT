
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>customers</title>
    <link href={{asset("dist/css/style.css")}} rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body class="c">
<br>
<br>
<div class="container">
    <div class="row">
        <div class="content-box-large col-md-12">
            <h3 style="color: #0c4d78"> Edit customers's information :</h3>
            <br>

            <div class="col-md-6 col-md-offset-3">


                <form action="{{ route('customer.update',['id' => $customer->id]) }}" method="POST">
                    {{ method_field('patch')}}
                    {!! csrf_field() !!}

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">customer_name</label>
                        <div class="col-sm-10">
                            <input  value="{{$name}}" name="customer_name" class="form-control form-control-lg"  >
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">customer_email</label>
                        <div class="col-sm-10">
                            <input  value="{{$email}}" name="customer_email" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">customer_phone</label>
                        <div class="col-sm-10">
                            <input value="{{$phone}}" name="customer_phone" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">city</label>
                        <div class="col-sm-10">
                            <input  value="{{$city}}" name="city" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">details</label>
                        <div class="col-sm-10">
                            <input value="{{$details}}" name="details"  class="form-control form-control-lg" >
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="colFormLabelLg"  class="col-sm-3 col-form-label col-form-label-lg">balance</label>
                        <div class="col-sm-10">
                            <input  value="{{$balance}}" name="balance" class="form-control form-control-lg" >
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