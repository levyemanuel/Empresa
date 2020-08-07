<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="ARV.css">
    <title>Agenda Telefônica</title>

    <script>

        function mostra(id) {
            if (document.getElementById(id).style.display == 'none') {
            document.getElementById(id).style.display = 'block'; }
            else {document.getElementById(id).style.display = 'none';}
        }

    </script>

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

</head>
<body>

    <div id="1" class="content">

    <input type="button" value="TEST" onclick="mostra('kk')">

    <div onclick="modal(this)" id="kk" class="primaria">

       <p class="ata">
        <?php echo $gestao; ?> 

        <p class="ata">
        <?php echo $ceo ?>

        <p class="ata">
        <?php echo $secExec ?>

        <p class="ata">
        <?php echo $cso ?>

        <p class="ata">
        <?php echo $cfo ?>

    </div>

    
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