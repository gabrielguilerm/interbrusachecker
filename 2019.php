<?php
ini_set("allow_url_fopen", 1);

#Misters

#671053616317264_2485960734826534 = Victor Gabriel;
#671053616317264_2485954938160447 = Lucas Paulino;
#671053616317264_2485953201493954 = Lucas Santos;
#671053616317264_2485952634827344 = Víctor Augusto;
#671053616317264_2485950714827536 = Gabriel Polinati;
#671053616317264_2485933658162575 = Gabriel Oliveira;

#Misses

#671053616317264_2485943184828289 = Victoria Silvério;
#671053616317264_2485942194828388 = Vitória e Larissa;
#671053616317264_2485937004828907 = Julia Teixeira;
#671053616317264_2485933254829282 = Ana Clara;
#671053616317264_2485928971496377 = Izabel;
#671053616317264_2485927814829826 = Samirah;
#671053616317264_2485925111496763 = Marina e Manu;
#671053616317264_2485921648163776 = Kaynã;
#671053616317264_2485921031497171 = Julia Gomes;
#671053616317264_2485918771497397 = Lorrayne;
#671053616317264_2485910758164865 = Larissa;


#Processar MISTERS
$ids_m = array(
"671053616317264_2485960734826534", 
"671053616317264_2485954938160447", 
"671053616317264_2485953201493954", 
"671053616317264_2485952634827344", 
"671053616317264_2485950714827536", 
"671053616317264_2485933658162575"); 
$nomes_m = array(
"Victor Gabriel",
"Lucas Paulino",
"Lucas Santos",
"Victor Augusto",
"Gabriel Polinati",
"Gabriel Oliveira",
);
$mister="0";
foreach (array_combine($ids_m, $nomes_m) as $id_m => $nome_m) {
$url="https://graph.facebook.com/v3.1/".$id_m."?fields=created_time%2Cstory%2Cmessage%2Cshares%2Creactions.type(LIKE).limit(0).summary(1).as(like)%2Creactions.type(LOVE).limit(0).summary(1).as(love)%2Creactions.type(HAHA).limit(0).summary(1).as(haha)%2Creactions.type(WOW).limit(0).summary(1).as(wow)%2Creactions.type(SAD).limit(0).summary(1).as(sad)%2Creactions.type(ANGRY).limit(0).summary(1).as(angry)&limit=10&access_token=TOKENDEACESSO";
$json = file_get_contents($url);
$obj = json_decode($json);
#like,love,haha,wow,sad,angry
$likes=$obj->like->summary->total_count;
$loves=$obj->love->summary->total_count;
$hahas=$obj->haha->summary->total_count;
$wows=$obj->wow->summary->total_count;
$sads=$obj->sad->summary->total_count;
$angrys=$obj->angry->summary->total_count;
$total=$likes + $loves + $hahas + $wows + $angrys + $sads;
$total2=" *Likes:* ".$likes." | *Amei:* ".$loves." | *Hahas:* ".$hahas." | *Uaus:* ".$wows." | *Grrs:* ".$angrys." | *Tristes:* ".$sads;
echo "*Nome do Mister:* ".$nome_m." | *Total de Reações:* ".$total." (".$total2.")"."<br>";
echo "--------------------------------------------------------------- <br>";


if ($total > $mister) {
$mister=$total;
$misternome=$nome_m;
}

}

#PROCESSAR MISSES

$ids_f = array(
"671053616317264_2485943184828289",
"671053616317264_2485942194828388",
"671053616317264_2485937004828907",
"671053616317264_2485933254829282",
"671053616317264_2485928971496377",
"671053616317264_2485927814829826",
"671053616317264_2485925111496763",
"671053616317264_2485921648163776",
"671053616317264_2485921031497171",
"671053616317264_2485918771497397",
"671053616317264_2485910758164865"); 
$nomes_f = array(
"Victoria Silvério",
"Vitória e Larissa",
"Julia Teixeira",
"Ana Clara",
"Izabel",
"Samirah",
"Marina e Manu",
"Kaynã",
"Julia Gomes",
"Lorrayne",
"Larissa"
);
$miss="0";
foreach (array_combine($ids_f, $nomes_f) as $id_f => $nome_f) {
$url="https://graph.facebook.com/v3.1/".$id_f."?fields=created_time%2Cstory%2Cmessage%2Cshares%2Creactions.type(LIKE).limit(0).summary(1).as(like)%2Creactions.type(LOVE).limit(0).summary(1).as(love)%2Creactions.type(HAHA).limit(0).summary(1).as(haha)%2Creactions.type(WOW).limit(0).summary(1).as(wow)%2Creactions.type(SAD).limit(0).summary(1).as(sad)%2Creactions.type(ANGRY).limit(0).summary(1).as(angry)&limit=10&access_token=TOKENDEACESSO";
$json = file_get_contents($url);
$obj = json_decode($json);
#like,love,haha,wow,sad,angry
$likes=$obj->like->summary->total_count;
$loves=$obj->love->summary->total_count;
$hahas=$obj->haha->summary->total_count;
$wows=$obj->wow->summary->total_count;
$sads=$obj->sad->summary->total_count;
$angrys=$obj->angry->summary->total_count;
$total=$likes + $loves + $hahas + $wows + $angrys + $sads;
$total2=" *Likes:* ".$likes." | *Amei:* ".$loves." | *Hahas:* ".$hahas." | *Uaus:* ".$wows." | *Grrs:* ".$angrys." | *Tristes:* ".$sads;
echo "*Nome da Miss:* ".$nome_f." | *Total de Reações:* ".$total." (".$total2.")"."<br>";
echo "--------------------------------------------------------------- <br>";


if ($total > $miss) {
$miss=$total;
$missnome=$nome_f;
}

}



echo "*Ganhador Mister:* ".$misternome."<br>";
echo "*Ganhadora Miss:* ".$missnome;
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataLocal = date('d/m/Y H:i:s', time());
	echo "<br>";
	echo "*Carimbo de data/hora:* ".$dataLocal."<br>";
	echo "*Assinatura Eletrônica:* Inter BRUSA.<br>";
	echo "*Programa assinado por:* Gabriel Guilherme da Silva Leal<br>";
	echo "*A confiabilidade desse programa pode ser checada em:* https://github.com/gabrielguilerm/interbrusachecker/"; 
?>
