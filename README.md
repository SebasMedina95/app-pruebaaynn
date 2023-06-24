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

# Usaremos ``Material Kit`` para el tema de la interfaz
    * Con Material Kit acoplamos  incorporamos en paralelo el tema de Bootstrap y DataTables
    * Material trabaja con Bootrstrap, estamos trabajando sobre la versión 4+ para de Bootstrap y Datatables
    * Nos ayudamos con el tema visual de los botones y los íconos
    * Generamos una alta compatibilidad con interfaz independiente
------------------------------------------------    
#   Adicional:
        * El eliminado será enteramente lógico, por el tema de las FK
        * Campos validados (En su gran mayoría)
        * En el listado general, el que se muestra al usuario final, debe tener al menos una imagen y estar habilitado para que aparezca allí, esto por razones estéticas y también funcionales
        * Para acceder a la gestión de productos, se debe estar autenticado, se creo un AdminMiddleware que fue configurado también en el Kernel.php para que aceptara el alias de admin para que, solo podemos entrar a esta sección los admin, mientras que la sección del carrito donde se anexarán será para los clientes que se registren pero no tengan un rol de admin.

        * TODAS las contraseñas usadas y que se pre cargan con los usuarios precargados en los seeders son 123456789 
        * Las imagenes que se guardarán son URL's, no se dispondrá de carpetas locales para ello, solo URL de imágenes en línea.
        * Para la gestión de categorías, productos y ciudades, se debe estar logeado y como rol de admin, al estar cumpliendo esto, en el dropdown que tenemos al estar logeados en el dashboard y general nos deben aparecer las opciones, si no tiene el rol de admin y esta logeado no le aparecerá estas opciones
        * La imagen de portada que aparece para los productos está dada por aquella que tenga el featured activado, es decir, la imagen destacada es la que define cual es la imagen que estará apareciendo como portada de producto -> Si no tiene featured activado, entonces no aparecerá la imagen en el listado para los clientes
--------------------------------------------------

Se construyeron Seeders para pre cargar información de entrada
# entonces, ejecutamos ANTES DE INICIAR LA APLICACIÓN: ``php artisan migrate:refresh --seed``
con la finalidad de que re migremos los elementos y en paralelo carguemos seeds con información.

# NOTA:
No pudo ser implementado el apartado de Angular por temas técnicos y el tiempo así como el conocimiento jugo en contra, sin embargo, se entrega la aplicación con una interfaz soportada por librerías, diseño propio y soporte de plantillas para tener la experiencia de usuario. Se anexan algunos conceptos de interacción y operabilidad para mitigar el impacto por el tema de Angular en la calificación.
Se agregan algunos "cariñitos" a la implementación
# ``Estoy en total dispoción de seguir aprendiendo y perfeccionar las habilidades requeridas :)``.
