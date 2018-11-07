<?php include('partes/cabecalho.php'); ?>
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">Texto Grande aqui!</h2>
            <p class="cabecalho-home__subtitulo">Texto menorzinho aqui!</p>
            <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
        </header>
        <section id="servicos" class="servico"> <!-- Seção serviços -->
            <div class="container">
                <h2 class="home__titulo">O que fazemos</h2>
                <section class="servico__item">
                    <img src="img/icone-desenvolvimento-web.png" alt="icone-mundo">
                    <h3>Desenvolvimento web</h3>
                    <p class="servico__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eaque laboriosam dolor, reiciendis aperiam quibusdam magni. Quidem quae, magnam, delectus consequuntur reprehenderit velit iure in commodi itaque tenetur labore fuga.</p>
                </section>
                <section class="servico__item">
                    <img src="img/icone-carrinho-compras.png" alt="icone carrinho">
                    <h3>E-commerce</h3>
                    <p class="servico__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eaque laboriosam dolor, reiciendis aperiam quibusdam magni. Quidem quae, magnam, delectus consequuntur reprehenderit velit iure in commodi itaque tenetur labore fuga.</p>
                </section>
                <section class="servico__item">
                    <img src="img/icone-cafe.png" alt="icone cafe">
                    <h3>Café</h3>
                    <p class="servico__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eaque laboriosam dolor, reiciendis aperiam quibusdam magni. Quidem quae, magnam, delectus consequuntur reprehenderit velit iure in commodi itaque tenetur labore fuga.</p>
                </section>
            </div>
        </section><!-- Fim seção serviços -->
        <section class="depoimentos"> <!-- Seção depoimentos -->
            <div class="container">
                <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
                <div class="depoimentos__caixa">
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="foto pessoa">
                        <p class="depoimentos__texto">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quae, nihil iusto ipsa magnam commodi error molestiae
                            molestias at repellat, asperiores necessitatibus exercitationem
                            accusamus animi vero dignissimos dolor dolore fugiat nemo.
                        </p>
                        <p class="depoimentos__pessoa">Nome da pessoa - Cargo</p>
                    </section>
                    <section class="depoimentos__item">
                            <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="foto pessoa">
                            <p class="depoimentos__texto">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quae, nihil iusto ipsa magnam commodi error molestiae
                                molestias at repellat, asperiores necessitatibus exercitationem
                                accusamus animi vero dignissimos dolor dolore fugiat nemo.
                            </p>
                            <p class="depoimentos__pessoa">Nome da pessoa - Cargo</p>
                        </section>
                        <section class="depoimentos__item">
                                <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="foto pessoa">
                                <p class="depoimentos__texto">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quae, nihil iusto ipsa magnam commodi error molestiae
                                    molestias at repellat, asperiores necessitatibus exercitationem
                                    accusamus animi vero dignissimos dolor dolore fugiat nemo.
                                </p>
                                <p class="depoimentos__pessoa">Nome da pessoa - Cargo</p>
                            </section>
                </div>
            </div>
        </section> <!-- Fim seção depoimentos -->
<?php include('partes/rodape.php'); ?>