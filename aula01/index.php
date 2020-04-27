<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 PHP</title>
</head>
<body>
    <?php
    // criando variavel no php basta utilizar *$* e o nome da variavel //
    $titulo= "primeira aula de PHP";
    ?>
    
    <h1><?php
    
    echo$titulo //usa-se echo para ezibir algo na tela//
    ?>
    
    </h1>
    <hr>

<!-- <h1>Condicionais</h1> -->

<p>IF  / ELSE</p>
<p>Crie uma condição que valide se a pessoa pode votar ou não</p>

<?php   

function podeVotar($idadeEleitor){
$idadeEleitor=17;
echo"você tem ", $idadeEleitor , " anos,";

if($idadeEleitor>=16 && $idadeEleitor < 18 || $idadeEleitor>70){
  return"seu voto é facultativo";

}else if ($idadeEleitor>=18 && $idadeEleitor<=70 ){
    return "Você deve votar! ";
}
else{
    return" Você ainda não pode votar ";
}

}

?>
R: Foi criado no código  a função podeVotar e foi informado como parametro o valor 17,
como retorno da função tivemos :<br>  <?php echo podeVotar(17);?> 
<hr>
<p>SWITCH CASE</p>


<?php
function validaGenero($x){
    switch ($x) {
        case "masculino":
            return "masculino";
                break;
        case 'feminino':
            return "feminino";
                break;
        default:
              return "outros";
              break;   
    }
}
?>
<select nome=""id="">
    <option value="1">Masculino</option>
    <option value="2">Feminino</option>
    <option value="3">cachorro</option>
    <option value="4">Feminino</option>
    <option value="5">Feminino</option>
    <option value="6">Feminino</option>
</select>

R: Foi criado no código a função validaGenero efoi informado como parametro a string feminino,
como retorno da função tivemos: <br> <?php echo validaGenero("feminino") ?>
<hr>

<h1>Arrays</h1>

<p>Arrays simples</p>

<?php 
        //declarando asrray vazio
        $animais=[];

        $animais=["Leão","Girafa","Cachorro","Gato","borboleta",22.5];

        //Uma forma de  destrichar uma array a seguir
        echo"<pre>";
            var_dump($animais);
        echo "<pre>";

?>
<p>Array associativo</p>
    
    <?php
    // O array associativo nos da a possibilidade de atribuir valores as nossas posições.
    $usuario=[
        "nome" =>"cleiton",
        "email"=>"cleiton99788869@hotmail.com",
        "senha"=>"123456"
    ];

        echo"<pre>";
            var_dump($usuario);
        echo "<pre>";
       
       //montando frase pegando uma posição do array sem percorrer ele todo
        echo "a senha do Usuario é ", $usuario["senha"];
    
?>
<hr>

<p>Array de Array</p>

<p>Ocorre quando temos um array que dentro dele contem outros elementos,onde,cada elemento
    possui como valor um novo array relacionado a ele</p>

  

<?php
     $listaDeUsuarios=[
        "usuario1"=>[
            "nome" =>"cleiton",
            "email"=>"cleiton99788869@hotmail.com",
            "senha"=>"123456"
        ],
        "usuario2"=>[
            "nome" =>"carol",
            "email"=>"carol99788869@hotmail.com",
            "senha"=>"789101"
        ]
       
        ];
        echo "Nome do usuario1 é " , $listaDeUsuarios["usuario2"]["nome"] 
   


?>
</body>
</html>