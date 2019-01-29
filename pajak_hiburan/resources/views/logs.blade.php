<!DOCTYPE html>
<html>
<head>
    <title>Pajak Hiburan</title>
    <style>
        .log{
            font-family: "Century Gothic";
            text-align: center;
            height: 400px;
            width: 350px;
            background-color: #C0C0C0;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); 
            border-top-left-radius: 14px;
            border-bottom-left-radius: 14px;
        }
        .logs{
            font-family: "Century Gothic";
            padding-left:20px; 
            height: 400px;
            width: 350px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            border-top-right-radius: 14px;
            border-bottom-right-radius: 14px;
        }
        input[type=email], select {
            font-family: "Century Gothic";
            width: 320px;
            padding: 12px 12px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=password], select {
            font-family: "Century Gothic";
            width: 320px;
            padding: 12px 12px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            font-family: "Century Gothic";
            width: 320px;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body style="background-color: #F5F5F5;">
        
    <div style="height: 80px"></div>
                <center>    
                    <table >
                        <tr>
                            <td class="log">
                                <img src="sa.gif" style="height: 250px;width: 250px">
                                <h2>Pajak Hiburan</h2>
                            </td>
                            <td class="logs">
                                <h1 style="text-align: center;">Welcome</h1>

                                <form method="POST" action="{{ route('login') }}">
                        @csrf

                                    <strong>E-mail:</strong>
                                     <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                      
                                    <strong>Password:</strong>
                                   <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                                    <input type="submit" value="Login">
                                </form>
                            </td>
                        </tr>
                    </table>
                </center> 
            </div>
        </div>
    </div>
</body>
</html>
