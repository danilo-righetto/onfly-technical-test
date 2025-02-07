<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apresentação de Projeto desenvolvido em PHP por [Seu Nome]">
    <title>Onfly | Teste técnico PHP - Danilo Righetto</title>
    <link rel="icon" href="https://www.onfly.com.br/wp-content/uploads/2019/12/cropped-favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://www.onfly.com.br/wp-content/uploads/2019/12/cropped-favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://www.onfly.com.br/wp-content/uploads/2019/12/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage" content="https://www.onfly.com.br/wp-content/uploads/2019/12/cropped-favicon-270x270.png">
    <style>
        h2,header,ul li a{color:#3498db}footer,header{padding:20px 0;text-align:center}*{margin:0;padding:0;box-sizing:border-box}body{font-family:Arial,sans-serif;background-color:#f4f6f9;color:#333;line-height:1.6}.container{width:90%;max-width:1200px;margin:0 auto}.container img{width:40%;height:40%}header{background-color:#fff}header h1{font-size:36px}section{padding:40px 0}h2{font-size:28px;margin-bottom:20px}ul{list-style-type:none}ul li{font-size:18px;margin-bottom:10px}ul li a{text-decoration:none}ul li a:hover{text-decoration:underline}.challenger>ul li{font-size:16px;margin-bottom:0}footer{background-color:#333;color:#fff}footer p{font-size:16px}@media (max-width:768px){header h1{font-size:28px}section{padding:20px 0}h2{font-size:24px}ul li{font-size:16px}}
    </style>
</head>
<body>

    <header>
        <div class="container">
            <img data-perfmatters-preload="" loading="lazy" width="768" height="307" src="https://www.onfly.com.br/wp-content/uploads/2024/07/onfly-logo-azul-01-768x307-1.webp" class="default-logo" alt="Onfly" decoding="async">
            <h1>Onfly | Teste técnico PHP - Danilo Righetto</h1>
        </div>
    </header>

    <section class="intro">
        <div class="container">
            <h2>Sobre o Projeto</h2>
            <p>É necessário desenvolver um microsserviço em Laravel para gerenciar pedidos de viagem corporativa. O microsserviço deve expor uma API REST para as seguintes operações:</p>
            <br>
            <div class="challenger">
                <ul>
                    <li>- <strong>Criar um pedido de viagem:</strong> Um pedido deve incluir o ID do pedido, o nome do solicitante, o destino, a data de ida, a data de volta e o status (solicitado, aprovado, cancelado).</li>
                    <li>- <strong>Atualizar o status de um pedido de viagem:</strong> Possibilitar a atualização do status para "aprovado" ou "cancelado". (nota: o usuário que fez o pedido não pode alterar o status do mesmo)</li>
                    <li>- <strong>Consultar um pedido de viagem:</strong> Retornar as informações detalhadas de um pedido de viagem com base no ID fornecido.</li>
                    <li>- <strong>Listar todos os pedidos de viagem:</strong> Retornar todos os pedidos de viagem cadastrados, com a opção de filtrar por status.</li>
                    <li>- <strong>Cancelar pedido de viagem após aprovação:</strong> Implementar uma lógica de negócios que verifique se é possível cancelar um pedido já aprovado</li>
                    <li>- <strong>Filtragem por período e destino:</strong> Adicionar filtros para listar pedidos de viagem por período de tempo (ex: pedidos feitos ou com datas de viagem dentro de uma faixa de datas) e/ou por destino.</li>
                    <li>- <strong>Notificação de aprovação ou cancelamento:</strong> Sempre que um pedido for aprovado ou cancelado, uma notificação deve ser enviada para o usuário que solicitou o pedido.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="developer-info">
        <div class="container">
            <h2>Sobre o Desenvolvedor</h2>
            <p>Meu nome é Danilo Righetto, sou Engenheiro de Software com mais de 9 anos de experiência em desenvolvimento e análise de sistemas, focado em soluções que otimizam processos e trazem inovação tecnológica para empresas. </p>
            <p>Ao longo da minha carreira, adquiri sólida experiência em diversas linguagens de programação, como PHP, Node.js, Python e Java, além de amplo conhecimento em metodologias ágeis (Scrum, Kanban) e na utilização de frameworks modernos para o desenvolvimento de software.</p>
            <br>
            <ul>
                <li><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/danilo-righetto/" target="_blank">LinkedIn - Danilo Rigehtto</a></li>
                <li><strong>E-mail:</strong> <a href="mailto:danilorighetto@hotmail.com">danilorighetto@hotmail.com</a></li>
                <li><strong>Site:</strong> <a href="https://www.danilorighetto.com.br" target="_blank">www.danilorighetto.com.br</a></li>
            </ul>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contato</h2>
            <p>Se você tiver alguma dúvida sobre o projeto ou deseja saber mais sobre como ele foi desenvolvido, fique à vontade para entrar em contato!</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Danilo Righetto. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>
