<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/estilo.css">
        
       
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <!--typegraphy-->
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Varela+Round"/>



<!--production-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!--production---->


<!--production-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--production-->



<script src="http://localhost:81/blufox/public/js/portafolio.js"></script>
<script src="http://localhost:81/blufox/public/js/viewerpdf.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md d-flex">
           
                    <a class="navbar-brand mr-auto" href="http://localhost:81/AwesomeProject/public/portfolio">
                        <img class="d-block" width="43px" src="http://localhost:81/blufox/public/storage/img/logo-navbar.png" alt="First slide">
                    </a>


                    <button id="active-search" class="navbar-toggler btn-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-navicon fa-2x"></i>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mt-0 mb-0 ml-auto">

                            <li class="nav-item ">
                                <a id="btn-about " class="nav-link" href="/#about">
                                    <i class="fa fa-universal-access" aria-hidden="true"></i>
                                    ¿QUIENES SOMOS?
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:81/AwesomeProject/public/portfolio/#acerca">
                                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                    ACERCA DE
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:81/AwesomeProject/public/portfolio#contact">
                                    <i class="fa fa-server" aria-hidden="true"></i>
                                    CONTACTOS
                                </a>
                            </li>

                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">


                        </ul>
                    </div>
                 
        </nav>
        <header class="container—fluid">
            <div class="row" style="height:680px; background-color:#5CBD9D"  >
                <div class="col-12 align-self-center text-center">
                    <img src="{{asset('images/Perez Jaime Logo-01.png')}}" class="img—fluid" width="600">
                    <h1>BIENVENIDO!</h1>
                </div> 
            </div>
        </header>
        <section class="container" id="portfolio">
            <div class="row justify-content-center mb-5"><!--creo que no funciona el justify sin -center/ mb-0 o nada para que la imagen este pegado a la siguiente seccion-->
                <div class="col-12 text-center mt-5">
                    <h2>¿Quienes Somos?</h2>
                    <hr>
                </div>
                @foreach ($projects as $projects)
                <div class="col-4 text-center mt-5"> <!--en col 3 sale 4 filas en col 4 sale 3 y en col5 sale 2 filas -->
                    <h3>{{$projects->title}}</h3>
                    <img src="{{asset('/images/portfolio/'.$projects->featured)}}" class="img-fluid" alt={{$projects->title}}>
                    <div style="color: red; columns: 12;">
                        <p>{{$projects->description}}</p>
                        <a href="{{route('post',$projects->id)}}" class="post-link"><b>ver más...</b></a>
                    </div>
                
               </div>
                @endforeach
                <!-- <div class="col-4 text-center mt-5;">--> <!--en col 3 sale 4 filas en col 4 sale 3 y en col5 sale 2 filas -->
                    <!-- <h3>El elemento Arquitectónico en un medio urbano</h3>
                    <img src="{{asset('/images/memo.jpg')}}" alt="Perfil">
                    <p>El arte del urbanista es adaptarse pero no imponerse. Ahora bien...</p>
               </div> -->
                    
            </div>
              
        </section>
        <section class="container—fluid" id="acerca">
            <div class="row justify-content-center py-5" style="background-color:#5CBD9D"  >
                <div class="col-12  text-center mt-5 mb-4">
                    <h2>ACERCA DE</h2>
                    <hr>
                </div> 
                <div class="col-4">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam tempore voluptatibus optio recusandae esse, porro pariatur sapiente molestiae libero atque sint cupiditate. Iure quis tempore dolores in iste minus dolor.</p>
                </div>
                <div class="col-4">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam tempore voluptatibus optio recusandae esse, porro pariatur sapiente molestiae libero atque sint cupiditate. Iure quis tempore dolores in iste minus dolor.</p>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                </div>
                
            </div>
        </section>
        <section class="container" id="contact">
            <div class="row justify-content-center mb-5"><!--creo que no funciona el justify sin -center/ mb-0 o nada para que la imagen este pegado a la siguiente seccion-->
                <div class="col-12 text-center mt-5">
                    <h2>CONTACTOS</h2>
                    <hr>
                </div>
                <div class="col-6"> <!--en col 3 sale 4 filas en col 4 sale 3 y en col5 sale 2 filas -->
                    <form>
                        <div class="form-group">
                          
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                           
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Correo electrónico">
                            <small id="emailHelp" class="form-text text-muted">  Nunca compartiremos su correo electrónico con nadie más.</small>
                        </div>
                        <div class="form-group">
                            
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                        
                        <div class="form-group">
                          
                            <textarea class="form-control" id="msg" rows="3" placeholder="textarea"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary p-3">ENVIAR</button>
                    </form>
               </div>
            </div>
        </section>
        <footer class="container-fluid">
            <div class="row justify-content-center py-4">
                <div class="col 4 text-center">
                    <h3>LOCACIÓN</h3>
                    <P>La Paz</P>
                </div>
                <div class="col 4 text-center">
                    <h3>SIGUENOS</h3>
                    
                </div>
                <div class="col 4 text-center">
                    <h3>LOCACIÓN</h3>
                    <P>La Paz</P>
                </div>
            </div>
        </footer>
    </body>
</html>
