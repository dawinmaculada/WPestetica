<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package qualyderm
 */

 get_header();

?>


<body >
  


    <!-- Page Header Start -->
    <!-- <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contacto</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-2">
        <div class="container py-2">
            <div class="text-center pb-2">
                <h6 class="text-uppercase"></h6>
                <h1 class="mb-5">Contacto</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0 ">
                    <div class="contact-form ">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <h2 style="text-align: center;">Formulario de contacto</h2>
                                <div class="col-sm-6 control-group ">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Nombre" required="required" data-validation-required-message="Nombre" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Correo electronico" required="required" data-validation-required-message="Correo electronico" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Asunto" required="required" data-validation-required-message="Asunto" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block" type="submit" id="sendMessageButton">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3038.0399391284973!2d-3.6761090000000003!3d40.407966!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42261b92d6bd47%3A0xd3b2bd8ff80e8b80!2sQualyderm!5e0!3m2!1ses!2ses!4v1733575882479!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


  
    
     <?php
   get_footer();
?>
 


    


   
<?php


