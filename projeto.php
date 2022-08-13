<?php
   

   $title="MAPA - BackEnd 1.";

   $tituloTutorial1 = "Poke de Camarão<h3>R$ 39,90<h3>";
   $textoTutorial1 = "Poke de Camarão com Cream Cheese<br>
Arroz japonês, camarão, pasta de camarão<br> com kani, sunomono, repolho marinado,<br> harumaki frita, gergelim, farofa de tempura,<br> nori e molho clássico.";
   $imgTutorial1 = "poque.jpg";

   $tituloTutorial2 = "Prato da casa<h3>R$ 12,99<h3>";
   $textoTutorial2 = "Feijão preto ou feijão mulatinho com arroz<br>
coxa ou sobrecoxa de frango ou carne assada, batata frita, <br>farofa e saladas de alface e tomate.";
   $imgTutorial2 = "refeicao.jpg";

   $tituloTutorial3 = "Gratinado";
   $textoTutorial3 = "<h3>R$ 16,99<h3>";
   $imgTutorial3 = "gratinado.jpg";

   $tituloTutorial4 = "Feijoada da casa";
   $textoTutorial4 = "<h3>R$ 18,99<h3>";
   $imgTutorial4 = "feijoada.jpeg";



?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>

<h1><p style="color: green;">REFEIÇÕES DA VÓ RITA</h1></p>

<h2><p style="color:red;">VENHA DEGUSTAR DAS MARAVILHOSAS RECEITAS DA VÓ RITA!</p></h2>

<h2><p style="color:cadetblue;">Ela está te esperando!!</p></h2>

	<meta charset="utf-8">
	<title><?=title?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Tutoriais</a></li>
				<li><a href="#">Artigos</a></li>
				<li><a href="#">Suporte</a></li>
			</ul>
		</nav>
	</header>                                       
	<main>
		<div class="main_cta">
			<article class="main_cta_content">
				<div class="main_cta_content_spacer">
				<header>
				<h1><a href="#" class="btn"><p style="color:darkblue;">Aqui você encontra o melhor das receitas saborosas da vó Rita.</h1></p>	
				<p><a href="#" class="btn">Confira os artigos e tutoriais</p>
				<p><a href="#" class="btn">Saiba mais</p>
        </div>
				</article>
			
		</div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1><p style="color:blueviolet;">Nossos últimos tutoriais</h1></p>
				<p>Desfrute dos tutoriais, eles vão lhe auxiliar.</p>
			</header>


			<article>
				<a href="#"><img src=<?=$imgTutorial1;?> width= "300px">
				<h2><?=$tituloTutorial1;?></h2>
				<p><?=substr($textoTutorial1, 0, 200);?></p>
				
         </article>

			<article>
				<img src=<?=$imgTutorial1;?> width= "300px">
				<h2><?=$tituloTutorial1;?></h2>
				<p><?=substr($textoTutorial1, 0, 200);?></p>
				
         </article>		
				
				<article>
				<a href="#"><img src=<?=$imgTutorial2;?> width= "300px">
				<h2><?=$tituloTutorial2;?></h2>
				<p><?=substr($textoTutorial2, 0, 200);?></p>
				


			</article>	

			     <article>
				<img src=<?=$imgTutorial2;?> width= "300px">
				<h2><?=$tituloTutorial2;?></h2>
				<p><?=substr($textoTutorial2, 0, 200);?></p>
				
         </article>

         <article>
				<a href="#"><img src=<?=$imgTutorial3;?> width= "300px">
				<h2><?=$tituloTutorial3;?></h2>
				<p><?=substr($textoTutorial3, 0, 200);?></p>
				
         </article>

          <article>
				<img src=<?=$imgTutorial3;?> width= "300px">
				<h2><?=$tituloTutorial3;?></h2>
				<p><?=substr($textoTutorial3, 0, 200);?></p>
				
         </article>

         <article>
				<a href="#"><img src=<?=$imgTutorial4;?> width= "300px">
				<h2><?=$tituloTutorial4;?></h2>
				<p><?=substr($textoTutorial4, 0, 200);?></p>
				
         </article>

          <article>
				<img src=<?=$imgTutorial4;?> width= "300px">
				<h2><?=$tituloTutorial4;?></h2>
				<p><?=substr($textoTutorial4, 0, 200);?></p>
				
         </article>	




			</header>
			

		</section>
		

	</main>

	<footer><br>

		<h3><p style="color: coral;">Entrega a Domicílio - Telefone de  Contato: (21) 26952840 / 28952800 / Whatsapp: (21) 998234367.</p><br></h3>

		<h4><p style="color:blueviolet;">ALUNO: JORGE IRAPUAM DE ALMEIDA LINHARES - 18512345<br></p></h4>

	</footer>

</body>
</html>                 