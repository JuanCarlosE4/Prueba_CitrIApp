<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Componentes.css">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Prediccion</title>
</head>
<body>

    <header>

        <nav class="menu">

            <section class="contenedorTitu">
                <p class="letratex2">CITR<t class="letratex3">IA</t>PP</p>
            </section>

            <article class="Cmenu2">

                <a type="button" href="Perfil.html" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/perfi.png" alt="">
                    </section>
                    <h1 class="txt">Perfil</h1>
                </a>
                <a type="button" href="Cultivos.html" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/Cultivos En produccion.png" alt="">
                    </section>
                    <h1 class="txt">Cultivos</h1>
                </a>
                <a type="button" href="Prediccion.html" class="Cb">
                    <section class="button">
                        <img class="Imgmenu" src="Img/prediccion.png" alt="">
                    </section>
                    <h1 class="txt">Predicción</h1>
                </a>
                <a type="button" href="#" class="Cb">
                  
                    <section class="button">
                        <img class="Imgmenu" src="Img/usuarios.png" alt="">
                    </section>
                    <h1 class="txt">Nosotros</h1>
               
                </a>

                <a type="button" href="#" class="Cb">
                  
                    <section class="button">
                        <img class="Imgmenu" src="Img/Registrar.png" alt="">
                    </section>
                    <h1 class="txt">Registrar Cultivo</h1>
               
                </a>

                @if (Auth::user())
                <form action="{{route('logout')}}" method="POST" class="c_formlogout">
                    {{ csrf_field() }}
                <button type="submit" href="#" class="Cbdespegable">
                    <section class="buttondes">
                        <img class="Imgmenudes" src="Img/logout.png" alt="">
                    </section>
                    <h1 class="txt">Salir</h1>
                </a>
                </button>
                </form>   
            @endif

            </article>

        </nav>

    </header>

    <article class="Contenedor">


        <section class="Form_componente">

            <section class="C_fp">
                <article class="Fp">
                    <img class="Imgcomponente" src="Img/prediccion.png" alt="" srcset="">
                </article>
                

                
            </section>

            <section class="C_titulo">

                <h1 class="TxtTitulo">Predicciones de cultivos</h1>
                
            </section>

            <hr class="lineaCt">


            <aside class="contenedor2">

                <section class="ContendedorFP">

                    <section class="form-predict">
                       
                        <section class="contenedorTc_l_m">
                            <section class="sub"><label>Mes</label></section>
                            <input class="controls" type="date" name="Mes" id="nombres" placeholder="Marzo">
                        </section>
        
        
                        <section class="contenedorTc_l_m">
                            <section class="sub2"><label>Citrico</label></section>
                            <section class="select">
                                <select class="selector" name="format" id="format">
                               <option class="" selected disabled>Seleccione el Citrico</option>
                               <option  value="">Lima</option>
                             
                            </select>
                            </section>
                        </section>
                        <section class="contenedorTc_l_m"> 
                            <section class="sub"><label>Lugar</label></section>
                            <div class="select">
                                <select class="selector" name="format" id="format">
                               <option class="" selected disabled>Lugar De siembra</option>
                               <option value="">Popayan</option>
                           
                          
                            </select>
                            </div>
                        </section>
        
                        <section>
                            <input class="botons" type="button" value="Predecir">
                        </section>
        
        
        
        
                    </section>

                </section>




                <section class="ContenedorFE">

                </section>

            </aside>

            

        </section>



    </article>

    <footer>



        <section class="containerF">

            <section class="Lista">
                <p class="lista1">Juan Carlos España</p>
                <p class="lista1">Pablo Antonio Ortiz</p>
                <p class="lista1">Jorge Andres Coral</p>
                <p class="lista1">Julian Eduardo Medina</p>
                <p class="lista1">Juiana Marcela Romo</p>
                
            </section>

        </section>


        <section class="containerF2">

            <section class="Lista2"> 
                <h2 class="LetraC">CITRIAPP</h2>
                 <section class="imgL">
                    <article class="cimgFacebook"><img class="imgFacebook" src="Img/Facebook.png" alt=""></article>
                    <article class="cimgWhatsapp"><img class="imgWhatsapp" src="Img/Whatsapp.png" alt=""></article>
                    <article class="cimgInstagram"><img class="imgInstagram" src="Img/Instagram.png" alt=""></article>
                </section>
            </section>

        </section>



        <section class="containerF3">
            <section class="Lista3">


                <section class="imgR">

                    <article class="cimgTelefono">
                        <img class="imgTelefono" src="Img/telefono.png" alt="">
                        <h2>3138456789</h2>
                    </article>

                    <article class="cimgGmail">
                        <img class="imgGmail" src="Img/gmail (1).png" alt="">
                        <h2>klkmanitos@gmail.com</h2>
                    </article>
                    
                    

                </section>
            </section>

        </section>



    </footer>



    
</body>
</html>