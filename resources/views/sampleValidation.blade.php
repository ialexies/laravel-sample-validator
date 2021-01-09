<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container ">

        <div class="card mt-5">
            <div class="card-header"><h3 class="card-title">User Validation</h3>
            </h3></div>
            <div class="card-body">
                {!! Form::open(['route' => 'sampleValidation.store', 'method' => 'POST']) !!}

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('', 'Name', ['class' => 'control-label', 'for' => 'name']) !!}
                            {!! Form::text('name', '', ['type' => 'text', 'placeholder' => 'Enter Name', 'required' => 'required', 'class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('', 'Password', ['class' => 'control-label', 'for' => 'name']) !!}
                            {!! Form::input('', 'password', '',['type'=>'password', 'placeholder'=>'Enter password', 'required' => 'required','class' => 'form-control', 'id'=>'password']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('', 'Age', ['class' => 'control-label', 'for' => 'name']) !!}
                            {!! Form::number('age','age', ['type'=>'number', 'step'=>'any', 'placeholder'=>'less than 100', 'required' => 'required','class' => 'form-control', 'id'=>'age']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('', 'Email', ['class' => 'control-label', 'for' => 'name']) !!}
                            {!! Form::email('email','', ['type'=>'email', 'step'=>'any', 'placeholder'=>'Enter age', 'required' => 'required','class' => 'form-control', 'id'=>'email']) !!}
                        </div>
                    </div>
            </div>

            </div>
            <div class="card-footer"> {!! Form::submit('Submit', ['class' => 'btn btn-primary float-right']) !!}
                {!! Form::close() !!}</div>
          </div>

    <script>
        @if(Session::has('success'))
        swal("{{Session::get('success')}}");
        @endif

        @if(Session::has('custom_error'))
        swal('Error',"{{Session::get('custom_error')}}");
        @endif

        @if ($errors->any())
        swal('Error',
        '@foreach ($errors->all() as $error){{ $error }} \n @endforeach',
        'error',)
        @endif
    </script>

</body>

</html>
