<?php
	include_once("noticia.php");
	$objetonoticia = new noticia();
	//fazer o formulário
	if(filter_input(INPUT_POST, "titulo")&&	
	filter_input(INPUT_POST, "descricao")&&	
	filter_input(INPUT_POST, "autor")&&	
	filter_input(INPUT_POST, "dataPublicacao")&&	
	filter_input(INPUT_POST, "curso")
)  {	

	$titulo = filter_input(INPUT_POST, "titulo");
	$descricao = filter_input(INPUT_POST, "descricao");
	$autor = filter_input(INPUT_POST, "autor");
	$dataPublicacao = filter_input(INPUT_POST, "dataPublicacao");
	$curso = filter_input(INPUT_POST, "curso");
	
	$dados=array($titulo, $descricao, $autor, $dataPublicacao, $curso);
	$objetonoticia->cadastrar($dados);
 }else {
	echo "Os campos não foram preenchidos!!!";
}

?>