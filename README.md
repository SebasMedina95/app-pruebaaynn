#
# ``PRUEBA TÉCNICA``
------------------------------
# Juan Sebastian Medina Toro.
------------------------------
# ``Empresa``: AYNN
# ``Entrega``: Sábado 24 de Junio/2023 -> Max 23:59pm
#

### NOTAS IMPORTANTES DE LA PRUEBA ###
# ``Datos de aplicación general:``
    Laravel versión 10
        * Starter Kit
            * Para el login y las autenticaciones se usó Breeze
            * Se incorporó los Blade Templates
    PHP en su versión 8.1
    Se usó XAMPP para la gestión de MariaDB y el servidor Apache
    Sistema Operativo Windows 10 64x
    Terminal de comandos de Windows
    Editor de Código Visual Studio Code
#   ``GitHub (Público) => `` https://github.com/SebasMedina95/app-pruebaaynn.git
    Se fueron manejando diferentes commit durante el proceso

#   La aplicación pareciera que tiene errores cuando se abre con el editor de Visual Studio Code y se tienen ciertas extensiones, ignorar esta parte, eso ocurre es por las imágenes que se están cargando, entonces, puede que aparezca como error pero en realidad no lo es y se puede ejecutar normal el proyecto

#   PARA INICIAR, Crear la base de datos ``prueba-aynn`` y luego:
    * Confirme que el .env tenga el nombre correcto de BD
    * Luego aplique primero php artisan migrate
    * Luego, al todo salir ok, ejecute php artisan migrate:refresh --seed (Aprovechando que estamos en Dev)


# Usaremos ``Material Kit`` para el tema de la interfaz
    * Con Material Kit acoplamos  incorporamos en paralelo el tema de Bootstrap y DataTables
    * Material trabaja con Bootrstrap, estamos trabajando sobre la versión 4+ para de Bootstrap y Datatables
    * Nos ayudamos con el tema visual de los botones y los íconos
    * Generamos una alta compatibilidad con interfaz independiente
------------------------------------------------    
#   Adicional ``Funcionamiento:``:
        * El eliminado será enteramente lógico, por el tema de las FK, exeptuando la eliminación de imágenes de productos
        * Campos validados (En su gran mayoría)
        * En el listado general, el que se muestra al usuario final, debe tener al menos una imagen y estar habilitado para que aparezca allí, esto por razones estéticas y también funcionales
        * Para acceder a la gestión de productos, se debe estar autenticado, se creo un AdminMiddleware que fue configurado también en el Kernel.php para que aceptara el alias de admin para que, solo podemos entrar a esta sección los admin, mientras que la sección del carrito donde se anexarán será para los clientes que se registren pero no tengan un rol de admin.

        * TODAS las contraseñas usadas y que se pre cargan con los usuarios precargados en los seeders son 123456789 
        * Las imagenes que se guardarán son URL's, no se dispondrá de carpetas locales para ello, solo URL de imágenes en línea.
        * Para la gestión de categorías, productos y ciudades, se debe estar logeado y como rol de admin, al estar cumpliendo esto, en el dropdown que tenemos al estar logeados en el dashboard y general nos deben aparecer las opciones, si no tiene el rol de admin y esta logeado no le aparecerá estas opciones
        * La imagen de portada que aparece para los productos está dada por aquella que tenga el featured activado, es decir, la imagen destacada es la que define cual es la imagen que estará apareciendo como portada de producto -> Si no tiene featured activado, entonces no aparecerá la imagen en el listado para los clientes ni tampoco el producto, es una "consignia" para que lo que se visualice sea "adecuado" -> se puede modificar en versiones futuras
--------------------------------------------------

Se construyeron Seeders para pre cargar información de entrada
# entonces, ejecutamos ANTES DE INICIAR LA APLICACIÓN: ``php artisan migrate:refresh --seed``
con la finalidad de que re migremos los elementos y en paralelo carguemos seeds con información.

# Lógica del carrito de compras:
Order y Order Detail
    * Order: En status vamos a manejar 4 estados:
        -> Active   -> Cuando se esta llenando el carrito, quiere decir que la orden sigue activa
        -> Pending  -> Si el usuario termino de hacer la selección y envía al admin
        -> Approved -> El admin revisa los pedidos pendientes y los aprueba
        -> Cancell  -> El admin revisa los pedidos pendientes y los cancela
        -> Finished
# Entonces:
    Cuando estemos logeados en el sistema, y estemos en el listado de productos de la ruta / que es la principal,
    podemos seleccionar cualquiera de los productos y nos lleva a su ventana informativa, allí tendrémos un botón
    para agregar al carrito de cierta manera, o a la orden, por tanto, nos abre un modal, y de allí seleccionamos
    la cantidad y guardamos, nos vuelve a quedar en la ventana actual, PERO, al estar logeados, nos vamos a las opciones
    del menu superior derecho y le damos a "Ir a Dashboard" y allí veremos la orden en la opción Carrito de Compras.
        En este punto, podemos ver el detalle de la orden y/o eliminar el detalle de la orden
        Si queremos volver al listado de productos general, en el mismo menu está la opción ir a Menu Principal
        Al darle a la opción de realizar pedido se nos limpia el carrito y se guarda la información/actualiza

# NOTA:
No pudo ser implementado el apartado de Angular por temas técnicos y el tiempo así como el conocimiento jugo en contra, sin embargo, se entrega la aplicación con una interfaz soportada por librerías, diseño propio y soporte de plantillas para tener la experiencia de usuario. Se anexan algunos conceptos de interacción y operabilidad para mitigar el impacto por el tema de Angular en la calificación.
Se agregan algunos "cariñitos" a la implementación
# ``Estoy en total dispoción de seguir aprendiendo y perfeccionar las habilidades requeridas :)``.
