<?php
$email = $_GET['email'];
$result = emailControl($email);

function emailControl($mail){
    if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
        return [
            'status' =>  'success',
            'message' => 'Grande ora fai parte della famiglia',
        ];
    } else {
        return [
            'status' =>  'danger',
            'message' => 'Ritenta la tua email non e valida'
        ];  
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsLetter</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-nav ">
            <div class="container">
                <a class="navbar-brand text-white" href="#">NewsLetter</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link link-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Info</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <?php if(isset($result)) :  ?>
        
        <div
            class="alert alert-primary alert-dismissible position-absolute top-10 start-0 alert-<?= $result['status']; ?>"
            role="alert"
        >
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        
            <strong><?= $result['message'] ?></strong> 
        </div>

        <?php endif; ?>
       
        <div class="jumbo-img text-white" id="">
            <div class="container-fluid py-5 d-flex flex-column justify-content-center align-items-center">
                <h1 class="display-5 fw-bold">Registrati alla News Letter</h1>
                <p class=" fs-4">
                    Ricevi fantastici wallpaper!!
                </p>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Registrati</button>
                <div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header text-white">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
                        <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-light">
                        <p>Inserisci la tua mail e ricevi ogni settimana 4 wallpaper unici</p>
                        <form action="" method="get">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrati</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4 mt-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            b5
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-4 ">
                    <div class="card">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            b5
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-4 ">
                    <div class="card">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            b5
                        </div>
                    </div>
                </div>
                <div class="col-4 my-4 ">
                    <div class="card ">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            b5
                        </div>
                    </div>
                </div>
                <div class="col-4 my-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            b5
                        </div>
                    </div>
                </div>
                <div class="col-4 my-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            b5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="bg-nav-foot d-flex justify-content-center">
            <p><i class="fa-regular fa-copyright"></i> Create by Massimo</p>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>