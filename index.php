<?php include("templates/header.php"); ?>
<main>
    <section class="hero">
        <div class="container">
            <h1>Bem-vindo à Aplicação Web do Grupo Disciplinar</h1>
            <p>Explore recursos, colabore e mantenha-se atualizado sobre todas as novidades.</p>
        </div>
    </section>

    <!-- Carrossel horizontal de eventos -->
    <div class="container mb-5">
        <h2 class="text-center mb-4">Eventos Publicados</h2>
        <div id="eventCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slides do carrossel aqui -->
                <div class="carousel-item active">
                    <!-- Conteúdo do primeiro slide -->
                    <img class="d-block w-100" src="imagem1.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <!-- Conteúdo do segundo slide -->
                    <img class="d-block w-100" src="imagem2.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <!-- Conteúdo do terceiro slide -->
                    <img class="d-block w-100" src="imagem3.jpg" alt="Terceiro Slide">
                </div>
            </div>
        </div>
    </div>

    <script>
        // Função para avançar para o próximo slide após 3 segundos
        function avancarProximoSlide() {
            $('#eventCarousel').carousel('next');
        }

        // Iniciar o temporizador para avançar para o próximo slide após 3 segundos
        $(document).ready(function() {
            setInterval(avancarProximoSlide, 3000); // 3000 milissegundos = 3 segundos
        });
    </script>

    <!-- Conteúdo carregado dinamicamente via JavaScript -->
</main>
<?php include("templates/footer.php"); ?>