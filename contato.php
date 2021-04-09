<?php

    include ("header.html");
?>


<main>
    <h1>Formulario de contato</h1>
    <form name="add_msg" action="email.php" method="POST">
        <label>Nome:</label>
        <input type="TEXT" name="name" id="name" placeholder="Nome completo" required><br>
        <label>Telefone:</label>
        <input type="TEXT" name="telefone" id="name" placeholder="Seu numero de telefone" required><br>
        <label>Email:</label>
        <input type="email" name="email" id="email" placeholder="Seu email" required><br>
        <label>Assunto:</label>
        <input type="TEXT" name="assunto" id="assunto" placeholder="assunto" required><br>
        <label>Mensagem:</label>
        <input type="TEXT" name="mensagem" id="mensagem" placeholder="mensagem" required><br>
        <input type="submit" value="Enviar" name="sendAddMsg">
    </form>


</main>
</header>
<section>
</section>
<?php
    include ("footer.html");
?>