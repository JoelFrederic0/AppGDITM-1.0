<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Sobre Nós</h5>
                <p>O Grupo Disciplinar de Informática, Tecnologias e Multimédia tem como objetivo promover a excelência no ensino e na aprendizagem dessas áreas.</p>
            </div>
            <div class="col-md-4">
                <h5>Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Início</a></li>
                    <li><a href="#" class="text-white">Fórum</a></li>
                    <li><a href="#" class="text-white">Calendário</a></li>
                    <li><a href="#" class="text-white">Materiais</a></li>
                    <li><a href="#" class="text-white">Trabalho</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Endereço da Instituição</li>
                    <li><i class="fas fa-phone"></i> +55 (XX) XXXX-XXXX</li>
                    <li><i class="fas fa-envelope"></i> contato@instituicao.edu</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2024 Grupo Disciplinar de Informática, Tecnologias e Multimédia. Todos os direitos reservados.</p>
                <a href="login.php" class="text-white">Login</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Dados de exemplo para eventos
    const events = [{
            title: 'Evento 1',
            description: 'Descrição do Evento 1',
            imageUrl: 'https://marketplace.canva.com/EAFYIWPCudg/1/0/400w/canva-papel-de-parede-para-computador-astronauta-gal%C3%A1xia-preto-e-branco-sf8CjSgIWp8.jpg'
        },
        {
            title: 'Evento 2',
            description: 'Descrição do Evento 2',
            imageUrl: 'https://cybercrime.punjabpolice.gov.in/assets/images/Cybersecurity.jpg'
        },
        {
            title: 'Evento 3',
            description: 'Descrição do Evento 3',
            imageUrl: 'https://marketplace.canva.com/EAFYIWPCudg/1/0/400w/canva-papel-de-parede-para-computador-astronauta-gal%C3%A1xia-preto-e-branco-sf8CjSgIWp8.jpg'
        },
        {
            title: 'Evento 4',
            description: 'Descrição do Evento 4',
            imageUrl: 'https://www.worldbank.org/content/dam/photos/780x439/2020/nov-1/CropfieldGTMariaFleischmann.jpg'
        },
        {
            title: 'Evento 5',
            description: 'Descrição do Evento 5',
            imageUrl: 'https://cybercrime.punjabpolice.gov.in/assets/images/Cybersecurity.jpg'
        }
    ];

    // Função para gerar o HTML dos cards de eventos
    function generateEventCards(events) {
        let cardsHtml = '';
        const chunkSize = 3; // Número de cards por slide

        for (let i = 0; i < events.length; i += chunkSize) {
            const chunk = events.slice(i, i + chunkSize);
            const cardRowHtml = `
                    <div class="carousel-item ${i === 0 ? 'active' : ''}">
                        <div class="row">
                            ${chunk.map(event => `
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="${event.imageUrl}" class="card-img-top" alt="${event.title}">
                                        <div class="card-body">
                                            <h5 class="card-title">${event.title}</h5>
                                            <p class="card-text">${event.description}</p>
                                        </div>
                                    </div>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                `;
            cardsHtml += cardRowHtml;
        }
        return cardsHtml;
    }

    // Carregar os cards de eventos no carrossel
    const carouselInner = document.querySelector('#eventCarousel .carousel-inner');
    carouselInner.innerHTML = generateEventCards(events);
</script>
</body>

</html>