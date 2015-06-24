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
                background-color: #fff;
                color:#414751;
            }

            h1{
                letter-spacing: 1px;
                font-size: 2em;
                line-height: 1.6;
                font-weight: 300;
            }

            .container {
                background-color: #fff;
                
                text-align: center;
                width:100%;
                position: relative;
                padding-right: 20px;

                
            }

            .content {
                text-align: center;
                display: inline-block;
                width: 85%;
                float:right;
                padding: 10px 10px 50px 10px;

            }

            .content2 {
                text-align: center;
                display: inline-block;
                width: 85%;
                
                padding: 10px 10px 50px 10px;

            }


           .content1{
                width:13%;
                float:left;
                margin-top: 100px;
                height: 100px;
                margin-left: 10px;
           }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }



            .table-hover{
                background-color: #fff;
            }

            .table>tbody>tr:hover{
                background-color: #fff;
            }

            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                border-top: 1px solid #fff;
                color: #414751;

            }

            .table>tbody>tr>td, .table>tbody>tr>th{
                color:#000;
                letter-spacing: 1px;
                font-size: 0.9em;
                line-height: 0.8;
                font-weight: 300;
                text-align: center;
            }

            .table .table-header{
                background: #f1103a;
                color:#fff;
                letter-spacing: 1px;
                font-size: 0.9em;
                line-height: 1;
                font-weight: 300;
                text-align: center;
            }

            .btn {
                background-color: #f1103a;
                border-color:#f1103a;
                color:#fff;
                text-align: center;
                letter-spacing: 1px;
                font-size: 1em;
                line-height: 1;
                font-weight: 300;
            }

            .btn:hover{
                background-color: #f1103a;
                border-color: #f1103a;
                color:#fff;

            }



            .btn-info{
                letter-spacing: 1px;
                font-size: 1em;
                line-height: 1;
                font-weight: 300;
            }

            .align-btn {

                margin-left:30%;
                }            
            .form-control{
               
                color: #414751;
                height:50px;
                margin-left:3%;
                letter-spacing: 1px;
                font-size: 1.2em;
                line-height: 1.6;
                font-weight: 300;
                padding: 5px 5px 5px 5px;
                
            }
            label{
                text-align: left;
            }

            .form-control1{
               
                width:100%;
                color: #fff;
                height:50px;
                margin-left:3%;
                letter-spacing: 1px;
                font-size: 1.2em;
                line-height: 1.6;
                font-weight: 300;
                padding: 5px 5px 5px 5px;
                
            }

            input:-webkit-autofill {
                -webkit-box-shadow: 0 0 0px 1000px #fff inset;
                -webkit-text-fill-color: #f1103a !important;
            }

            .login-name{
                margin-left:60px;
                margin-top:-25px;
                font-size:16px;
            }

            .color-input{
                color:#414751;
            }

            .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
                    background: #f1103a;
                    color:#fff;
                    border-color: #f1103a;
                }

            .pagination>li>a, .pagination>li>span {
                color:#f1103a;
                 letter-spacing: 1px;
                font-size: 1em;
                line-height: 1;
                font-weight: 300;
            }

            .btn-success{
                margin-top: 20px;
            }

            .icon{
                margin-top: 50px;
                margin: 0 auto;
                width:100%;
                height:100px;
                color:#414751;
                letter-spacing: 1px;
                font-size: 1em;
                line-height: 1;
                font-weight: 300;
                text-decoration: none;
            }

            a.icon{
                text-decoration: none;
            }

            .glyphicon-file, .glyphicon-edit{
                font-size: 30px;
                color:#414751;
            }

            .glyphicon-file:hover,.icon:hover, .glyphicon-edit:hover {
                color:#f1103a;
            }
            
        </style>
    </head>
    <body>
        
                @yield('content')

        @yield('footer');
    </body>
</html>
