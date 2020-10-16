<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title>Sua empresa - your solution with bravery</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/fonticon.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="main_header">
            <img src="images/logo.png" alt="" title=""/>
            <hr>
        </header>
        <main class="main_content">
            <h1>website in development</h1>
        </main>
        <section class="main_contact">
            <article class="main_contact_form">
                <h1>Fale Conosco</h1>
                <form method="post">
                    <input type="text" name="name" id="name" placeholder="Nome" required/>
                    <input type="email" name="email" id="email" placeholder="E-mail" required/>
                    <input type="tel" name="phone" id="phone" placeholder="Telefone"/>
                    <textarea name="message" id="message" placeholder="Sua mensagem" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </article>
            <article class="main_contact_alternative">
                <p>A BravoCode é uma agência focada em solucionar seus problemas nos meios digitais. Se seu objetivo é alavancar
                    sua empresa na internet, você está no lugar certo! Converse conosco e veja o que podemos fazer por
                    você. :-)</p>
                <div class="main_contact_alternative_now">
                    <a class="icon-mail3" href="mailto:contato@suaempresa.com.br">contato@suaempresa.com.br</a><br>
                    <a class="icon-whatsapp" href=" http://api.whatsapp.com/send?1=pt_BR&phone=5511974768049">(99) 9 9999-9999</a><br>
                    <a class="icon-instagram" href=" https://instagram.com/">@redesocial</a><br>
                    <a class="icon-facebook2" href=" https://facebook.com/">@redesocial</a>
                </div>
            </article>
        </section>
        <footer class="main_footer">
            BravoCode &copy <?= date('Y') ?> - your solution with bravery
        </footer>
    </body>
</html>