<?php
ini_set("allow_url_fopen", 1);
#671053616317264_1834737833282164 = Nelson;
#671053616317264_1834733629949251 = Sthefany Morais;
#671053616317264_1834732203282727 = Sophia Fernandes;
#671053616317264_1834730239949590 = Roberta Truta;
#671053616317264_1834728936616387 = Matheus Oliveira;
#671053616317264_1834724926616788 = Nicole Pires;
#671053616317264_1834719793283968 = Marina e Manoela;
#671053616317264_1834717896617491 = Luciano Bentrup;
#671053616317264_1834710719951542 = Mariana Quirino;
#671053616317264_1834707716618509 = Marcela Lins;
#671053616317264_1834706549951959 = Lucas Anastácio;
#671053616317264_1834704733285474 = Karen Cristine;
#671053616317264_1834703303285617 = Julia Teixeira;
#671053616317264_1834701419952472 = Lincoln Assis;
#671053616317264_1834699306619350 = Ingrid de Souza;
#671053616317264_1834697286619552 = Evelyn Lisboa;


$ids = array("671053616317264_1834737833282164", "671053616317264_1834733629949251", "671053616317264_1834732203282727", "671053616317264_1834730239949590", "671053616317264_1834728936616387", "671053616317264_1834724926616788", "671053616317264_1834719793283968", "671053616317264_1834717896617491", "671053616317264_1834710719951542", "671053616317264_1834707716618509", "671053616317264_1834706549951959", "671053616317264_1834704733285474", "671053616317264_1834703303285617", "671053616317264_1834701419952472", "671053616317264_1834699306619350", "671053616317264_1834697286619552"); 
$names = array("Nelson", "Sthefany Morais", "Sophia Fernandes", "Roberta Truta", "Matheus Oliveira", "Nicole Pires", "Marina e Manoela", "Luciano Bentrup", "Mariana Quirino", "Marcela Lins", "Lucas Anastácio", "Karen Cristine", "Julia Teixeira", "Lincoln Assis", "Ingrid de Souza", "Evelyn Lisboa");
foreach (array_combine($ids, $names) as $id => $name) {
$url="https://graph.facebook.com/v3.1/".$id."?fields=created_time%2Cstory%2Cmessage%2Cshares%2Creactions.type(LIKE).limit(0).summary(1).as(like)%2Creactions.type(LOVE).limit(0).summary(1).as(love)%2Creactions.type(HAHA).limit(0).summary(1).as(haha)%2Creactions.type(WOW).limit(0).summary(1).as(wow)%2Creactions.type(SAD).limit(0).summary(1).as(sad)%2Creactions.type(ANGRY).limit(0).summary(1).as(angry)&limit=10&access_token=TOKENDEACESSO";
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
echo "*Nome do Candidato:* ".$name." | *Total de Reações:* ".$total." (".$total2.")"."<br>";
echo "--------------------------------------------------------------- <br>";
}
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataLocal = date('d/m/Y H:i:s', time());
	echo "<br>";
	echo "*Carimbo de data/hora:* ".$dataLocal."<br>";
	echo "*Assinatura Eletrônica:* Inter BRUSA.";
?>
