<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITBEEP TASK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
        width: 50rem;
        padding: 10% 0 0;
        margin: auto
    }

    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: whitesmoke;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }



    .container:before,
    .container:after {
        content: "";
        display: block;
        clear: both;
    }

    .container .info {
        margin: 50px auto;
        text-align: center;
    }

    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }

    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }

    .container .info span a {
        color: #000000;
        text-decoration: none;
    }

    .container .info span .fa {
        color: #EF3B3A;
    }

    body {
        background: #76b852;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(right, #76b852, #8DC26F);
        background: -moz-linear-gradient(right, #76b852, #8DC26F);
        background: -o-linear-gradient(right, #76b852, #8DC26F);
        background: linear-gradient(to left, #76b852, #8DC26F);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

</style>

<body>
    <div class="login-page">
        <div class="form">
            <form action="{{ url('contact-submit') }}" method="post">
                {{ csrf_field() }}
                <div><img src="http://www.itbeep.com/assets/images/logo_dark.png" class="logo" /></div>
                Name: <input type="text" placeholder="name" id="name" name="name" />
                Mobile:<input type="text" placeholder="mobile" id="mobile" name="mobile" />
                Email: <input type="email" placeholder="email address" id="email" name="email" />
                {{-- <button  type="submit" >send</button> --}}
                <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="start">
                    Send
                </button>
                {{-- start --}}
                <!-- Button trigger modal -->

                {{-- end --}}
            </form>

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chose one of the offers ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <button type="button" id="1" class="btn btn-secondary  px-5"
                        onClick="GFG_click(this.id)" name="offer1">Offer</button>
                    <button type="button" id="2" class="btn btn-secondary mx-4  px-5"
                        onClick="GFG_click(this.id)">Offer</button>
                    <button type="button" id="3" class="btn btn-secondary  px-5"
                        onClick="GFG_click(this.id)">Offer</button>
                </div>
                <p id="GFG_DOWN" style="color:green; font-size: 20px; font-weight: bold;">
                </p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModala">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModala" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">When do you want to delever it ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <button type="button" id="4" class="btn btn-secondary  px-4" onClick="GFGA_click(this.id)">one
                            week</button>
                        <button type="button" id="5" class="btn btn-secondary mx-4  px-4"
                            onClick="GFGA_click(this.id)">one month</button>
                        <button type="button" id="6" class="btn btn-secondary  px-4"
                            onClick="GFGA_click(this.id)">information</button>
                    </div>
                    <p id="GFGA_DOWN" style="color:green; font-size: 20px; font-weight: bold;">
                    </p>
                </div>
               
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">save</button>

                </div>
            </div>
        </div>
    </div>
    <script>

        var el_down = document.getElementById("GFG_DOWN");
        el_up.innerHTML = "Click on button to get ID";

        function GFG_click(clicked) {
            el_down.innerHTML = "ID = " + clicked;
            //alert(clicked);
        }
        var elA_down = document.getElementById("GFGA_DOWN");
        el_up.innerHTML = "Click on button to get ID";
        function GFGA_click(clicked) {
            elA_down.innerHTML = "ID = " + clicked;
        }
        function onClick(){
            window.stop();
        }

    </script>



</body>

</html>
