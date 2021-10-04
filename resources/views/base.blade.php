<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>IPT102 Project 4</title>
</head>

<style>

.bg {
    background-repeat: no-repeat;
    background-size: cover;
    position: fixed;
}

.title {
    text-align: center;
    position: relative;
    color: white;
    font-size: 110px;
}
.card{
    margin-top:5rem;
}

#viewitems{
    margin-left:35rem;
    position: relative;
}

table {
    margin-top: 5rem;
    position: relative;
}

th {
    color: rgb(255, 255, 255);
    font-size: 18px;
}

td {
    color: #fff;
}

.itemtitle {
    font-size: 40px;
    margin-top: 10rem;
    color: #fff;
    position: relative;
}

#btnitem {
    margin-top: -2rem;
    position: relative;
}

#createitems {
    margin-top: 10rem;
    position: relative;
}

#back {
    position: relative;
    width: 80px;
    height: 35px;
}

</style>
<body>
    @if(session('Error'))
        <div class="alert alert-danger" role="alert">
            <div class="container">
                {{ session('Error') }}
            </div>
        </div>
    @endif

    @if(session('Message'))
        <div class="alert alert-success" role="alert">
            <div class="container">
                {{ session('Message') }}
            </div>
        </div>
    @endif

    @if(session('errors'))
        <div class="alert alert-warning" role="alert">
            <div class="container">
                Please input the following fields:
                <ul>
                    @foreach(session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand">IPT Project 4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link box text-white" href="/logout">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/register">Register</a>
                            </li>
                        @endif
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    
</body>
</html>