<!DOCTYPE html>
<html>
<head>
    <style>
        .clear{
            width: 100%;
            clear: both;
            display: block;
            visibility: hidden;
        }
        .clearfix:after{
            content: "";
            clear: both;
            display: block;
            visibility: hidden;
            width: 100%;
        }
        .b{
            display: inline;
            float: left;
            background-color: red;
            margin: 15px;
            height: 20px;
            width: 50px;
        }
        .b:nth-child(2){
            height: 50px;
        }
        .frame{
            background-color: green;
        }
        .frame:after{
            content: "readmore...";
            float: right;
            margin-top: 15px;
        }
        .menu{
            list-style: none;
        }
        .menu li{
            float: left;
            padding-right: 10px;
        }
        .menu li:after{
            content: "|";
            padding-left:10px; 
        }
        .menu li:last-child:after{
            content: "";
        }
        .b:nth-child(2n){
            border:1px solid black;
        }
        .b:nth-last-child(2){
            background-color: green;
        }
        
    </style>
</head>
<body>
    <div class="frame">
        <div class="b"></div>
        <div class="b"></div>
        <div class="b"></div>
        <div class="b"></div>
        <div class="clear"></div>
    </div>
    <ul class="menu">
        <li>Text</li>
        <li>Text</li>
        <li>Text</li>
        <li>Text</li>
        <li>Text</li>
        <li>Text</li>
    </ul>
</body>
</html>