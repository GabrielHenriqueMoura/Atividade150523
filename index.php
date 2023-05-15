<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manter Aluno e Professor</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
    <style>
      
      body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
      }
</style>
</head>

<body>
    <?php include("./menu.php") ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">IFMS</h1>
        <p class="lead"> 
        <li> O Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul (IFMS) foi criado pela Lei nº 11.892, de 29 dezembro de 2008, quando o Ministério da Educação (MEC) reestruturou a Rede Federal de Educação Profissional, Científica e Tecnológica.
</li>
<li> 
O processo de implantação do IFMS começou em 2007, com a sanção da Lei nº 11.534, de 25 de outubro de 2007, que criou escolas técnicas e agrotécnicas federais. Na ocasião, foram instituídas a Escola Técnica Federal de Mato Grosso do Sul, com sede em Campo Grande, e a Escola Agrotécnica Federal de Nova Andradina.
</li>
<li> 
No ano seguinte, com a reestruturação da Rede Federal, o IFMS foi criado com a previsão de instalação dos campi Campo Grande e Nova Andradina. Na ocasião, o MEC designou a Universidade Tecnológica Federal do Paraná (UTFPR) como tutora do processo de implantação pelo período de dois anos.
</li>
<li> 
Em 2009, com o novo projeto de expansão da Rede Federal, foram criados outros cinco campi nos municípios de Aquidauana, Corumbá, Coxim, Ponta Porã e Três Lagoas.

</li>
        </p>
    </div>


<!-- implementar coisas que faltam no código seguindo oq for pedido no exercicio 3 required em todos os campos
 !-->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms1.png" class="d-block w-100" alt="Estudantes do IFMS fazendo uma refeição">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms2.jpeg" class="d-block w-100" alt="Aula no IFMS">
                        </div>
                        <div class="carousel-item">
                            <img src="./arquivos/imagens/ifms3.jpeg" class="d-block w-100" alt="Alunos fazendo suas atividades no IFMS">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                -- 
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.ifms.edu.br/noticias/2023/abertas-inscricoes-para-novas-vagas-no-subsequente-e-proeja/jovem-e-adulto.jpeg/@@images/5eacec8a-3c76-4779-87de-23f0febba5fa.jpeg" class="card-img-top" alt="Link do ifms para inscrições">
                    <div class="card-body">
                        <h5 class="card-title">Aberta as inscrições para novas vagas no subsequente e Projea</h5>
                        <p class="card-text">São 320 vagas para cursos técnicos gratuitos, com ingresso no segundo semestre. Inscrições podem ser feitas até dia 5 de junho

                        </p>
                      
                  <a href="https://www.ifms.edu.br/noticias/2023/abertas-inscricoes-para-novas-vagas-no-subsequente-e-proeja" class="btn btn-primary">Acessar</a>

                       
                    <!-- Link para o site do ifms -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>