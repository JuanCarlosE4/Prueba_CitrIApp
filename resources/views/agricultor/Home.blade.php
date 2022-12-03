<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Citriapp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styleMenuF.css')}}">
    <link rel="shortcut icon" href="{{asset('img/Logo.png')}}" />
</head>

<body>

    <article class="contenedor">

       
        
        @if (Auth::user())
        <form action="{{route('logout')}}" method="POST" class="c_formlogout">
            {{ csrf_field() }}
            <section class="C_datosperfil">
                <p class="txtnombre">{{ Auth::user()->name}}</p> 
            </section>

            <section class="c_btnlogout">
            <button name="salir" class="btnLogout" type="submit">Cerrar Sesion</button>
        </section>
        </form>   
        @endif
        

        
    <article class="CLogo">
    
        
    </article>
    </article>



    <article class="contenedor2">

        <nav class="menu">



<a type="button" href="#" class="Cb">
            <section class="button">
                <img class="Imghome" src="{{asset('img/Registrar.png')}}" alt="">
            </section>
            <h1 class="txt">Registrar Cultivos</h1>
        </a>


        <a class="Cb" type="button" href="{{route('agricultor.Cultivos')}}">
            <section class="button">
                <img src="{{asset('img/Cultivos En produccion.png')}}" class="ImgSer" alt="">
                
            </section>
            <h1 class="txt">Cultivos en Produccion</h1>
        </a>

        <a class="Cb" type="button" href="{{route('agricultor.Historial')}}">
            <section class="button">
                <img class="ImgNosotros" src="{{asset('img/Historial.png')}}" alt="" srcset="">
                
            </section>
            <h1 class="txt">Historial de Predicciones</h1>
        </a>
        <a class="Cb" type="button" href="{{route('agricultor.nosotros')}}">
            <section class="button">
                <img class="ImgNosotros" src="{{asset('img/usuarios.png')}}" alt="" srcset="">
                
            </section>
            <h1 class="txt">Nosotros</h1>
        </a>


        </nav>

        <nav class="menu2">



            <a type="button" href="{{route('agricultor.Perfil')}}" class="Cb">
                        <section class="button">
                            <img class="Imghome" src="{{asset('img/perfi.png')}}" alt="">
                        </section>
                        <h1 class="txt">Perfil</h1>
                    </a>
            
                    <a class="Cb" type="button" href="#">
                        <section class="button">
                            <img src="Img/ayuda.png" class="ImgSer" alt="">
                            
                        </section>
                        <h1 class="txt">Ayuda</h1>
                    </a>
{{-- @can('agricultor.Prediccion')         --}}    
                    <a class="Cb" type="button" href="{{route('agricultor.Prediccion')}}">
                        <section class="button">
                            <img class="ImgNosotros" src="{{asset('img/prediccion.png')}}" alt="" srcset="">
                        </section>
                        <h1 class="txt">Prediccion</h1>
                    </a>
{{-- @endcan --}}
                    </nav>

        

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
                    <article class="cimgFacebook"><img class="imgFacebook" src="{{asset('img/Facebook.png')}}" alt=""></article>
                    <article class="cimgWhatsapp"><img class="imgWhatsapp" src="{{asset('img/Whatsapp.png')}}" alt=""></article>
                    <article class="cimgInstagram"><img class="imgInstagram" src="{{asset('img/Instagram.png')}}" alt=""></article>
                </section>
            </section>

        </section>



        <section class="containerF3">
            <section class="Lista3">


                <section class="imgR">

                    <article class="cimgTelefono">
                        <img class="imgTelefono" src="{{asset('img/telefono.png')}}" alt="">
                        <h2>3138456789</h2>
                    </article>

                    <article class="cimgGmail">
                        <img class="imgGmail" src="{{asset('img/gmail (1).png')}}" alt="">
                        <h2>klkmanitos@gmail.com</h2>
                    </article>

                </section>
            </section>
        </section>



    </footer>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('iniciar') == 'true')
        <script>
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: '¡Bienvenid@ de nuevo!',
      html: '<label for="">{{ Auth::user()->name }}</label>',
      showConfirmButton: false,
      timer: 15000,
      timerProgressBar: true
    })
        </script>
    @endif
  
    @if (session('registro') == 'true')
    <script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Registro exitoso',
  text: "¡Bienvenid@ a CitrIApp",
  html: '<label for="">{{ Auth::user()->name }}</label>',
  showConfirmButton: false,
  timer: 15000,
  timerProgressBar: true
})
    </script>
@endif
</body>

</html>