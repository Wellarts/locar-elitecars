<!DOCTYPE html>
<html>
<head>

<style>
    .retangulo {
        width: 100%;
        height: 2.5%;
        background-color: rgb(222, 225, 226);
        display: flex;
        align-items: center;
        text-align: center;
    }
    .texto {
        margin: auto;
        font-weight: bold;
        font-size: 16px;

    }
    .tabelas {
        border: 1px;
        border-style: solid;
        border-color: grey;
        width: 100%;
        border-collapse: collapse;
    }


    #ficha td {
    border: 1px solid rgb(160 160 160);
    padding: 8px 10px;
    }


    .tx {
        line-height:1.5;
        font-size: 15px;
    }

</style>

<style>
    .tela {
        width: 100%;
        height: 100px;
        border: 0px solid black;
        float: center;
        text-align: center;

    }
</style>

</head>
<body>

<table style="width: 100%">
  <tr>
    <td><img src="{{ asset('img/logo-elitecars.png') }}" alt="Image" height="60" width="180"></td>
    <td> <p style="width: 100%; font-size:28px; font-weight: bold;" align="center">Locadora EliteCars</p>
         <p style="font-size:16px;" align="center">Av da Cavalhada, 3358 - Cavalhada - Porto Alegre - RS.<br>
                                                  Contato: (51)9459-7783<br>
                                                  Email:  kel.kell@hotmail.com - CNPJ: 00.000.000/0000-00</p>
    </td>
</tr>

</table>
<div class="retangulo">
    <span class="texto">FICHA DE LOCAÇÃO</span>
</div>
<table>
</table>
<div class="retangulo">
<span class="texto">LOCATÁRIO</span>
</div>

<table class="tabelas" width="100%" id='ficha'>
<tr>
    <td colspan="2">
        <b class="tx">Nome:</b> {{$locacao->Cliente->nome}}</p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <b class="tx">Endereço:</b>  {{$locacao->Cliente->endereco}}
    </td>
<tr>
    <td>
        <b class="tx">Cidade:</b> {{$locacao->Cliente->Cidade->nome}}
    </td>
    <td>
        <b class="tx">UF:</b> {{$locacao->Cliente->Estado->nome}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Rg:</b> {{$locacao->Cliente->rg}}
    </td>
    <td>
        <b class="tx">Org Exp:</b> {{$locacao->Cliente->exp_rg}}
    </td>

</tr>
<tr>
    <td>
        <b class="tx">Telefones:</b>  {{$tel_1.' - '.$tel_2}}
    </td>
    <td>
        <b class="tx">CPF/CNPJ:</b> {{$cpfCnpj}}
    </td>
</tr>

</table>
</table>
<div class="retangulo">
<span class="texto">VEÍCULO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Marca:</b> {{$locacao->Veiculo->Marca->nome}}
    </td>
    <td>
        <b class="tx">Modelo:</b> {{$locacao->Veiculo->modelo}}
    </td>
    <td>
        <b class="tx">Chassi:</b> {{$locacao->Veiculo->chassi}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Ano:</b>  {{$locacao->Veiculo->ano}}
    </td>
    <td>
        <b class="tx">Cor:</b>  {{$locacao->Veiculo->cor}}
    </td>
    <td>
        <b class="tx">Placa:</b>  {{$locacao->Veiculo->placa}}
    </td>
</tr>
</table>
<div class="retangulo">
<span class="texto">LOCAÇÃO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Data da Saída:</b> {{\Carbon\Carbon::parse($locacao->data_saida)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora da Saída:</b> {{$locacao->hora_saida}}
    </td>

    <td>
        <b class="tx">Data do Retorno:</b> {{\Carbon\Carbon::parse($locacao->data_retorno)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora do Retorno:</b> {{$locacao->hora_retorno}}
    </td>
</tr>
    <td>
        <b class="tx">Km de Saída:</b>  {{$locacao->km_saida}}
    </td>
    <td>
        <b class="tx">Qtd de Diárias:</b> {{$locacao->qtd_diarias}}
    </td>
    <td colspan="2">
        <b class="tx">Valor da Diária R$:</b> {{$locacao->Veiculo->valor_diaria}}
    </td>

</tr>
<tr>
    <td >
        <b class="tx">Km de Retorno:</b> {{$locacao->km_retorno}}
    </td>
    <td >
        <b class="tx">Valor do Desconto R$:</b> {{$locacao->valor_desconto}}
    </td>
    <td colspan="2">
        <b class="tx">Valor Total R$:</b> {{$locacao->valor_total_desconto}}
    </td>

</tr>

</table>

<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Observações: </b> {{$locacao->obs}}
    </td>
</tr>
</table>

<!-- PÁGINA 2 -->

<style>
    .break {
        page-break-before: always;
         }
    .parag {
        text-align: justify;
        font-size: 11;
    }
</style>

<div class="break">

<table style="width: 100%">
    <tr>
        <td><img src="{{ asset('img/logo-elitecars.png') }}" alt="Image" height="60" width="180"></td>
      <td> <p style="width: 100%; font-size:20px; font-weight: bold" align="center">Contrato de Locação de Veículos</p>

      </td>
  </tr>
  </table>
</div>
<div>
<p class="parag">
        Registro: <b>{{$locacao->id}}
        <div id="ag-1727877460403" style="text-align: justify;">&nbsp;</div>
<p style="text-align: justify;"><audio class="audio-for-speech"></audio></p>
<div class="translate-tooltip-mtz translator-hidden" style="text-align: justify;">
<div class="header">
<div class="header-controls"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">Pelo presente instrumento particular de loca&ccedil;&atilde;o, de um lado, </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>ALBERTO ADOLFO HORNIG JUNIOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, brasileiro, CPF 028.288.140-92, documento de identidade n&deg; 1090847045, residente e domiciliado na Avenida da Cavalhada , n&ordm; 3358, Bairro Cavalhada, CEP 91.740-001, na cidade de Porto Alegre, RS, telefone sob n&deg; (51) 993954528, denominado </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, e de outro </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>{{$locacao->Cliente->nome}}</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, brasileiro, CPF {{$cpfCnpj}} documento de identidade n&deg; {{$locacao->Cliente->rg}} {{$locacao->Cliente->exp_rg}}, residente e domiciliado {{$locacao->Cliente->endereco}}, na cidade de {{$locacao->Cliente->Cidade->nome}}, {{$locacao->Cliente->Estado->nome}}, telefone sob n&deg; {{$tel_1.' - '.$tel_2}}, ora em diante denominado </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, tem entre si justos e contratados o seguinte:</span></span></span></div>
</div>
</div>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA PRIMEIRA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- O </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> declara ser o leg&iacute;timo propriet&aacute;rio do ve&iacute;culo {{$locacao->Veiculo->modelo}} - {{$locacao->Veiculo->Marca->nome}} , placa {{$locacao->Veiculo->placa}}, Chassi n&deg; {{$locacao->Veiculo->chassi}}, RENAVAM n&deg; {{$locacao->Veiculo->renavam}}, fabrica&ccedil;&atilde;o/modelo {{$locacao->Veiculo->ano}}, cor {{$locacao->Veiculo->cor}}, combust&iacute;vel &Aacute;lcool/Gasolina, em perfeito estado e que resolveu d&aacute;-lo em loca&ccedil;&atilde;o &agrave; </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>{{$locacao->Cliente->nome}}</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, no perído de  {{\Carbon\Carbon::parse($locacao->data_saida)->format('d/m/Y')}} a {{\Carbon\Carbon::parse($locacao->data_retorno)->format('d/m/Y')}}, renov&aacute;veis automaticamente por igual per&iacute;odo, caso n&atilde;o haja manifesta&ccedil;&atilde;o em contr&aacute;rio de uma das partes. </span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA SEGUNDA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- O valor semanal ser&aacute; de R$ 650,00 (SEICENTOS REAIS) </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>Por um PERIODO DE 03 MESES apos este periodo ser&aacute; reajusado o valor</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, com </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>KILOMETRAGEM DE 1800 POR SEMANA, </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">caso o </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">ultrapassar o limite citado anteriormente ser&aacute; cobrado </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>R$0,50 (CINQUENTA CENTAVOS) </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">por KM rodado, que ser&aacute; pago em moeda corrente ao </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, via transfer&ecirc;ncia banc&aacute;ria ou chave PIX, para que do mesmo, possa utilizar-se como entender. O valor cobrado semanalmente ser&aacute; utilizado para gastos fixos, como manuten&ccedil;&atilde;o do ve&iacute;culo sendo eles: motor, caixa de cambio, ar condicionado, troca de &oacute;leo e freios. Quaisquer outros gastos vari&aacute;veis, como combust&iacute;vel, multas, danos ocasionados ao veiculo como: tecidos de banco, avarias em latarias, lampadas do veiculo, vidros, retrovisores ou outro danoS que n&atilde;o seja citado anteriormente pelo locador ser&atilde;o de total responsabilidade do </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, para consertar tais danos. </span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>OBS&sup1;: A troca de pneus s&oacute; valer&atilde;o por desgaste ou defeito dos mesmos. Qualquer outro (s) dano (s), ser&aacute; por conta do LOCAT&Aacute;RIO. </strong></span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA TERCEIRA</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> - O </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, ir&aacute; disponibilizar um </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>DESCONTO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> de bom pagador, caso o </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> efetuar o pagamento semanal toda segunda feira, ficando o valor de R$ 600,00 (SEISCENTOS E CINQUENTA REAIS ) para pagamento na data combinada. O </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, ter&aacute; direito de cobrar multa no valor de R$50,00 no primeiro dia de atraso e tambem nos dias subsequentes, caso o LOCAT&Aacute;RIO n&atilde;o efetuar o pagamento via PIX na data combinada semanalmente.</span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA QUARTA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- Para firmar o presente contrato de loca&ccedil;&atilde;o, o </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> depositar&aacute; ao </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, no ato desta assinatura, o valor de R$ 1.200,00 (HUM MIL E DUZENTOS REAIS ), referente ao dep&oacute;sito cau&ccedil;&atilde;o, e o valor de R$ 600,00 (SEISCENTOS REAIS ) referente a uma semana adianta de aluguel, como seguran&ccedil;a de cumprimento nos termos desta loca&ccedil;&atilde;o pelo </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, o valor somente do CAU&Ccedil;&Atilde;O este que deve ser devolvido ao </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">no </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>PRAZO DE AT&Eacute; 10 DIAS UTEIS</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, sem corre&ccedil;&atilde;o, ap&oacute;s o t&eacute;rmino de loca&ccedil;&atilde;o, desde que, n&atilde;o haja nenhuma pend&ecirc;ncia,danos ou multas por parte do </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, ser&aacute; descontado no ato devolu&ccedil;&atilde;o do cau&ccedil;&atilde;o as seguintes despesas: </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>HIGIENIZA&Ccedil;&Atilde;O INTERNA E LAVAGEM DO VEICULO NO VALOR DE R$300,00 E TAMB&Eacute;M UMA TAXA CONTRATUAL DE R$150,00 SER&Atilde;O DESCONTADOS DO VALOR DO CAU&Ccedil;&Atilde;O.</strong></span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>OBS&sup1; :</strong></span></span></span> <span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>&Eacute; OBRIGAT&Oacute;RIO ASSINAR UMA NOTA PROMISS&Oacute;RIA DE 10% do VALOR DA FIPE DO VEICULO REFERENTE AO M&Ecirc;S DA ASSINATURA DO CONTRATO A MESMA PODER&Aacute; SER PROTESTADA EM CART&Oacute;RIO CASA HAJA DANOS E MULTAS MAIORES QUE O VALOR DE CAU&Ccedil;&Atilde;O PAGO PELO LOCAT&Aacute;RIO.</strong></span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>OBS&sup2;: O Valor recebido do cau&ccedil;&atilde;o ao ALUGUEL DO VEICULO poder&aacute; ser somente usado em forma de pagamento para DANOS AO VEICULO e MULTAS na entrega do veiculo ao LOCADOR sendo feito uma VISTORIA para identificar se h&aacute; danos ou falta de equipamentos que o ve&iacute;culo possuia no ato da LOCA&Ccedil;&Atilde;O.</strong></span></span></span></p>
<p style="text-align: justify;"><br /> </p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA QUINTA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- A partir da data deste contrato, o </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">fica respons&aacute;vel c&iacute;vil e criminalmente por qualquer acidente, ocorr&ecirc;ncia, multas e infra&ccedil;&otilde;es. O </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO, </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> e em hip&oacute;tese alguma, n&atilde;o esta autorizado a emprestar ou sublocar o ve&iacute;culo para terceiros. </span></span></span></p>
<p style="text-align: justify;"><br /> </p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA SEXTA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- Caso ocorra alguma multa no decorrer deste contrato o </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CONDUTOR, </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">dever&aacute; pagar a multa no prazo de no m&aacute;ximo 14 dias ap&oacute;s a comunica&ccedil;&atilde;o ao mesmo, n&atilde;o havendo pagamento dentro deste prazo estar&aacute; </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>sob pena de recis&atilde;o do contrato e perca do cau&ccedil;&atilde;o</strong></span></span></span></p>
<p style="text-align: justify;"><br /> </p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA S&Eacute;TIMA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- O n&atilde;o pagamento da semana em at&eacute; </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>2 dias &uacute;teis </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">ap&oacute;s o combinado presente neste contrato, </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>implica na devolu&ccedil;&atilde;o imediata do ve&iacute;culo, recis&atilde;o do mesmo e o LOC&Aacute;TARIO n&atilde;o ter&aacute; direito a devolu&ccedil;&atilde;o do cau&ccedil;&atilde;o por descumprimento do contrato.</strong></span></span></span></p>
<p style="text-align: justify;"><br /> </p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA OITAVA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- Em caso de eventual acidente com o ve&iacute;culo, sendo necess&aacute;rio acionar o seguro, a franquia ser&aacute; de responsabilidade do </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">. </span></span></span></p>
<p style="text-align: justify;"><br /> </p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA NONA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- Avarias de qualquer natureza, que nao necessita utiliza&ccedil;&atilde;o do seguro, ficar&aacute; por conta do </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCAT&Aacute;RIO com prazo M&Aacute;XIMO de 14 DIAS corridos para ser feitos os reparos sob pena de recis&atilde;o do contrato e perca do cau&ccedil;&atilde;o</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, sendo expressamente proibido a manuten&ccedil;&atilde;o ou qualquer altera&ccedil;&atilde;o do mesmo por contra pr&oacute;pria, sem o consentimento do </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">. </span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA D&Eacute;CIMA - </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">O </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CONDUTOR, </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">dever&aacute; comparecer toda </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>SEGUNDA FEIRA em hor&aacute;rio comecial 10:00h at&eacute; as 18:00h na Av cavalhada n3358, bairro Cavalhada, </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">para um vitoria de itens gerais do veiculo que pode ter dura&ccedil;&atilde;o de 30min a 1 hora no maximo, o n&atilde;o comparecimento do condutor sem aviso pr&eacute;vio, estar&aacute; sob pena de multa ou recis&atilde;o do contrato e perca do cau&ccedil;&atilde;o</span></span></span></p>
<p style="text-align: justify;"><br /> </p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA D&Eacute;CIMA PRIMEIRA - </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">O ve&iacute;culo citado na </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA PRIMEIRA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, deve ser exclusivamente usado apenas pelo locat&aacute;rio outro </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>RODRIGO GOMES DOS SANTOS, </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">caso houver algum outro </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CONDUTOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> conduzindo o veiculo sem notifica&ccedil;&atilde;o pr&eacute;via,o </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">poder&aacute; rescindir o referido </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CONTRATO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> imediatamente.</span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA D&Eacute;CIMA SEGUNDA - </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">Quaisquer poss&iacute;veis VIAGENS para fora do ESTADO do RIO GRANDE DO SUL dever&aacute; ser avisado com antecedencia ao </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">,o guincho est&aacute; coberto at&eacute; 500km, caso LOCATARIO estiver fora do limite coberto pelo seguro, dever&aacute; arcar com o restante do custo, para deixar na oficina credenciada pelo locador, caso haja descumprimento desta </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">o </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>LOCADOR </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">poder&aacute; rescindir o referido </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CONTRATO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"> imediatamente.</span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CL&Aacute;USULA D&Eacute;CIMA TERCEIRA </strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">- Para dirimir quaisquer controv&eacute;rsias oriundas do </span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR"><strong>CONTRATO</strong></span></span></span><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">, as partes elegem o foro da comarca de PORTO ALEGRE/RS. </span></span></span></p>
<p style="text-align: justify;"><span style="font-family: Calibri, serif;"><span style="font-size: small;"><span lang="pt-BR">E, por estarem, assim, justos e contratados, firmam o presente instrumento, em duas vias de igual teor. </span></span></span></p>
<p style="text-align: justify;"><br /> </p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>


</div><br><br>

        <div style="text-align: center; font-size: 12">Porto Alegre, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}<br><br><br><br>

            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><Br><br><br>

            ___________________________________________________________<br>
            LOCADOR: ELITECARS LOCADORA.



        </div>











</body>
</html>
