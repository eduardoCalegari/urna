<?php 
    $campo=isset($_GET['campo']);
    $branco=isset($_GET['branco']);
    $confirma=isset($_GET['confirmar']);
    
if($campo && isset($_GET['digito'])){
	$voto = $_GET['campo'];
	$num = $_GET['digito'];
	$voto .= $num;
}else{
	$voto = null;
}

if($confirma == 'confirmar'){
   $arquivo = "votos_validos.txt";    
   $conteudo = "$_GET[campo],";
   $abrir = fopen("$arquivo", "a+");
   $gravar = fwrite($abrir, $conteudo);
   fseek($abrir,0);
   $ler = fread($abrir, filesize($arquivo));
   fclose($abrir);
   header('location:http://localhost/urna/');
   
   
}else if($branco == 'branco'){
   $arquivo = "votos_brancos.txt"; 
   $conteudo = "branco,"; 
   $abrir = fopen("$arquivo", "a+");
   $gravar = fwrite($abrir, $conteudo);
   fseek($abrir, 0);
   $ler = fread($abrir, filesize($arquivo));
   fclose($abrir);
   header('location:http://localhost/urna/');
  }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Urna Eletrônica</title>
</head>
<body style="background: #CFCFCF;">
<center>
    <h1 style="font-family: elephant; font-size: 50px;background: #228B22;border-radius: 20px;border-color: black;width:540px;text-align: center;  ">Urna Eletrônica</h1><br>
	<form action="" method="get">
            <div style="background: #E8E8E8;margin:30px auto 0px auto;width:640px;border-radius: 25px;float: left;"><br>
                <center>
                <input type="text" name="campo" id="campo" style="text-align: center; font-family: arial black; font-size: 30px; background: black; color: white; border-radius: 20px; " value="<?php echo $voto; ?>" placeholder="--Número do Candidato--" /><br><br>		
                <input style="color: white; background: black; font-size: 30px;text-align: center;" type="submit"  name="digito" value="1" /> 
		<input style="color: white; background: black; font-size: 30px;" type="submit"  name="digito" value="2" />
                <input style="color: white; background: black; font-size: 30px;" type="submit"  name="digito" value="3" /><br>
		<input style="color: white; background: black; font-size: 30px;" type="submit" name="digito"  value="4" />
		<input style="color: white; background: black; font-size: 30px;" type="submit" name="digito"  value="5" />
                <input style="color: white; background: black; font-size: 30px;" type="submit" name="digito"  value="6" /><br>
		<input style="color: white; background: black; font-size: 30px;" type="submit" name="digito"  value="7" />
		<input style="color: white; background: black; font-size: 30px;" type="submit" name="digito"  value="8" />
                <input style="color: white; background: black; font-size: 30px;" type="submit" name="digito"  value="9" /><br>
                <input style="color: white; background: black; font-size: 30px;text-align: center;" type="submit" name="digito"  value="0" /><br><br>
		<input style="color: black; background: orange; font-size: 35px; border-radius: 10px;" type="submit" name="cancelar"  value="Corrigir" />
		<input style="color: black; background: white; font-size: 35px; border-radius: 10px;" type="submit" name="branco"  value="Branco" />
                <input style="color: black; background: green; font-size: 35px; border-radius: 10px;" type="submit" name="confirmar" value="Confirmar" /><br><br><br>
                </center>
                </div>
        </form>
	<div>
            </center>
                <table style="border-radius: 20px;margin: 30px auto 0px auto;" border="7">
                    <center>
                    <tr>
                        <th style="text-align: center; background: black; color: white; border-radius: 10px;font-size: 28px;"><h2>Lista de Candidatos:</h2></th>
                    </tr>
                    <tr>
                        <td style="text-align: center; border-radius: 10px;color: white;background: red;font-family: Monotype Corsiva;font-size: 22px"><p>Dilma Rousseff: <b>13</b></td>              
                    </tr>
                    <tr>
                        <td style="text-align: center;border-radius: 10px;white;background: red;color: white;font-family: Monotype Corsiva;font-size: 22px;"><p>Aécio Neves: <b>45</b></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;border-radius: 10px;background: red;color: white;font-family: Monotype Corsiva;font-size: 22px"><p>Romero Brito: <b>24</b></td>
                    </tr>
                    </center>
                </table><br><br><br><br><br><br>
            <div style="background: #228B22;border-radius: 10px;position: absolute;width:1334px;float: left;text-align: center;">
                <p style="color: #8B0000;font-size: 15px;font-family: Stencil;  ">Todos os Direitos reservados à Eduardo Calegari</p>
                <p style="color: #8B0000;font-family: Stencil;font-size: 15px;">&copy;Calegari Corporation</p>
	</div>
	

</body>
</html>