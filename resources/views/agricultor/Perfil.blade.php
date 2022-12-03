<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Perfil.css">
    <link rel="stylesheet" href="{{ asset('css/Perfil/Style.css') }}">
    <link rel="shortcut icon" href="Img/Logo.png" />
    <title>Perfil</title>
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
                    <form action="{{ route('logout') }}" method="POST" class="c_formlogout">
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

        <aside class="contenedor2">


            <section class="form-perfil">

                <article class="CbP" type="button" href="#">
                    <section class="Imgperf">
                        <img class="ImgP" src="Img/Usuario.png" alt="" srcset="">
                    </section>
                </article>

                <article class="CbFoto" type="button" href="#">
                    <section class="ImgFot">
                        <img class="ImgFoto" src="Img/ejemplo.png" alt="" srcset="">
                    </section>
                </article>

                <section class="CTxt">
                    <p class="txtnombre">{{ Auth::user()->nombre }}</p>
                </section>
                <hr class="lineaFP">

                <aside class="form-perfil2">

                    <section class="Listap">
                        <p class="Txtlistap">Correo: {{ Auth::user()->email }}</p>
                        <p class="Txtlistap">Cedula: {{ Auth::user()->cedula }}</p>
                        <p class="Txtlistap">Tel: {{ Auth::user()->celular }}</p>



                        <section class="C_btnp"></section>

                        <button id="Btneditar" onclick="editarperfil()"  class="Btneditar" type="button">Editar</button>
                    </section>
                </aside>
            </section>
        </aside>


        <aside class="contenedor3">

            <section class="form-seguimiento">

                <section class="Ctitulo">
                    <h3 class="TituSegui">Cultivos Registrados en seguimiento Actualmente</h3>
                </section>
                <hr class="lineaFS">

                <section class="CListaNYT">

                    <article class="CtNYT">

                        <h2 class="TxtlistaNyt">Nombre del Cultivo</h2>
                        <h2 class="TxtlistaNyt">Tiempo Estimado</h2>

                    </article>


                </section>




            </section>

        </aside>



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
                    <article class="cimgFacebook"><img class="imgFacebook" src="Img/Facebook.png" alt="">
                    </article>
                    <article class="cimgWhatsapp"><img class="imgWhatsapp" src="Img/Whatsapp.png" alt="">
                    </article>
                    <article class="cimgInstagram"><img class="imgInstagram" src="Img/Instagram.png" alt="">
                    </article>
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




    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('editar') == 'true')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Campos editados correctamente',
                timer: 1500,
                timerProgressBar: true
            });
        </script>
    @endif

    {{--  <script>
        function editarperfil() {
            var editar = document.getElementById("Btneditar");
            if (editar) {
                Swal.fire({
                    title: 'Editar informacion personal',
                    /* text: "¡Se eliminara definitivamente!", */
                    icon: 'warning',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    stopKeydownPropagation: false,
                    backdrop: `rgba(0,0,0,0.8) url("/images/nyan-cat.gif") left top no-repeat`,
                    color: '#black',
                    /* Botones de opciones */
                    
                    input:  
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    okButtonColor: '#44b844',
                    cancelButtonColor: '#f66060',
                    confirmButtonText: '¡Si, editar!',
                    cancelButtonText: 'Cancelar',

                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                        //   #3085d6
                    }
                })
            }
        };
    </script> --}}

    <script>
        (async () => { const { value: email2 } = await Swal.fire({
                position: 'center',
                icon: 'warning',
                colors: '#f66060',
                title: 'Editar',
                text: 'informacion personal',
                showConfirmButton: true,
                confirmButtonText: 'Si, editar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                /* grow: 'row', */
                html: 
                `<form action="{{ route('register') }}" class="form_registro" method="POST" id="validacionregistro">
                {{ csrf_field() }}
                <article class="sub_form_registrar" id="sub_form_registrar">

                    <!-- Grupo Nombres -->
                    <section class="c_sub_reg" id="grupo__nombre">
                        <article class="txt_input">
                            <label for="nombre" class="letrapeq">Nombre completo</label>
                        </article>
                        <article class="c_input2">
                            <input id="nombre" value="{{ Auth::user()->name }}" class="input2" name="nombre" type="text" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>
            

                    <!-- Grupo CORREO -->
                    <section class="c_sub_reg" id="grupo__emailr">
                        <article class="txt_input">
                            <label for="emailr" class="letrapeq">Correo</label>
                        </article>
                        <article class="c_input2">
                            <input id="emailr" value="{{ Auth::user()->email }}" type="email" name="emailr" placeholder="ejemplo@gmail.com"
                                class="input2" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                    <!-- Grupo TELEFONO -->
                    <section class="c_sub_reg" id="grupo__celular">
                        <article class="txt_input">
                            <label for="celular" class="letrapeq">Telefono</label>
                        </article>
                        <article class="c_input2">
                            <input id="celular" value="{{ Auth::user()->celular }}" type="number" name="celular" class="input2" minlength="10"
                                maxlength="10" min="3000000000" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                    <!-- Grupo CONTRASEÑA -->
                    <section class="c_sub_reg" id="grupo__password2">
                        <article class="txt_input">
                            <label for="password2" class="letrapeq">Contraseña</label>
                        </article>
                        <article class="c_input2">
                            <input id="password2" type="password" name="password2" class="input2" minlength="10" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>


                    <!-- Grupo CONFIRMAR CONTRASEÑA -->
                    <section class="c_sub_reg" id="grupo__password3">
                        <article class="txt_input">
                            <label for="password3" class="letrapeq">Confirmar Contraseña</label>
                        </article>
                        <article class="c_input2">
                            <input id="password3" type="password" name="password3" class="input2" />
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </article>
                    </section>

                {{-- Mensajes de alerta corrspondiente al campo que esta fallando --}}
                <article id="grupo__nombre">
                    <label class="formulario__input-error">El nombre es muy corto o estas ingresando caracteres
                        especiales.</label>
                </article>

                <section id="grupo__cedula">
                    <label class="formulario__input-error">Número de dijitos invalidos</label>
                </section>

                <section id="grupo__celular">
                    <label class="formulario__input-error">El telefono debe tener 10 dígitos. Por favor
                        rectifica.</label>
                </section>

                <section id="grupo__emailr">
                    <label class="formulario__input-error">Correo no valido compruebe que este escrito
                        correctamente.</label>
                </section>

                <section id="grupo__password2">
                    <label class="formulario__input-error">La contraseña debe ser de 10 o mas dígitos.</label>
                </section>

                <section id="grupo__password3">
                    <label class="formulario__input-error">Ambas contraseñas deben ser iguales, rectifica por
                        favor.</label>
                </section>


                {{-- Mensaje que se muestra solo cuando se intenta enviar el formulario y algun campo esta mal --}}
                <article class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i><b>Error:</b> Por favor rellena el formulario
                        correctamente. </p>
                </article>


                <!-- Grupo BOTÓN REGISTRARME -->
                <article class="c_btn_registro formulario__grupo-btn-enviar">
                    <button type="submit" name="B_registrarme" class="boton alinear">Editar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">¡Edición enviada exitosamente!</p>
                </article>
            </form>`,
                /* Cuando aparesca sale con el fondo oscuro */
                backdrop: true,
                /* padding: '1rem', */
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                stopKeydownPropagation: false,
                
            });
            if (email2) {
                alert(email2);
            };
        })()
    </script>

</body>

</html>
