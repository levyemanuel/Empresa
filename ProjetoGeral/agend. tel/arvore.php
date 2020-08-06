<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="arv.css">
    <title>Agenda Telefônica</title>

<?php
    $gestao = 'Conselho de Gestão';
    $ceo = 'CEO';
    $secExec = 'Secretaria Executiva';
    $cso = 'CSO';
    $cfo = 'CFO';
    $gestMaq = 'Gestor Máquinas';
    $gestCam = 'Gestor Caminhões';
    $gestEngeLog = 'Gestor EngeLog';
    $gestSup = 'Gestor Suprimentos';
    $assJu = 'Assessor Jurídico';
    $assMa = 'Assessor Máquinas';
    $gestfin = 'Gestor Financeiro';
    $gestdh = 'Gestor de Desenvolvimento Humano';
    $gestqsma = 'Gestor de QSMA';
    $gesttic ='Gestor de TIC';
    $gestfac = 'Gestor de Facilities';
?>
 <script>

</script>

</head>
<body>

    <div id="1" class="content">

    <div onclick="modal(this)" id="2" class="gestao">
        <?php echo $gestao; ?> 
    </div> <br> <br>

    <div onclick="modal(this)" id="3" class="cont1">
        <?php echo $ceo ?>
        <?php echo $secExec ?>
    </div> <br> <br>

    <div onclick="modal(this)" id="4" class="cont2">
        <?php echo $cso ?>
    </div> <br> <br>

    <div onclick="modal(this)" id="5" class="contCso">
        <?php echo $cfo ?>
    </div> <br> <br>

    <div id="6" class="contju">
        <?php echo $assJu ?>
    </div> <br> <br>

    <div id="7" class="contma">
        <?php echo $assMa ?>
    </div> <br> <br>

    <div id="8" class="contfin">
        <?php echo $gestfin ?>
    </div> <br> <br>

    <div id="9" class="contdh">
        <?php echo $gestdh ?>
    </div> <br> <br>

    <div id="10" class="contqsma">
        <?php echo $gestqsma ?>
    </div> <br> <br>

    <div id="11" class="conttic">
        <?php echo $gesttic ?>
    </div> <br> <br>

    <div id="12" class="contfac">
        <?php echo $gestfac ?>
    </div> <br> <br>

    </div>

    <style>

         th {color: black; text-align: center;}
        .h3 {text-align: center; color: black;}

        .modal-cont {width: 100vw; height: 100vh; background: rgba(0,0,0,.5); position: fixed; top: 0px; left: 0px;
                     z-index: 2000; display: none; justify-content: center; align-items: center;}

        .modal-cont.mostrar {display: flex;}

        .modal {background: white; width: 60%; min-width: 300px; padding: 5px; border: 5px solid orange; border-radius: 4px;}

        @keyframes modal {
            from {
                opacity: 0;
                transform: translate3d(0, -60px, 0);
            }

         to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
         }
        }

        .mostrar .modal {animation: modal .3s;}

        .fechar {position: absolute; width: 65px; height: 50px; border-radius: 4px; color: black; 
                 border: 4px solid red; background: red; cursor: pointer; font-size: 1.2em;}
    </style>

    <div id="modal-promocao" class="modal-cont">

    <div class="modal">

    <button type="button" class="fechar" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()"><span aria-hidden="true">×</span></button> 

    <h3 class="h3">Funcionarios deste setor:</h3>

    <table>
                <tr>
                    <th>Nome:</th>
                    <th>Setor:</th>
                    <th>Ramal:</th>
                    <th>Celular:</th>
                    <th>Celular 2:</th>
                </tr>
                <tr>
                    <th>Nome Sobrenome da Silva</th>
                    <th>Setor Escolhido</th>
                    <th>12345</th>
                    <th>85996619913</th>
                    <th>88998050756</th>
                </tr>
                <tr>
                    <th>Nome Sobrenome da Silva</th>
                    <th>Setor Escolhido</th>
                    <th>12345</th>
                    <th>85996619913</th>
                    <th>88998050756</th>
                </tr>
                <tr>
                    <th>Nome Sobrenome da Silva</th>
                    <th>Setor Escolhido</th>
                    <th>12345</th>
                    <th>85996619913</th>
                    <th>88998050756</th>
                </tr>
                <tr>
                    <th>Nome Sobrenome da Silva</th>
                    <th>Setor Escolhido</th>
                    <th>12345</th>
                    <th>85996619913</th>
                    <th>88998050756</th>
                </tr>

            </table>

    </div>

    </div>

    <script>

            function modal(event) {
                event.classList.add("mostrar");
                document.querySelector(".modal-cont").classList.add("mostrar");}

    </script>

</body>
</html>