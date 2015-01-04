<?php
class HumanTxtController {
	
	public function indexAction()
	{
		$HumanTXT 	= "Abel Cabans\n";
		$HumanTXT  .= "Standard Man\n";
		$HumanTXT  .= "@abelcabans\n";
		$HumanTXT  .= "Barcelona\n";
		$HumanTXT  .= "Pixel Binario";
		return new PlainTextView($HumanTXT);
	}
}