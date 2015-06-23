<html>
    <head>
        <title>Laravel</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="{{ URL::asset('css/component.css') }}" rel="stylesheet" type="text/css" > 


        <style>
                

            body{
                background-color: #000510;
                color:#414751;
            }

            input[type="text"] {
                background-color : #000510; 
            }

            input[type="date"] {
                background-color: #000510;
            }

            textarea {
                background-color: #000510;
            }

            .container {
                background-color: #000510;
                margin :0 auto;
                text-align: center;
                width:100%;
                position: relative;
                
            }

            .content {
                text-align: center;
                display: inline-block;
                width: 1000px;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .page-header{
                color:#f1103a;
                border-color: #000510;
            }

            .table-hover{
                background-color: #000510;
            }

            .table>tbody>tr:hover{
                background-color: #000510;
            }

            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                border-top: 1px solid #32313b;
                color: #39b1c6;
            }

            .table>tbody>tr>td, .table>tbody>tr>th{
                color:#BEEAC4;
            }

            .table .table-header{
                color:#f1103a;
            }

            .btn {
                background-color: #000510;
                border-color: #f1103a;
                color:#BEEAC4;
            }

            .btn:hover{
                background-color: #f1103a;
                border-color: #f1103a;
                color:#BEEAC4;

            }

            .form-control{
                background-color: #000510;
                color: #f1103a;
            }

            input:-webkit-autofill {
                -webkit-box-shadow: 0 0 0px 1000px #000510 inset;
                -webkit-text-fill-color: #f1103a !important;
            }

            .login-name{
                margin-left:70px;
                margin-top:-15px;
                font-size:24px;
            }
        </style
    </head>
    <body>
        
                @yield('content')

        @yield('footer');
    </body>
</html>
