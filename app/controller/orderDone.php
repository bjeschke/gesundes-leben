<?php

class OrderDone extends App {  
	
	function __construct()
	{		
		$this->productModel = new Products();
		
		$this->user = [];
		$this->user["title"] = (isset($_POST) && isset($_POST["title"])) ? ucfirst($_POST["title"]) : "";
		$this->user["firstname"] = (isset($_POST["firstname"])) ? $_POST["firstname"] : "";
		$this->user["lastname"] = (isset($_POST["lastname"])) ? $_POST["lastname"] : "";
		$this->user["street"] = (isset($_POST["street"])) ? $_POST["street"] : "";
		$this->user["streetNumber"] = (isset($_POST["number"])) ? $_POST["number"] : "";
		$this->user["plz"] = (isset($_POST["plz"])) ? $_POST["plz"] : "";
		$this->user["town"] = (isset($_POST["town"])) ? $_POST["town"] : "";
		$this->user["country"] = (isset($_POST["country"])) ? $this->getCountryName($_POST["country"]) : "";
		$this->user["email"] = (isset($_POST["email"])) ? $_POST["email"] : "";
		$this->user["birthday"] = (isset($_POST["birthday"])) ? $_POST["birthday"] : "";
		
		$this->orderString = (isset($_POST["orderstring"])) ? $_POST["orderstring"] : "";
			
		if($this->orderString != "")
			$this->orderArray = json_decode($this->orderString);
		
		$this->amountArray = array();
		$this->products = ($this->orderString != "") ? $this->getProductData($this->orderArray) : [];

		$this->finalPrice = 0;
		
		$this->order = [];
		$this->order["shippingCost"] = 4.95;	
		$this->order["tax"] = 0.07;
		
		$this->mail = [];
		$this->mail["to"] = "be.je@gmx.de";
		$this->mail["senderName"] = "Benjamin Jeschke";
		$this->mail["senderEmail"] = "be.je@gmx.de";
		$this->mail["subject"] = "neue Bestellung";
		$this->mail["message"] = $this->getEmailMessage();
		
		$this->confirmMail = [];
		$this->confirmMail["to"] = $this->user["email"];
		$this->confirmMail["senderName"] = "Gesundes-Leben.net";
		$this->confirmMail["senderEmail"] = "kontakt@gesundes-leben.net";
		
		$Mailbetreff = "Bestellbestätigung";
		$this->confirmMail["subject"] = "=?utf-8?b?".base64_encode($Mailbetreff)."?=";
		
		$this->confirmMail["message"] = $this->getConfirmEmailMsg();
	}  
	
	private function getProductData($orderArray){
		$index = 0;
		
		foreach ($this->orderArray as $key => $object) {
			$returnArray[$index] = $object->id;
			$this->amountArray["_".$object->id] = $object->amount;
			$index++;
		}

		return $this->productModel->getProductDataByIDs($returnArray);
	} 
	
	public function getConfirmEmailMsg(){
		if($this->user['title'] == "Herr")
			$anrede = "Sehr geehrter Herr";
		else
			$anrede = "Sehr geehrte Frau";
			
		$returnString = "<html><body>
			{$anrede} {$this->user['lastname']}, <br /><br />
			Vielen Dank für Ihre Bestellung bei<br /> 
			<strong>Gesundes-Leben.net</strong><br /><br />
			Wir werden Ihre Bestellung so schnell wie möglich bearbeiten.
			<br /><br /><br />
			<span style='text-decoration:underline;'>Ihre Bestellung:</span><br /><br />";
			
			foreach ($this->products as $object) {
				$returnString .= $this->amountArray["_".$object["id"]].'x ';
				
				$showPrice = $object["price"] * $this->amountArray["_".$object["id"]];
				$showPrice = number_format($showPrice,2,',',',');
				
    		$returnString .= $object["name"]." - Preis: ".$showPrice." Euro <br />";
    		$this->finalPrice += $object["price"] * $this->amountArray["_".$object["id"]];
			}
			
			if($this->finalPrice < 125)
				$this->finalPrice += $this->order["shippingCost"];
				
			$showPrice = number_format($this->finalPrice,2,',',',');
						
			$returnString .="
				<br />
				<hr size='1'>
				<strong>Gesamtpreis: {$showPrice} Euro</strong><br /><br /><br />
				Ihre Rechnung wird zusammen mit Ihrer Ware verschickt.<br /> 
				Bitte begleichen Sie den Betrag, der auf der Rechnung steht, 
				innerhalb von 14 Tagen.<br /><br />
				<span style='text-decoration:underline;'>Ihre Bestellung wird an folgende Adresse versendet:</span><br /><br />
			
				{$this->user['title']} {$this->user['firstname']} {$this->user['lastname']}<br /><br />
				{$this->user['street']} {$this->user['streetNumber']}<br />
				{$this->user['plz']} {$this->user['town']}<br />
				{$this->user['country']} <br /><br /><br />
			
				Sollten Sie Fragen haben, dann schreiben Sie uns eine Email an:<br />
				kontakt@gesundes-leben.net<br /><br /><br />";
					
			$returnString .= "\r Bleiben Sie gesund.<br /><br />
												Mit freundlichen Grüßen<br /><br />
												Das Gesundes-Leben.net Team";
												
			$returnString .= "</body></html>";									
																				
			return $returnString;
	}
	
	public function getEmailMessage() {

		$returnString = "
			Sehr geehrte Damen und Herren,\r\n
			Ich bestelle hiermit fur den Kunden (Neukundenbestellung):\r\n
			{$this->user['title']} {$this->user['firstname']} {$this->user['lastname']}
			{$this->user['street']} {$this->user['streetNumber']}
			{$this->user['plz']} {$this->user['town']}
			{$this->user['country']} 
			Email: {$this->user['email']}
			Geburtstag:{$this->user['birthday']}\r\n
			folgende Artikel:\r\n";
			
			foreach ($this->products as $object) {
				$returnString .= $this->amountArray["_".$object["id"]].'x ';
    		$returnString .= $object["name"];
    		$returnString .= "  Art.Nr. ".$object["artikelnummer"]. " \r ";
			}
						
			$returnString .= "\r Bitte schicken Sie dem Kunden eine Rechnung, die er begleichen muss.\n\n\n
												Mit freundlichen Grüßen\r\n\n
												Benjamin Jeschke";
			
			//$returnString = MIMEText(text.encode('utf-8'), $returnString, 'utf-8');
																											
			return $returnString;
	}
	
	public function order() {	
		if(!$this->validateData())
			return false;
			
		if(!$this->sendEmail())
			return false;
		else
		{
			$this->sendConfirmEmail();
			$this->display();
			return true;		
		}
		
	}
	
	
	public function validateData() {
		if(!isset($this->user["firstname"]) OR $this->user["firstname"] == "")
		{
			header("Location: http://www.gesundes-leben.net");
			die();
			return false;
		}
		else
			return true;
	}
	
	public function sendEmail() {
		//return true;
		
		$header = "\r\nMIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";
		return mail ($this->mail["to"],$this->mail["subject"],$this->mail["message"],"From: {$this->mail['senderName']} <{$this->mail['senderEmail']}>".$header);
	}
	
	public function sendConfirmEmail() {

		$header = "\r\nMIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";
		return mail ($this->confirmMail["to"],$this->confirmMail["subject"],$this->confirmMail["message"],"From: {$this->confirmMail['senderName']} <{$this->confirmMail['senderEmail']}>".$header);
	}
  	
  
  public function display() 
  { 
  	parent::getValues();
  	
  	$values = $this->values;
  	
  	$values["user"] = $this->user;
  	  	
  	$index = 0;
  	$values["subtotal"] = 0;
  	
  	foreach ($this->orderArray as $key => $object) {
  		$values["order"][$index]["name"] = $object->name;
  		$values["order"][$index]["amount"] = $object->amount;
  		$values["order"][$index]["image"] = $object->image;
  		$values["order"][$index]["price"] = number_format($object->price, 2, ',', '');		
  		$values["order"][$index]["productinfo1"] = $object->productinfo1;
  		$values["order"][$index]["productinfo2"] = $object->productinfo2;
  		$values["order"][$index]["productinfo3"] = $object->productinfo3;
  		
			$values["order"][$index]["totalprice"] = number_format($object->price + $object->amount, 2, ',', '');	
			$values["subtotal"] = $values["subtotal"] + $object->price;
					
			$index++;
		}
		
		$values["subtotal"] = number_format($values["subtotal"], 2, ',', '');	
		$values["shippingCost"] = number_format($this->order["shippingCost"], 2, ',', '');	
		$values["finalprice"] = number_format($values["subtotal"] + $this->order["shippingCost"], 2, ',', '');
		$values["tax"] = number_format($this->order["tax"] * $values["subtotal"], 2, ',', '');	
	
		$values["category"] = ''; 	
		$values["navCategory"] = '';
		
		$values["siteTitle"] = "Vielen Dank";
		$values["siteDescription"] =  "Vielen Dank für Ihre Bestellung";
		$values["site"] = "orderdone";
						
		$this->values = $values;		
		
		$this->renderTbl('orderDone');
  }  
    
	public function getCountryName($code){
		if($code == "DE")
			return "Deutschland";
		elseif($code == "AT")
			return "Deutschland";
		elseif($code == "CH")
			return "Österreich";
		else
			return $code;
	}  
    
  private function getNavCategory($category)
  {
  	foreach($this->navigation as $nav)
		{
			if($nav['name'] == $category)
			{
				return $nav['url'];
			}
			else
			{
				return '';
			}
		}  
  }
}    
?>