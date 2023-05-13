<?php

$baseChar =  array("!"=>108,'"'=>109,"#"=>110,"$"=>111,"%"=>112,"'"=>114,"("=>115,")"=>116,"*"=>117,"+"=>118,","=>119,"-"=>120,"."=>121,"/"=>122,"0"=>123,"1"=>124,"2"=>125,"3"=>126,"4"=>127,"5"=>128,"6"=>129,"7"=>130,"8"=>131,"9"=>132,":"=>133,";"=>134,"<"=>135,"="=>136,">"=>137,"?"=>138,"@"=>139,"A"=>140,"B"=>141,"C"=>142,"D"=>143,"E"=>144,"F"=>145,"G"=>146,"H"=>147,"I"=>148,"J"=>149,"K"=>150,"L"=>151,"M"=>152,"N"=>153,"O"=>154,"P"=>155,"Q"=>156,"R"=>157,"S"=>158,"T"=>159,"U"=>160,"V"=>161,"W"=>162,"X"=>163,"Y"=>164,"Z"=>165,"["=>166,"barra"=>167,"]"=>168,"^"=>169,"-"=>170,"'"=>171,"a"=>172,"b"=>173,"c"=>174,"d"=>175,"e"=>176,"f"=>177,"g"=>178,"h"=>179,"i"=>180,"j"=>181,"k"=>182,"l"=>183,"m"=>184,"n"=>185,"o"=>186,"p"=>187,"q"=>188,"r"=>189,"s"=>190,"t"=>191,"u"=>192,"v"=>193,"w"=>194,"x"=>195,"y"=>196,"z"=>197,"{"=>198,"|"=>199,"}"=>200,"~"=>201,"Del"=>202,"Ç"=>203,"ü"=>204,"é"=>205,"ã"=>206,"ä"=>207,"à"=>208,"å"=>209,"ç"=>210,"ê"=>211,"ë"=>212,"è"=>213,"ï"=>214,"î"=>215,"ì"=>216,"Ä"=>217,"Å"=>218,"É"=>219,"æ"=>220,"Æ"=>221,"ô"=>222,"ö"=>223,"ò"=>224,"û"=>225,"ù"=>226,"ÿ"=>227,"Ö"=>228,"Ü"=>229,"ø"=>230,"£"=>231,"Ø"=>232,"×"=>233,"ƒ"=>234,"á"=>235,"ù"=>236,"ó"=>237,"ú"=>238,"ñ"=>239,"Ñ"=>240,"ª"=>241,"º"=>242,"¿"=>243,"®"=>244,"¬"=>245,"½"=>246,"¼"=>247,"¡"=>248,"«"=>249,"»"=>250,"░"=>251,"▒"=>252,"▓"=>152,"│"=>254,"┤"=>256,"Á"=>257,"Â"=>258,"À"=>259,"©"=>260,"╣"=>261,"║"=>262,"╗"=>263,"╝"=>264,"¢"=>265,"¥"=>266,"┐"=>267,"└"=>267,"┴"=>268,"┬"=>269,"├"=>270,"─"=>271,"┼"=>272,"ã"=>273,"Ã"=>274,"╚"=>275,"╔"=>276,"╩"=>277,"╦","╠"=>278,"═"=>279,"╬"=>280,"¤"=>281,"ð"=>282,"Ð"=>283,"Ê"=>284,"Ë"=>285,"È"=>286,"ı"=>287,"Í"=>288,"Î"=>289,"Ï"=>290,"┘"=>291,"┌"=>292,"█"=>293,"▄"=>294,"Ó"=>295,"ß"=>296,"Ô"=>299,"Ò"=>300,"õ"=>301,"Õ"=>302,"µ"=>303,"þ"=>304,"Þ"=>305,"Ú"=>306,"Û"=>307,"Ù"=>308,"ý"=>309,"Ý"=>310,"¯"=>311,"´"=>312,"±"=>313,"‗"=>314,"¾"=>315,"¶"=>316,"§"=>317,"÷"=>318,"¸"=>319,"°"=>320,"¨"=>321,"·"=>322,"¹"=>324,"³"=>325,"²"=>326,"■"=>327);

$keys = array(10,17,32);
$password = "abc@123";
class Emcrypt{
	private $baseChar;
	private $keys;
	private $password;
	public function __construct($baseChar,$keys,$password){
		$this->baseChar = $baseChar;
		$this->keys = $keys;
		$this->password = $password;
	}
	public function encript(){
	    //trasforma senha em array
	    $criptografia = "";
		$array_password = str_split($this->password);
		foreach ($array_password as $char) {
			foreach ($this->baseChar as $key => $codeChar) {
				//verifica a string senha com  string base caractere
				if($key == $char){
					foreach ($this->keys as $chave) {
						$criptoChar = $chave * $codeChar;
						$criptografia = $criptografia.$criptoChar;
					}
				}
			}

		}
		return $criptografia;
	}
}

$CryptoPass =  new Emcrypt($baseChar,$keys,$password);
echo $CryptoPass->encript();

?>
