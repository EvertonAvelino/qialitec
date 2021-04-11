<?php

    include ("header.html");
?>


<main>
    <div class="jumbotron text-md-start descr-top" id="missao">
        <div class="container">
            <h2 class="text-left">Fale Conosco</h2>
            <hr>

            <form name="add_msg" action="email.php" method="POST">
                <div class="form-group">
                    <label>
                        <h5>Nome:</h5>
                    </label>
                    <input type="TEXT" class="form-control" name="name" id="name" placeholder="Nome completo"
                        required><br>
                </div>
                <div class="form-group">
                    <label>
                        <h5>Telefone:</h5>
                    </label>
                    <input type="phone" class="form-control" name="telefone" id="name"
                        placeholder="Seu numero de telefone" required><br>
                </div>
                <div class="form-group">
                    <label>
                        <h5>Email:</h5>
                    </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu email"
                        required><br>
                </div>
                <div class="form-group">
                    <label>
                        <h5>Assunto:</h5>
                    </label>
                    <input type="TEXT" class="form-control" name="assunto" id="assunto" placeholder="assunto"
                        required><br>
                </div>
                <div class="form-group">
                    <label>
                        <h5>Mensagem:</h5>
                    </label>
                    <textarea class="form-control" name="mensagem" id="mensagem" placeholder="mensagem" cols="45"
                        rows="8" maxlength="6555" required></textarea><br>
                    <button class="btn btn-success" type="submit" name="sendAddMsg">Enviar</button>
                </div>
        </div>
        </form>
    </div>
    </div>

</main>
</header>
<section>
</section>
<?php
    include ("footer.html");
?>