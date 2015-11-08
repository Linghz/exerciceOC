<?php
class Membre 
{
	private $pseudo;
	private $email;
	private $status;

	public function __construct($pseudo)
	{
		$this->pseudo = $pseudo;
	}
}

?>