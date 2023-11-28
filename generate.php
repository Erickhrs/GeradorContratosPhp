<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>&#10004;&#65039;CONTRATO GERADO</h1>
    </header>

    <?php
    echo "<div class=\"container-contract\">
        <h2>Contrato de Prestação de Serviços</h2>
        <strong>$_GET[freelanceName]</strong>
        <> <strong>$_GET[clientName]</strong>
            </h3>
            <h4><em>Contrato de prestação de serviços como freelancer</em></h4>

            <p><strong>$_GET[freelanceName], $_GET[freelanceProfession], $_GET[freelanceRG]</strong>
                (doravante
                denominado
                “CONTRATADO”) compromete-se a <strong>$_GET[clientName], $_GET[clientRG]</strong> (doravante denominado “CONTRATANTE”) a executar as obras e
                atividades
                do
                serviço contratado, que reger-se-á mediante as cláusulas e condições adiante estipuladas.
                Decidem as
                partes,
                na melhor forma de direito, celebrar o presente <strong>CONTRATO DE PRESTAÇÃO DE
                    SERVIÇOS</strong>,
                a
                <strong>$_GET[contractDate]</strong>.
            </p>

            <h3>CLAUSULA 1ª.- DO OBJETO:</h3>
            <p>O CONTRATADO deverá realizar <strong>$_GET[servicesDetails]</strong>, sem qualquer
                relação de
                dependência ou horário determinado.</p>

            <h3>CLAUSULA 2ª.- PREÇO:</h3>
            <p>O CONTRATANTE deverá pagar ao CONTRATADO a quantia de <strong>$_GET[contractPrice]</strong> através de <strong>$_GET[paymentMethod]</strong> Conforme acordado
                por
                ambas
                as partes, até <strong>$_GET[paymentLimitDate]</strong> do cronograma de pagamento
                acordado, pelo
                trabalho entregue e aceito pelo CONTRATANTE.</p>

            <h3>CLAUSULA 3ª.- FORMA DE PAGAMENTO:</h3>
            <p>O valor do contrato deverá ser pago por <strong>$_GET[paymentMethod]</strong> até
                <strong> $_GET[paymentLimitDate]</strong>, de acordo com o cronograma de entrega e pagamento acordado e
                aceito
                pelo
                CONTRATANTE.
            </p>

            <h3>CLAUSULA 4ª.- PRAZO:</h3>
            <p>O CONTRATADO se compromete a prestar os serviços até o término do contrato na data acordada.</p>

            <h3>CLAUSULA 5ª.- OBRIGAÇÕES:</h3>
            <p>O CONTRATANTE deverá facultar o acesso às informações e elementos necessários, em tempo hábil,
                para a
                boa
                execução do objeto do contrato, sendo obrigado a cumprir o disposto nas demais cláusulas e
                condições
                estabelecidas neste documento. O CONTRATADO deverá cumprir com eficiência e pontualidade os
                trabalhos
                confiados e as obrigações geradas pela natureza do serviço. O CONTRATADO declara que não pode
                garantir que a
                obra concluída estará completamente livre de erros, não podendo, portanto, ser responsabilizado
                perante o
                CONTRATANTE ou TERCEIROS por danos, inclusive lucros cessantes ou outros danos incidentais,
                consequentes ou
                especiais, mesmo com aviso prévio. O CONTRATANTE deverá supervisionar a execução do serviço
                confiado,
                podendo fazer as observações do caso, a serem analisadas em conjunto com o CONTRATADO.</p>

            <h3>CLAUSULA 6ª.- RESCISÃO</h3>
            <p>O atual contrato poderá ser rescindido por qualquer das partes com notificação por escrito de 5
                dias.
                Caso o
                contratante rescinda o contrato sem respeitar os 5 dias, o mesmo será responsável por pagar
                todos os
                honorários restantes até ao término do contrato.</p>

            <h3>CLAUSULA 7ª.- INDEPENDÊNCIA:</h3>
            <p>O CONTRATADO deverá atuar por conta própria, com autonomia e sem qualquer relação de trabalho ou
                subordinação
                ao CONTRATANTE. Seus direitos serão limitados, devido à natureza do contrato, a exigir o
                cumprimento
                das
                obrigações do CONTRATANTE e o pagamento pontual da remuneração aqui prevista.</p>

            <h3>CLAUSULA 8ª.- DIREITOS</h3>
            <p>O CONTRATANTE concorda com os termos expostos anteriormente:</p>
            <p><strong>($_GET[clientName], $_GET[contractorAddress], $_GET[contractorCPF]></p>
            <p><strong>($_GET[cityAndDate])____________________________</strong></p>

            <p>O CONTRATADO concorda com os termos expostos anteriormente:</p>
            <p><strong>($_GET[freelanceName], $_GET[contracteeAddress], $_GET[contracteeCPF])</strong></p>
            <p><strong>($_GET[cityAndDate])____________________________</strong></p>

            <p>O CONTRATANTE serão proprietários dos direitos autorais de todo o material criado sob este
                contrato
                após a
                conclusão do pagamento integral. O CONTRATADO só poderá exibir amostras de obras deste projeto
                como
                peças de
                seu portfólio com o consentimento e aprovação do CONTRATANTE.</p>
    </div>";
  ?>
</body>

</html>