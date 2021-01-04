@include('layout.heder')


<!-- Services-->
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Conose nuestros servicios</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">
                        Desarrollamos sistemas para comercio electrónico como puntos de ventas o Sistemas de control de productos o de calidad etc.
                        </p>
                    </div>
                    
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Diseños Responsivos</h4>
                        <p class="text-muted">
                            Todos nuestros sistemas son responsivos son adaptables a cualquier dispositivo móvil como tablets o teléfonos inteligentes.
                        </p>
                    </div>
                    
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Seguridad</h4>
                        <p class="text-muted">
                            La seguridad para nosotros es muy importante por eso utilizamos los protocolos de seguridad informática más actuales.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-desktop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Mantenimiento de Equipo Preventivo / Correctivo</h4>
                        <p class="text-muted">
                            Realizamos mantenimiento preventivo, correctivo a su equipos también los formateamos en caso de ser necesario   
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portafolio</h2>
                    <h3 class="section-subheading text-muted">Conoce nuestros proyectos realizados</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/trabajos/Trabajo.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Proyecto desarrollado con C#</div>
                                <div class="portfolio-caption-subheading text-muted">Crud</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/trabajos/portafolio.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Proyecto relizado con angular</div>
                                <div class="portfolio-caption-subheading text-muted">Blog personal</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/trabajos/Registrodecontrol.PNG')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sistema de control usuarios</div>
                                <div class="portfolio-caption-subheading text-muted">control de visitas</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/portfolio/trabajos/puntodeventa.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">punto de venta</div>
                                <div class="portfolio-caption-subheading text-muted">control de inventario y ventas de articulos</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Contact -->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CONTÁCTANOS</h2>
                    <h3 class="section-subheading text-muted">TRABAJEMOS JUNTOS</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" action="{{route('contacto')}}" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Ingresa tu Nombre completo *" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Ingresa tu correo electronico *" required="required" data-validation-required-message="Por favor ingresa tu correo electrónico." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Ingresa tu número Telefónico *" required="required" data-validation-required-message="Por favor ingresa tu telefono." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Ingresa tu Mensaje *" required="required" data-validation-required-message="Por favor ingresa tu mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </section>
@include('layout.foder')
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Control de gastos personal.</h2>
                                    <!-- <p class="item-intro text-muted">.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/portfolio/trabajos/Trabajo.png')}}" alt="" />
                                    <p>
                                        El proyecto consiste en que un usuario registre su ingresos y egreso para llevar un control de su dinero. 
                                        El proyecto fue realizado con las tecnologías de bootstrap 3, c# ,sql server 2019,jquery.
                                    </p>
                                    <ul class="list-inline">
                                        <li>Fecha: Mayo 2020</li>
                                        <!-- <li>Client: Threads</li>
                                        <li>Category: Illustration</li> -->
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                            Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Portafoilio Personal</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/trabajos/portafolio.png')}}" alt="" />
                                    <p>
                                        Este proyecto es como un currículum vitae donde se coloca toda la información de la persona posteriormente se sube a un servidor para que vean su perfil fue realizado con las tecnologías como angularjs, Mongodb, Express
                                    </p>
                                    <ul class="list-inline">
                                        <li>Fecha: Agosto 2020</li>
                                        <!-- <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li> -->
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Control de usuarios</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/portfolio/trabajos/Registrodecontrol.PNG')}}" alt="" />
                                    <p>
                                    Este proyecto consiste en registrar el usuario para poder entrar a un fraccionamiento privado es más enfocado en mantener la seguridad de los fraccionamientos
                                    </p>
                                    <ul class="list-inline">
                                        <li>Fecha: Septiembre 2020</li>
                                        <li>Espera</li>
                                        <!-- <li>Category: Identity</li> -->
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                         Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Punto de Venta</h2>
                                    <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                    <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/portfolio/trabajos/puntodeventa.png')}}" alt="" />
                                    <p>
                                        Este proyecto es un control de venta de artículos como  electrónicos, cómputo,
                                        también realiza el cobro de colegiaturas. Fue realizado con codeigniter 3, bootstrap , jquery.js , vue.js,  Mysql como motor de base de datos.
                                    </p>
                                    <ul class="list-inline">
                                        <li>Fecha: Agosto 2019</li>
                                        <!-- <li>Client: Lines</li>
                                        <li>Category: Branding</li> -->
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        