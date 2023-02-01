<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style-->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    <!-- navbar-->
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg navbar bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- end navbar -->
    <!-- subscribe-->
    <div class="container-fluid subscribe d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h1>Lorem ipsum dolor sit</h1>
        </div>
        <form action="" class="flex-column flex-sm-row d-flex justify-content-center align-items-center">
            <div class="form-group col me-sm-2">
                <input type="text" placeholder="Nombre" class="form-control ">
            </div>
            <div class="form-group col me-sm-2">
                <input type="text" placeholder="Email" class="form-control ">
            </div>
            <div class="form-group col-md-auto">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
    <!-- end subscribe-->

    <!-- contenido menu-->
    <div class="container my-5 ">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <div class="text-justify w-75">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia itaque beatae recusandae accusantium numquam modi, cum molestiae. Suscipit quidem laborum nobis qui eveniet quae officiis harum consequatur! Suscipit, nihil ipsum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia itaque beatae recusandae accusantium numquam modi, cum molestiae. Suscipit quidem laborum nobis qui eveniet quae officiis harum consequatur! Suscipit, nihil ipsum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia itaque beatae recusandae accusantium numquam modi, cum molestiae. Suscipit quidem laborum nobis qui eveniet quae officiis harum consequatur! Suscipit, nihil ipsum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia itaque beatae recusandae accusantium numquam modi, cum molestiae. Suscipit quidem laborum nobis qui eveniet quae officiis harum consequatur! Suscipit, nihil ipsum?</p>
        </div>
    </div>
    <!-- fin contenido menu-->

    <!-- footer-->
    <div class="container-fluid bg-dark text-white py-3 position-relative bottom-0">
        <div class="container text-center ">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur qui, voluptates cumque ducimus, unde perferendis eos reiciendis aliquam ullam alias esse non nulla minus fugiat aspernatur minima ipsam eaque possimus.</p>
        </div>
    </div>
    <!-- fin footer-->
</body>

<script src="js/bootstrap.min.js"></script>

</html>