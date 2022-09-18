@extends('master')
@section('title', "Diyor's Resume")
@section('content')
    <div class="parent">
        <div class="top">
            <div class="navbar">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Services</a>
                <a href="">Portfolio</a>
                <a href="">Pricing</a>
                <a href="">Blog</a>
                <a href="">Contact</a>
            </div>
            <div class="inf">
                <h6>Hi There</h6>
                <h1>I am Diyor Djabbarov <br> A Web Developer</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Aperiam assumenda tempore</p>
                <div>
                    <button class="left" type="submit">Hire Me →</button>
                    <button class="right" type="submit">View Portfolio →</button>
                </div>
                <div class="socMed">
                    <a href="">Facebook</a>
                    <a href="">Twitter</a>
                    <a href="">Linkedin</a>
                </div>
            </div>
            <div>
                <img class="chad" src="https://i.kym-cdn.com/photos/images/facebook/002/220/732/0b1.png" alt="chad">
            </div>
        </div>
        <div class="bottom">
            <div class="chad2">
                <img src="https://cryptorenaissance.org/img/gigachad.ab28dd28.png" alt="">
            </div>
            <div class="text">
                <div class="buttons">
                    <button class="one">About Me</button>
                    <button class="two">Skills</button>
                    <button class="three">Experience</button>
                </div>
                <div class="txt">
                    <h1>My Story</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium
                        deserunt dolorum eos esse ipsam numquam officiis praesentium quidem recusandae!
                    </p>
                    <h4>I do Web Design & Development since I <br>
                        was 18 Years Old</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, corporis delectus deleniti
                        dicta doloremque dolorum esse.</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .chad2{
            height: 350px;
            width: 300px;
            position: relative;
            top: 80px;
            left:100px;
            background-color: lightskyblue;
            border-radius: 12px;
        }
        .chad2 img{
            height: 350px;
            width:300px;
        }
        p, h1, h4{
            color: white;
            left: 10px;
            position: relative;
        }
        .one{
            background-color: lightskyblue;
            color: white;
            padding: 10px;
            border-style: solid;
            font-size: medium;
            border-color: white;
            border-radius: 12px;
            top: 5px;
            left: 5px;
            position: relative;
        }
        .two{
            background-color: lightskyblue;
            color: white;
            padding: 10px;
            border-style: solid;
            font-size: medium;
            border-color: white;
            border-radius: 12px;
            top: 5px;
            left: 5px;
            position: relative;
        }
        .three{
            background-color: lightskyblue;
            color: white;
            padding: 10px;
            border-style: solid;
            font-size: medium;
            border-color: white;
            border-radius: 12px;
            top: 5px;
            left: 5px;
            position: relative;
        }
        .one:hover, .two:hover, .three:hover{
            background-color: white;
            border-color: white;
            color: lightskyblue;
        }
        .text{
            height: 350px;
            width: 300px;
            position: relative;
            top: -260px;
            left: 500px;
            background-color: lightskyblue;
            border-radius: 12px;
            color: white;
        }
        .left{
            color: white;
            background-color: lightskyblue;
            padding: 15px;
            border-style: solid ;
            border-color: white;

        }
        .right{
            color: lightskyblue ;
            background-color: white;
            padding: 15px;
            border-style: solid;
            border-color: lightskyblue;
        }
        .right:hover{
            color: white;
            background-color: lightskyblue;
            border-color: white;
        }
        .left:hover{
            color: lightskyblue;
            background-color: white;
            border-color: lightskyblue;
        }
        .socMed {
            position: relative;
            top: 10px;
        }
        .inf{
            height: 300px;
            width: 400px;
            background-color: lightskyblue;
            position: absolute;
            top: 100px;
            left: 500px;
        }
        .inf h6{
            color: lightskyblue;
            position: relative;
            background-color: white;
            width: 60px;
            height: 20px;
            text-align: center;
            font-size: small;
            top: 30px;
        }
        .inf h1{
            color: white;
            position: relative;
        }
        .inf p{
            color: white;
            position: relative;
            top: -10px;
        }
        a{
            color: white;
            text-decoration: none;
            padding-left: 7px;
        }
        .navbar{
            position: absolute;
            left: 450px;
            padding-top: 10px;
        }
        .chad{
            height: 500px;
            width: 500px;
            position: relative;
            left: 20px;
        }
        .top{
            width: 100%;
            height: 500px;
            background-color: lightskyblue;
        }
        .bottom{
            width: 100%;
            height:500px;
            background-color: whitesmoke;
            border-radius: 12px;
        }
        body{
            background-color: lightskyblue;
        }
    </style>
@stop
