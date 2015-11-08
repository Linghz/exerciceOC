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
	public function getPseudo()
	{
		return $this->pseudo;
	}
	public function setPseudo($pseudo)
	{
		$this->pseudo = $pseudo;
	}
}

?>