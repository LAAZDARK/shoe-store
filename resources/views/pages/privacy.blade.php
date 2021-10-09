@extends('pages.layouts.base')

@section('contenido')
<div class="blog-details pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-details-info">
                    <div class="blog-meta">
                        <ul>
                            <li>Shoe Store</li>
                            <li>October 09, 2021</li>
                        </ul>
                    </div>
                    <h3>Aviso de privacidad</h3>
                    {{-- <img src="assets/img/blog/13.jpg" alt=""> --}}
                    <p>En cumplimiento con lo establecido por la Ley Federal de Protección de Datos Personales en Posesión de Particulares, y con el fin de asegurar la protección y privacidad de sus datos personales y datos personales sensibles, así como regular el ejercicio los derechos ARCO (Acceso, Rectificación, Cancelación y Oposición del manejo de sus datos personales y datos personales sensibles) y con fundamento en los Artículos 1 y 2 de la Ley SHOE STORE hace de su conocimiento la política de privacidad y manejo de datos personales, en la que en todo momento buscará que el tratamiento de los mismos sea legítimo, controlado e informado, a efecto de garantizar la privacidad de los mismos.</p>
                    <p>El presente Aviso de Privacidad tiene como objeto informarle sobre el tratamiento que se le dará a sus datos personales cuando los mismos son recabados, utilizados, almacenados y/o transferidos por SHOE STORE.</p>
                    <p>Para SHOE STORE el tratamiento legítimo, controlado e informado de sus datos personales es de vital importancia para alcanzar los objetivos corporativos a través de todas las áreas del negocio y reiterar nuestro compromiso con su privacidad y el derecho a la autodeterminación informativa.</p>
                    <p>SHOE STORE, protege y salvaguarda sus datos personales para evitar el daño, pérdida, destrucción, robo, extravío, alteración, así como el tratamiento no autorizado.</p>
                    <p>Datos personales que SHOE STORE podrá recabar y, en su caso, tratar los siguientes datos personales, dependiendo de la relación que con usted exista:</p>
                    <ol>
                        <li>Nombre completo.</li>
                        <li>Código Postal.</li>
                        <li>Fecha de nacimiento.</li>
                        <li>Género.</li>
                        <li>Estado Civil.</li>
                        <li>Correo electrónico.</li>
                        <li>Teléfono particular, del trabajo, celular.</li>
                        <li>Forma de contacto preferida.</li>
                        <li>Información sobre cómo se enteró de los productos y servicios de SHOE STORE.</li>
                        <li>Información respecto a los productos de SHOE STORE que usted adquiere.</li>
                        <li>Registro de compras de productos.</li>
                    </ol>

                    <p>Podrán tratarse otros datos personales sensible y no sensibles, que no se incluyan en la lista anterior siempre y cuando dichos datos se consideren de la misma naturaleza y no sean excesivos respecto a las finalidades para las cuales se recaban de acuerdo con las condiciones previstas en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.</p>
                    <p>SHOE STORE podrá recopilar información de otras fuentes como son sociedades de información crediticia. Igualmente, y de acuerdo a las políticas de venta, facturación, crédito y/o cobranza de SHOE STORE, podemos solicitar copia de su identificación oficial con fotografía y/o comprobante de domicilio.</p>
                    <p>El tratamiento de datos personales de terceros que usted nos proporcione, se hace de conformidad con los términos y condiciones contenidos en este Aviso de Privacidad.</p>
                    <p>La temporalidad del manejo de los datos personales será indefinida a partir de la fecha en que usted los proporcionó a SHOE STORE.</p>
                    <p>Usted manifiesta su consentimiento para el tratamiento de sus datos personales de acuerdo a los términos y condiciones de este Aviso de Privacidad.</p>
                    {{-- <p></p> --}}
                    <div class="blog-feature">
                        <h5>Finalidades del tratamiento de los datos personales</h5>
                        <p>Los datos personales que proporcione cualquier persona física, incluyendo sin limitar, suscriptores, clientes, proveedores y/o usuarios, a SHOE STORE, a través del sitio web de SHOE STORE, mediante la utilización de nuestros servicios en línea, por escrito, por correo electrónico, por fax, vía telefónica y/o por cualquier otro medio, tendrán el uso que en forma enunciativa pero no limitativa se describe a continuación:</p>
                        <p>Para identificarle, ubicarle, comunicarle, contactarle, enviarle información y/o mercancía, así como su transmisión a terceros por cualquier medio. El uso de los datos personales tendrá relación con el tipo de interacción que usted tiene con SHOE STORE, ya sea comercial, civil, mercantil o de cualquier otra naturaleza.</p>
                        <p>Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. SHOE STORE recaba, utiliza, almacena o transfiere sus datos personales, en la medida en que las leyes aplicables lo permiten, para llevar a cabo lo siguiente:</p>
                        <ol>
                            <li>Comercialización, promoción y evaluación de productos y servicios.</li>
                            <li>Ofrecimiento y entrega de productos y servicios.</li>
                            <li>Envío de promociones sobre nuestros productos o servicios.</li>
                            <li>Conformación de expedientes del cliente.</li>
                            <li>Identificación de historial de compras.</li>
                            <li>Otorgamiento de líneas de crédito.</li>
                            <li>Ejecución de cobranza.</li>
                            <li>Desarrollo de nuevos productos y servicios.</li>
                            <li>Conocer el mercado y el desempeño de la empresa dentro de este.</li>
                            <li>Seguimiento a las ventas a fin de alcanzar la satisfacción del cliente.</li>
                            <li>Estudios para determinar la satisfacción del cliente.</li>
                            <li>Creación de directorios.</li>
                            <li>Interrelación de bases de datos para conocer el perfil y las necesidades del cliente.</li>
                            <li>Envío de comunicaciones de todo tipo, provenientes de SHOE STORE.</li>
                            <li>Invitaciones a eventos.</li>
                            <li>Realización de análisis a fin de determinar la eficacia de nuestra publicidad.</li>
                        </ol>
                        <p></p>
                        <p>En la recolección y tratamiento de datos personales, cumplimos con todos los principios estipulados en la Ley Federal de Protección de Datos Personales en Posesión de Particulares: licitud, calidad, consentimiento, información, finalidad, lealtad, proporcionalidad y responsabilidad.</p>
                        <br>
                        <p>Al visitar el sitio web de SHOE STORE, nosotros podríamos recopilar automáticamente algunos datos personales, que luego sumamos a un conjunto para que no estén asociados a una única persona que sea identificable. Con esta información elaboramos estadísticas sobre cuántos usuarios visitaron nuestro sitio web y a qué páginas y/o secciones del mismo accedieron. Al recopilar esta información, aprendemos a adaptar de la mejor manera a nuestro sitio web para nuestros visitantes. Tal y como explicamos a continuación, recopilamos esta información a través de “archivos temporales”, “web beacons” y “cookies”. Esta información se utiliza para crear perfiles de conjuntos generales de nuestra base de usuarios del sitio, y no para crear perfiles de usuario personalizados.</p>
                        <br>
                        <h3>Envío de publicidad</h3>
                        <p>Masmoda podrá enviar publicidad con autorización previa y confirmada por usted, una vez recabados sus datos.</p>
                        <br>
                        <p>Es obligación y responsabilidad de usted como titular informar a Masmoda si está inscrito en el Registro Público para Evitar Publicidad (REPEP) de la Procuraduría Federal del Consumidor (PROFECO), para evitar en s caso, el envío de publicidad o de información con fines mercadotécnicos o publicitarios. En caso de que usted como titular no se encuentre inscrito en el citado registro y manifieste que es su deseo no recibir información publicitaria a través de teléfono fijo, celular, mensajes, correo electrónico, o cualquier otro medio, deberá notificarlo al correo electrónico marketing@Masmoda.mx dentro de los 8 (ocho) días hábiles siguientes al día en que se haya puesto a su disposición este documento, lo anterior sin que ello impida a usted como titular activar o deshabilitar el envío de la publicidad y/o notificaciones, en forma automática desde tu cuenta o bien desde la configuración de tu dispositivo.</p>
                        <br>
                        <h3>Trasferencia de datos personales y con fines de mercadeo</h3>
                        <p>Masmoda de manera eventual y sólo cuando usted el titular otorgue su consentimiento de manera previa y por escrito, remitirá sus datos personales como titular a sus empresas filiales o subsidiarias, o socios, con el fin de promover la venta de productos y/o servicios de otros establecimientos afiliados a Masmoda.</p>
                        <br>
                        <p>La transferencia podrá realizarse, sin el consentimiento previo y expreso aquí mencionado en los casos previstos por el artículo 37 de la ley de la materia.</p>
                        <br>
                        <h3>Archivos temporales</h3>
                        <p>Los archivos temporales son archivos web del servidor (como el nombre del dominio o la dirección IP, URL, el código de respuesta http, el sitio web desde el que nos ha visitado o la fecha y duración de su visita) que se crean automáticamente cuando un usuario de Internet visita un sitio web. Una vez que deje de usar nuestro sitio web, procesaremos y utilizaremos esta información sólo para permitir más conexiones, para temas de facturación, para detectar interrupciones en el equipo de telecomunicaciones, así como para detectar abusos en nuestros servicios de telecomunicaciones. Esta información se elimina inmediatamente una vez finalizada la conexión al sitio web.</p>
                        <br>
                        <h3>Web Beacons</h3>
                        <p>Algunas páginas de nuestro sitio web contienen “web beacons” (también conocidos como etiquetas de Internet, etiquetas de píxel y clear GIFs). Los web beacons permiten a terceros obtener información, como es la dirección IP del ordenador que ha descargado la página en la que aparece el beacon, la URL de la página en la que aparece el beacon, la hora en la que se produjo la visita a la página con el beacon, el tipo de navegador utilizado para visitar la página, así como la información de las cookies enviada por el tercero.</p>
                        <br>
                        <h3>Cookies</h3>
                        <p>Las cookies son pequeñas piezas de información que son enviadas por el sitio web a su navegador. Las cookies se almacenan en el disco duro de su equipo y se utilizan para determinar sus preferencias cuando se conecta a los servicios de nuestro sitio, así como para rastrear determinados comportamientos o actividades llevadas a cabo por usted dentro de nuestro sitio web. En algunas secciones de nuestro sitio web requerimos que el cliente tenga habilitadas las cookies ya que algunas de las funcionalidades requieren de éstas para trabajar.</p>
                        <br>
                        <p>Las cookies nos permiten: a) reconocerlo al momento de entrar a nuestro sitio y ofrecerle de una experiencia personalizada, b) conocer la configuración personal del sitio web especificada por usted, por ejemplo, las cookies nos permiten detectar el ancho de banda que usted ha seleccionado al momento de ingresar a la página principal de nuestro sitio web, de tal forma que sabemos qué tipo de información es aconsejable descargar, c) calcular el tamaño de nuestra audiencia y medir algunos parámetros de tráfico, pues cada navegador que obtiene acceso a nuestro sitio web adquiere una cookie que se usa para determinar la frecuencia de uso y las secciones más visitadas de nuestro sitio web, reflejando así sus hábitos y preferencias, información que nos es útil para mejorar el contenido, los titulares y las promociones para los usuarios.</p>
                        <br>
                        <p>Las cookies también nos ayudan a rastrear algunas actividades, por ejemplo, en algunas de las encuestas que lanzamos en línea, podemos utilizar cookies para detectar si el usuario ya ha llenado la encuesta y evitar desplegarla nuevamente, en caso de que lo haya hecho. El botón de “ayuda” que se encuentra en la barra de herramientas de la mayoría de los navegadores, le dirá cómo evitar aceptar nuevas cookies, cómo hacer que el navegador le notifique cuando reciba una nueva cookie o cómo deshabilitar todas las cookies. Sin embargo, las cookies le permitirán tomar ventaja de las características más benéficas que le ofrecemos, por lo que le recomendamos que las deje activadas.</p>
                        <br>
                        <p>SHOE STORE utiliza la información suministrada durante el proceso de contacto comercial para realizar estudios internos sobre los datos demográficos, intereses y comportamiento de nuestros usuarios, este estudio se compila y analiza en conjunto. El objetivo más importante de SHOE STORE al recabar datos personales es entender y proporcionar al usuario una experiencia más satisfactoria al visitar nuestro sitio y adquirir nuestros productos y servicios, ya que al conocer más a nuestros visitantes podemos proporcionarles productos acordes a sus necesidades, así como contenido y publicidad más adecuados.</p>
                        <br>
                        <p>Al recabar los datos del usuario en línea, podemos elaborar estadísticas internas que nos indiquen cuáles son los servicios y productos más apreciados por diferentes segmentos de usuarios, igualmente nos sirve para dar la formalidad debida al proceso transaccional.</p>
                        <br>
                        <p>Además de solicitar información durante los procesos de registro antes mencionados, le podremos solicitar información personal en otras ocasiones como, por ejemplo, al participar en un evento o en cualquier promoción de nuestro sitio web y al notificarnos sobre un problema con nuestro sitio web y/o servicios. SHOE STORE también realiza encuestas entre sus usuarios en línea, cuyas respuestas son utilizadas en estudios internos.</p>
                        <br>
                        <p>La información solicitada permite a SHOE STORE contactar a los clientes cuando sea necesario. Los usuarios pueden ser contactados por teléfono, correo físico o electrónico si se requiriera información adicional para completar alguna transacción. Al comprar en línea, se solicitarán datos de tarjeta de crédito.</p>
                        <br>
                        <h3>Seguridad de los datos personales</h3>
                        <p>SHOE STORE implementará las medidas de seguridad, técnicas, administrativas y físicas, necesarias para proteger sus datos personales y evitar su daño, pérdida, alteración, destrucción o el uso, acceso o tratamiento no autorizado</p>
                        <br>
                        <p>Únicamente el personal autorizado, que ha cumplido y observado los correspondientes requisitos de confidencialidad, podrá participar en el tratamiento de sus datos personales. El personal autorizado tiene prohibido permitir el acceso de personas no autorizadas y utilizar sus datos personales para fines distintos a los establecidos en el presente Aviso de Privacidad. La obligación de confidencialidad de las personas que participan en el tratamiento de sus datos personales subsiste aun después de terminada la relación con SHOE STORE.</p>
                        <br>
                        <p>La protección de la privacidad de los datos personales de menores de edad, es especialmente importante para SHOE STORE. Por esta razón, cuando tengamos conocimiento de datos personales de menores de edad, su tratamiento se llevará a cabo cumpliendo en todo momento con los lineamientos y requerimientos establecidos en la Ley Federal de Protección de Datos Personales en Posesión de Particulares.</p>
                        <br>
                        <p>SHOE STORE no es responsable respecto al contenido y políticas de privacidad de sitios externos de este portal que puedan ser accesibles a través de links ubicados en el sitio web de SHOE STORE.</p>
                        <br>
                        <h3>Comunicaciones y Transferencias de datos personales</h3>
                        <p>Como parte de las operaciones propias del negocio y a fin de cumplir con las finalidades descritas; SHOE STORE podrá compartir con terceros, nacionales o extranjeros, algunos o todos sus datos personales. Dichos terceros podrán ser compañías afiliadas o subsidiarias de SHOE STORE; asesores profesionales externos y/u otros prestadores de servicios que actúen como encargados a nombre y por cuenta de SHOE STORE.</p>
                        <br>
                        <p>En tal sentido, SHOE STORE podrá contratar a uno o varios terceros como proveedores de servicios seleccionados para apoyar las actividades de promoción y comercialización de nuestros productos y servicios, manejo y administración de los datos personales que se recaban a través de este sitio web, o por cualquier otro medio distinto, así como para fines de verificación de la información que usted nos proporciona, por lo que SHOE STORE podría incluso remitirlos a dicho(s) tercero(s) únicamente para cumplir con la prestación de los servicios contratados.</p>
                        <br>
                        <p>SHOE STORE se asegurará a través de la firma de convenios y/o la adopción de otros documentos vinculantes, que dichos terceros mantengan medidas de seguridad, administrativas, técnicas y físicas adecuadas para resguardar sus datos personales, así como que dichos terceros únicamente utilicen sus datos personales para las finalidades para las cuales fueron contratados y de conformidad con el presente Aviso de Privacidad.</p>
                        <br>
                        <p>SHOE STORE no cederá, venderá o transferirá sus datos personales, a terceros no relacionados con SHOE STORE, sin su consentimiento previo. Sin embargo, SHOE STORE podrá transferir sus datos personales en los casos previstos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.</p>
                        <br>
                        <p>SHOE STORE puede transferir sus datos personales por requerimiento de una autoridad; y para el cumplimiento de obligaciones derivadas de una relación jurídica entre el titular de los datos personales y SHOE STORE.</p>
                        <br>
                        <p>Se entiende que ha otorgado su consentimiento a SHOE STORE para la transferencia de sus datos personales, si no manifiesta oposición a que los mismos sean transferidos.</p>
                        <br>
                        <p></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js-script')
    {{-- <script src="{{asset('js/contact.js')}}"></script> --}}
@endpush
