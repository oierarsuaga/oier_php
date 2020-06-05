Proyecto FCT Oier
--------------------

La idea idea seria simular una empresa de telefonia en la que disponemos un servidor web interno con nuestras cuentas de usuario ( windows server 2012 AD ) y los datos que esos usuarios agregan de clientes se almacena en la base de datos de sql

--> windows server 2012 (MV)
--> Ubuntu (MV)

--------------------

Diario:

Dia 1 - 28 de Abril

--> Hoy e estado pensando la idea, el esquema de la red y el equipo a utilizar.

Dia 2 - 29 de Abril

--> Instalar VirtualBox en el equipo, despues comence con las descargas de los sistemas operativos a utilizar (windows server 2012, Ubuntu) y su respectiva puesta en marcha de las maquinas virtuales.

Dia 3 - 30 de Abril

--> Leer y documentarme sobre las pautas a seguir durante el proyecto como los videos a usar para guiarme...

Dia 4 - 5 de Mayo

--> La realizacion del analisis de contexto y empezar a escribir codigo de la web.

Dia 5 - 6 de Mayo

--> Empezar con la conexion entre un ldap encontrado en internet de prueba para ver algun ejemplo.

Dia 6 - 7 de Mayo

--> Instalacion y preparacion de mi directorio activo para cuando finalice con el ejemplo.

Dia 7 - 8 de Mayo

--> Terminar con la prueba del ejemplo de como conectar remotamente con Active Directory.

Dia 8 - 12 de Mayo

--> Hacer la documentacion del proyecto, pensar y creat la simulacion de la empresa y sus características.

Dia 9 - 13 de Mayo

--> Terminar con las características de la empresa.

Dia 10 - 14 de Mayo

--> Comenzar con la creacion del diseño de la pagina web.

Dia 11 - 18 de Mayo

--> Continuar con la creacion del diseño de la pagina web.

Dia 12 - 19 de Mayo

--> Comenzar con la contuccrion de la web.

Dia 13 - 20 de Mayo

--> Continuar con la contuccrion de la web.

Dia 14 - 21 de Mayo

--> Continuar con la contuccrion de la web.

Dia 15 - 22 de Mayo

--> Continuar con la contuccrion de la web.

Dia 16 - 25 de Mayo

--> Continuar con la contuccrion de la web.

Dia 17 - 26 de Mayo

--> Continuar con la contuccrion de la web.

Dia 18 - 28 de Mayo

--> Continuar con la contuccrion de la web.

Dia 19 - 2 de Junio

--> Comenzar con la documentacion del proyecto.

--------------------

1 -->Analisis contexto

¿A dónde quieres encaminar tu web? ¿Cuáles serían los objetivos?
  -La pagina web comenzara con un login simple que los datos de usuario corresponden al AD del servidor. Cuando el trabajador registre sus credenciales correctamente tendra acceso a la base de datos de clientes y sus modificaciones.
  -La pagina web a realizar tendra que cumplir con el objetivo de que un trabajador pueda agregar, modificar, eliminar o visualizar los datos de clientes

¿En que sector lo sitúas?
  -El sector de la empresa es el sector de las telecomunicaciones, pudiendo ser como ejemplo cualquier compañia de telefonia.

¿Cuáles son las características de ese sector?
  -La característica principal tendria que ser la comodidad para acceder a los datos de los clientes y la seguridad de esa informacion.

¿Conoces el sector?
  -No.

¿Conoces personas/grupos/empresas de ese sector?
  -Telefonica.

¿Cuál es el perfil de la gente que se mueve en ese sector?
  -Desde simples telefonistas asta tecnicos superiores o ingenieros en telecomunicaciones.

¿Qué incidencia crees que han tenido las nuevas tecnologías en ese sector?
  -Las nuevas tecnologias an echo que el sector se comvierta en algo global a nivel mundial con cantidades enormes de clientes potenciales.

¿Cómo lo han cambiado?
  -El uso del smartphone en todo el mundo y su conectividad revalorizo a las conpañias telefonicas.

¿A dónde crees que se encamina ese sector?
  -Pues sinceramente no lo se.

  --------------------

<h3>  2 --> Empresa: </h3>

  La empresa se llama La Nueva Onda SL, esta empresa se dedica a la telefonia movil y por lo tanto gestiona una gran cantidad de clientes en la base de datos y debe de dar todas las facilidades a sus trabajadores a la hora de buscar nuevos clientes y notificar nuevas promociones a sus clientes.
  <br>
  <h1>Logo</h1>
  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/Logo.png">
  <br>  
  <br>
  <h1>Esquema de la base de datos</h1>
  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/Bases.png">

  --------------------

  3 --> Documentacion del Proyecto

  El proyecto esta realizado de la siguiente manera, por una parte encontramos una pagiona web este tiene las siguientes características, Una base de datos SQL con las caracteristicas que en la imagen de la parte superior hemos podido observar.
  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/base_xa.png">
  <br>
  <br>
  Centrandonos en la parte del codigo de nuestra pagina web primero nos encontraremos con los siguientes dos archivos Login.php y ldap.php estos dos archivos contienen el codigo de la conexion desde nuestra web al servidor del AD usando el metodo Post como podemos observar en la parte izquierda de la foto adjuntada, por el tado contrario el lado derecho contiene el codigo del from donde insertaremos nuestras credenciales para acceder aplicacion y sus correspondientes style con el que le damos un toque mas corporativista como se puede apreciar en la segunda imagen.
  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/cod_login.png">
  <img src="Web_FCT/Imagenes_FCT/Pag_prin.png">
  <br>
  <br>
  Despues de añadir correctamente en el anterios from nuestas credenciales del AD nos dirigira al siguiente archivo .php con el nombre fe home_.php cual podremos utilizar para la colocacion de las caracteristicas de las ofertas de la compañia para facilitar la labor y eficiencia de los trabajadores, pero por ahora tiene unicamente el logo de la empresa, ademas como podemos apreciar en la foto de abajo este contienme en la parte superior una barra de navegacion por las diferentes pestañas de la web usando ul y li con sus correspondientes style.  
  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/home_cod.png">
  <img src="Web_FCT/Imagenes_FCT/Home.png">
  <br>
  <br>
  Dentro de las funciones principales de nuestra web se encuentra la siguiente pestaña el cual esta nombrado de la siguiente manera admin_clientes.php, su funcion principal es poner de una manera sencilla y visualmente claro cuales son los clientes que posee la empresa y los datos de cada uno. Como podemos observar en la primera imagen de abajo en las lineas desde el 74 al 79 se realizar una consulta sql del tipo select, por lo contrario el from que encontramos despues sirven para la modificacion de los datos del cliente pero lo explicamos mas adelante. La segunda foto contiene el codigo de la misma pestaña pero en esta imagen podemos apreciar los diferentes style que contiene esa pestaña en concreto, aparte contiene la coneccion con la base de datos desde la linea 58 asta 63. Por ultimo como podemos ver en la ultima foto asi es como se ve esta pestaña en nuestro buscador.
  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/cod_read.png">
  <img src="Web_FCT/Imagenes_FCT/cod_admin.png">
  <img src="Web_FCT/Imagenes_FCT/inser.png">
  <br>
  <br>

  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/inser_html.png">
  <img src="Web_FCT/Imagenes_FCT/inser_cod.png">
  <img src="Web_FCT/Imagenes_FCT/nuevo_cli.png">
  <br>
  <br>

  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/delete_cod.png">
  <img src="Web_FCT/Imagenes_FCT/delete_cod2.png">
  <img src="Web_FCT/Imagenes_FCT/delete_cli.png">
  <br>
  <br>

  <br>  
  <br>
  <img src="Web_FCT/Imagenes_FCT/cod_read.png">
  <img src="Web_FCT/Imagenes_FCT/upd_cod.png">
  <img src="Web_FCT/Imagenes_FCT/inser.png">
  <br>
  <br>
