<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto CGIS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFDAB9;
                color: #2F4F4F;
                font-family: 'Raleway', Calibri;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;


            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .copyright {
                color: #D98880;
                text-align: center;
            }


        </style>
    </head>
    <body>
    <div class="flex-center position-ref full-height">

            <div class="top-right links">

                    <a href="{{ url('/login') }}">Entrar</a>
                    <a href="{{ url('/register') }}">Registro</a>

            </div>


            <div class="content">
                <div class="title m-b-md">
                    <br>
                         Consulta de podología FootCare

                    </div>

                <?php

                echo '<center><img src="..\images\logoclin.png" width="220" height="150" align="center" /> </center> '
                ?>
                <br>
                <table>
                    <th>
                    <pre>

                                .............................................................................................................

                    </pre>
                    </th>


                </table>

                <div class="links">
                    <a href="https://homestead.app/descripcion">Descripción</a>
                    <a href="https://homestead.app/citas">Citas</a>
                    <a href="https://www.onmeda.es/foros/podología">Foro</a>
                    <a href="https://es-es.facebook.com/HospitalFootCare/">Nuestro Facebook</a>
                    <a href="https://homestead.app/contacto">Contacto</a>

                </div>

                <table>
                    <th>
                    <pre>


                                .............................................................................................................
                    </pre>
                    </th>
                </table>

            <div class="copyright" >
                   <B>
                   <p>Designed by: Esperanza Mejías Muñoz; Contact: <a href="mailto:espemejia.m@gmail.com"> espemejia.m@gmail.com</a></p>
                   </B>


                </div>

            </div>
        </div>
    </body>
</html>
