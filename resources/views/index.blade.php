@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="clearBoth"></div>

<!-- abre SLIDESHOW -->
<div class="divBannerSlide" id="divBannerSlide">

	<div class="setaEsq"><span id="slider-prev"></span></div>
	<div class="setaDir"><span id="slider-next"></span></div>

	<div class="bxSliderWrap">
		<div class="divBxSlider">
			<ul class="ulBxSlider">
			
					<li class="liBxSlider" style="background-image:url('{{asset('vendor/myzzy/images/loteca_11-01-2018_max.png')}}');"><div class="divBxSliderSub"><p class="txtBanner1"></p><p class="txtBanner2"></p><br></div></li>
					
					<li class="liBxSlider" style="background-image:url('{{asset('vendor/myzzy/images/mega-da-virada_17-10-2018_max.png')}}');"><div class="divBxSliderSub"><p class="txtBanner1"></p><p class="txtBanner2"></p><br></div></li>
								</ul>
		</div>
	</div>

</div>


<div class="divContent height50"></div>

<!-- DIV3COL - ITENS -->
<div class="divContent">

<form name="form0" id="form0" method="post" action="index.php" ><div class="divInfoOver itemMargin1"><div class="divInfoOverSub" style="background-color:#260085;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#260085;">Quina</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><span class="colorGray">Encerrado</span></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">5078</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>QUINA BONOCO COTA INTEIRA</b><br><b>30</b> jogos de <b>6</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>00 cotas disponíveis </b><br> de 12 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 30,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">14.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>21/09/2019 - sábado</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol0"></div><form name="form1" id="form1" method="post" action="index.php" ><div class="divInfoOver itemMargin2"><div class="divInfoOverSub" style="background-color:#ffff00;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#ffff00;">Dia de Sorte</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><span class="colorGray">Encerrado</span></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">0204</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>DIA SORTE FAMILY 1cota\10</b><br><b>100</b> jogos de <b>8</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>00 cotas disponíveis </b><br> de 10 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 75,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">3.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>21/09/2019 - sábado</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol1"></div><form name="form2" id="form2" method="post" action="index.php" ><div class="divInfoOver itemMargin3"><div class="divInfoOverSub" style="background-color:#930089;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#930089;">Lotofácil</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><span class="colorGray">Encerrado</span></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">1867</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>LOTOFACIL SSA 1cota\5</b><br><b>15</b> jogos de <b>16</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>00 cotas disponíveis </b><br> de 05 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 15,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">2.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>20/09/2019 - sexta</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol2"></div><form name="form0" id="form0" method="post" action="index.php" ><div class="divInfoOver itemMargin4"><div class="divInfoOverSub" style="background-color:#930089;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#930089;">Lotofácil</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><span class="colorGray">Encerrado</span></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">1867</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>LOTOFACIL INTUIÇÃO FIXA 1cota\4</b><br><b>60</b> jogos de <b>15</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>00 cotas disponíveis </b><br> de 05 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 15,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">2.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>20/09/2019 - sexta</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol0"></div><div class="clearCol1"></div><form name="form1" id="form1" method="post" action="index.php" ><div class="divInfoOver itemMargin5"><div class="divInfoOverSub" style="background-color:#930089;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#930089;">Lotofácil</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><span class="colorGray">Encerrado</span></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">1867</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>LOTOFACIL 18 SUPER PRIME 1cota\10</b><br><b>2</b> jogos de <b>18</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>00 cotas disponíveis </b><br> de 10 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 30,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">2.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>20/09/2019 - sexta</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<form name="form2" id="form2" method="post" action="index.php" ><div class="divInfoOver itemMargin6"><div class="divInfoOverSub" style="background-color:#FB1F00;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#FB1F00;">Loteca</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><span class="colorGray">Encerrado</span></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">869</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>LOTECA BRASILEIRÃO 3 TRIPLOS E 4 DUPLOS</b><br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>00 cotas disponíveis </b><br> de 10 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 60,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">800.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>21/09/2019 - sábado</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol1"></div><div class="clearCol2"></div><form name="form0" id="form0" method="post" action="index.php" ><div class="divInfoOver itemMargin1"><div class="divInfoOverSub" style="background-color:#930089;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#930089;">Lotofácil</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><span class="colorGray">Encerrado</span></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">1867</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>LOTOFACIL 11 FECHAMENTO 19 DEZENAS</b><br><b>1.210</b> jogos de <b>15</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>00 cotas disponíveis </b><br> de 30 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 120,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">2.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>20/09/2019 - sexta</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol0"></div><form name="form1" id="form1" method="post" action="index.php" ><div class="divInfoOver itemMargin2"><div class="divInfoOverSub" style="background-color:#FFD700;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#FFD700;">MEGA DA VIRADA ESPECIAL</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><a class="aParticipar" href="entrar" title="Comprar">Comprar</a></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">31 DEZEMBRO</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>MEGA VIRADA PRIME</b><br><b>3000</b> jogos de <b>6</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>94 cotas disponíveis </b><br> de 100 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 150,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">250.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>31/12/2019 - terça</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol1"></div><form name="form2" id="form2" method="post" action="index.php" ><div class="divInfoOver itemMargin3"><div class="divInfoOverSub" style="background-color:#FFD700;"><p class="pTituloBolao pBgImage colorWhite textShadow" style="background-color:#FFD700;">MEGA DA VIRADA ESPECIAL</p><div class="divInfoOverContent bgColor1 divInfoOverRadius"><p class="pTituloBolao"><a class="aParticipar" href="entrar" title="Comprar">Comprar</a></p><div class="divInfoOverContent divInfoOverPadding bgColor2 divInfoOverConcurso">Concurso <span class="spnInfoOverConcurso">31 DEZEMBRO</span></div><div class="divInfoOverContent divInfoOverPadding">Bolão <b>MEGA VIRADA NAÇÕES UNIDAS</b><br><b>50</b> jogos de <b>15</b> dezenas<br></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>23 cotas disponíveis </b><br> de 50 cotas (total)</div><div class="divInfoOverContent divInfoOverPadding"><b>Valor da Cota: 0,00</b></div><div class="divInfoOverContent divInfoOverPadding bgColor2"><b>Prêmio: <span class="spnInfoOverConcurso">250.000.000,00</span></b></div><div class="divInfoOverContent divInfoOverPadding divInfoOverRadius"><b>31/12/2019 - terça</b></div></div></div><img src="{{asset('vendor/myzzy/images/bg-footer-loterias.png')}}" class="divInfoOverImg"/>
</div></form>

<div class="clearCol2"></div>	
</div>﻿	</div>
	<!-- FECHA DIVWRAPPER -->

 </div>
</div>
@endsection
