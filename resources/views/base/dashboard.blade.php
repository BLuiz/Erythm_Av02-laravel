@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Principal')

<!-- Masthead-->
<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-white">
                    <!-- Page heading-->
                    <h1 class="mb-5">Coloque seu e-mail para ficar dentro de todas as novidades da nossa empresa!!</h1>
                    <!-- Signup form-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Endereço de email" data-sb-validations="required,email" />
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">É necessário um endereço de e-mail.</div>
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">O e-mail não é válido.</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button></div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Envio com sucesso!</div>
                                </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Icons Grid-->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb|-lg-3">
                    <div class="features-icons-icon d-flex"><i class="fa-solid fa-users text-primary m-auto"></i></div>
                    <h3>Clientes</h3>
                    <p class="lead mb-0">Adicione novos clientes para sua loja de discos, você pode listar, esditar e excluir!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="fa-solid fa-envelope text-primary m-auto"></i></div>
                    <h3>Entrega</h3>
                    <p class="lead mb-0">Para deixar tudo organizado, você pode listar todos os locais de entrega e altera-los se for necessário</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="fa-solid fa-compact-disc text-primary m-auto"></i></div>
                    <h3>Discos</h3>
                    <p class="lead mb-0">Escolha qualquer disco, com muitas músicas de infinitos artistas, basta escolher!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Image Showcases-->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../bootstrap/assets/img/disco2.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Por que discos?</h2>
                <p class="lead mb-0">Nossa empresa se especializou com a compra e venda de discos por serem um material que foi muito famoso desde sua criação e está voltando para os top mais vendidos do mundo!</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('../bootstrap/assets/img/disco3.jpg')"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Nossos clientes</h2>
                <p class="lead mb-0">Nossos clientes são grandes colecionadores de discos antigos ou novos aspirantes amantes da música, nossa empresa visa e compartilha desse amor pela música, ou seja, todo amante da música é nosso possível cliente!!</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../bootstrap/assets/img/disco4.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Sobre as entregas</h2>
                <p class="lead mb-0">Trabalhamos com o sistema de correios, onde você vai colocar seu endereço na hora da compra e embalamos e enviamos com todo cuidado, nossa empresa se responsabiliza por qualquer dano que acontecer no produto durante a viagem!</p>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials-->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">O que nossos clientes estão dizendo...</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="../bootstrap/assets/img/disco6.png" alt="..." />
                    <h5>Ana Catarine Pinto.</h5>
                    <p class="font-weight-light mb-0">"Minha loja de comprar e trocar discos favorta!!!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="../bootstrap/assets/img/disco7.png" alt="..." />
                    <h5>Eliando da Costa</h5>
                    <p class="font-weight-light mb-0">"Consegui varios discos rassímos por aqui, estou muito feliz tanto com o atendimento quanto a listagem!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="../bootstrap/assets/img/disco5.png" alt="..." />
                    <h5>Linda Santos de Carvalho</h5>
                    <p class="font-weight-light mb-0">"A entrega foi muito rápida, gostei muito, queria levar TODOS os discos!!!!!"</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action-->
<section class="call-to-action text-white text-center" id="signup">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <h2 class="mb-4">Pronto para começar? Inscreva-se agora!</h2>
                <!-- Signup form-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                    <!-- Email address input-->
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Endereço de e-mail" data-sb-validations="required,email" />
                            <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">O e-mail foi cadastrado</div>
                            <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">O endereço de e-mail não é válido.</div>
                        </div>
                        <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button></div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Envio de formulário bem-sucedido!</div>
                            <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer footer-dark bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#!">About</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Contact</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-4">
                        <a href="#!"><i class="bi-facebook fs-3"></i></a>
                    </li>
                    <li class="list-inline-item me-4">
                        <a href="#!"><i class="bi-twitter fs-3"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!"><i class="bi-instagram fs-3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

