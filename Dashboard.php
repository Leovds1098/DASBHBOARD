<?php

include 'includes/tables/header.php';
include 'dashboard.php';

?>


<div class="all-content-wrapper">
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right: 0; padding-left: 0;">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Pagina Inicial</h1>
                            </div>
                        </div>
                        <div class="container-fluid tab-content" style="min-height:24.5rem;">
                            <div>
                                <p>
                                    <strong>Telefone empresa = (xx) xxxxx-xxxx / (xx) xxxx-xxxx</strong>
                                </p>
                                <p>
                                    <strong>Transferir ligação = Flash + n° do ramal</strong>
                                </p>
                                <p>
                                    <strong>Buscar ligação de outro ramal = 16 + n° do ramal</strong>
                                </p>
                                <p>
                                    <strong>Voltar ligação para quem transferiu = Flash + 14</strong>
                                </p>
                                <p>
                                    <strong>Fazer ligação para fora da empresa = 0 + n° do telefone sem DDD</strong>
                                </p>
                                <p>
                                    <strong>Ligação interurbana = 0 + 012 + (DDD da cidade sem o 0) + n° do telefone</strong>
                                </p>
                            </div>
                            <table id="tabela" class="table table-striped" data-toggle="table" data-search="true"
                                data-show-toggle="true" data-show-export="true">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Ramal</th>
                                        <th>Setor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- EXEMPLO:
                                     <tr>
                                        <td> Leonardo </td>
                                        <td> 1234 </td>
                                        <td> Tecnologia da Informação (T.I) </td>
                                    </tr> -->
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario </td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>
                                    <tr>
                                        <td>nome funcionario</td>
                                        <td>ramal do setor</td>
                                        <td>nome do setor</td>
                                    </tr>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    //include  './../../footer.php';
    include  'includes/tables/footer.php';
?>