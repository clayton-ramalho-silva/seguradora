<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
      <style type="text/css">  .ali-helper-trend-card {    border-left: 1px solid lightgrey;  }  .ali-helper-trend-card:first-child {    border-left: none;  }  .ali-helper-trend-items-navigation-button {    padding: 1px 8px;    font-size: 16px;    font-weight: bolder;    background-color: white;    color: #FF530D;    cursor: pointer;  }  .ali-helper-trend-items-navigation-button[disabled] {    padding: 1px 8px;    font-size: 16px;    background-color: lightgrey;    color: black;    cursor: not-allowed;  }  .ali-helper-trend-items {    display: flex;    flex-direction: column;    margin-top: 10px;    border-radius: 15px;    background-color: white;    border-top-right-radius: 0;    border-top-left-radius: 0;    border: 1px solid rgb(18, 27, 33);    border-top: none;  }  .ali-helper-trend-items.home {    margin-top: 0;    width: 1200px;    min-width: 1200px;    margin: auto;    border-top-right-radius: 0;    border-top-left-radius: 0;    border: 1px solid rgb(18, 27, 33);    border-top: none;    margin-bottom: 2px;  }  .ali-helper-trend-box-container {    background-color: white;    padding-bottom: 10px;  }  #ali-helper-popover-conteiner {    position: absolute;    bottom: 55px;    left: 150px;    width: 220px;    background-color: white;    border: 1px solid darkgrey;    filter: drop-shadow(0 0 2rem black);    border-radius: 5px;    padding: 10px;    padding-right: 20px;    cursor: auto;  }  #ali-helper-popover-conteiner:before {    content: " ";    height: 0;    position: absolute;    width: 0;    bottom: -20px;    left: calc(50% - 10px);    border: 10px solid transparent;    border-top-color: white;  }</style>
  </head>
  <body>
    <main class="form-signin mt-5">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form action="{{ route('login-authenticate')}}" method="POST">
                        @csrf
                      
                      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                  
                      <div class="form-floating">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                  
                      <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                      <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
                    </form>

                </div>
                <div class="col"></div>
            </div>

        </div>
      </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>