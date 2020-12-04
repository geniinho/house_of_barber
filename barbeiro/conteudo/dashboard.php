<?php 
$barber_id = $_SESSION['barbearia_id'];
// print_r($_SESSION);
// echo "ID BARBEARIA ".$barber_id;
$selectServicosDia = "SELECT * FROM agendamento where barbearia = $barber_id";
$query = $mysqli -> query ($selectServicosDia);
$row = mysqli_fetch_assoc($query); 
// print_r ($row);
?>
<div class="home-main">
    <div class=" container-fluid">
        <div class="row pt-5 align-items-start">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                <div class="bg-white">
                    <div class="col-12 headerIcon pt-3 pb-3">
                            <span><i class="fas fa-clock"></i> Serviços agendados para o dia</span>
                        </div>
                        <div class="col-12 text-right mt-2">
                            <p class="card-category">
                                Total de serviços
                            </p>
                            <p class="card-data">
                                42
                            </p>
                        </div>
                        <hr class="hr-card">
                        <div class="col-md-12 cd-footer mb-3">
                            <p>
                                <i class="fas fa-eye"></i>
                                Visualizar os serviços diarios.
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                <div class="bg-white">
                    <div class="col-12 headerIcon pt-3 pb-3">
                        <span><i class="fas fa-money-bill-wave"></i> Lucro diario</span>
                    </div>
                    <div class="col-12 text-right mt-2">
                        <p class="card-category">
                            Lucro total
                        </p>
                        <p class="card-data">
                            1.456 R$
                        </p>
                    </div>
                    <hr class="hr-card">
                    <div class="col-md-12 cd-footer mb-3">
                        <p>
                            <i class="fas fa-eye"></i>
                            Visualizar os serviços diarios.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                <div class="bg-white">
                    <div class="col-12 headerIcon pt-3 pb-3">
                        <span><i class="fas fa-clock"></i> Serviço mais requisitado</span>
                    </div>
                    <div class="col-12 text-right mt-2">
                        <p class="card-category">
                            Serviço
                        </p>
                        <p class="card-data">
                            Barba e Cabelo
                        </p>
                    </div>
                    <hr class="hr-card">
                    <div class="col-md-12 cd-footer mb-3">
                        <p>
                            <i class="fas fa-eye"></i>
                            Visualizar os serviços diarios.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-5 mb-5 pb-5 container-fluid">
            <div class="graph">
                <canvas width="1000px" height="300px" id="chartServicos">
                </canvas>
            </div>
            <div class="graph-body col-12">
                <p class="pt-2">
                    <span><i class="fas fa-money-bill-wave"></i> Serviços diarios</span>
                </p>
                <hr class="hr-dif">
                <p class="mt-1 mb-1">
                    <i class="fas fa-clock"></i> Atualizado a x minutos atras
                </p>
            </div>
        </div>


        
        <div class="mt-5 pb-5 container-fluid">
            
            <div class="graph">
                <canvas width="1000px" height="300px"  id="chartLucros">
                </canvas>
            </div>
            <div class="graph-body col-12">
                <p class="pt-2 ">
                    <span><i class="fas fa-money-bill-wave"></i> Lucro mensal</span>
                </p>
                <hr class="hr-dif">
                <p class="mt-1 mb-1">
                    <i class="fas fa-clock"></i> Atualizado a x minutos atras
                </p>
            </div>
        </div>

    </div>
</div>