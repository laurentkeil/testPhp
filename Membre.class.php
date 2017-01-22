<?php
class Membre
{
    private $pseudo;
    private $email;
    private $signature;
    private $actif;
    
	public function __construct()
    {
    	// Ex : Récupérer en base de données les infos du membre
    	// SELECT pseudo, email, signature, actif FROM membres WHERE id = ...
    	
    }
	
	
	public function __destruct()
	{
		echo '</br>Cet objet va être détruit !';
	}
	
    public function envoyerEMail($titre, $message)
    {
        //mail($this->email, $titre, $message);
    }
    
    public function bannir()
    {
        $this->actif = false;
        $this->envoyerEMail('Vous avez été banni', 'Ne revenez plus !');
    }
	
    public function getPseudo()
    {
        return $this->pseudo;
    }
    
    public function setPseudo($nouveauPseudo)
    {
			// Vérifier si le nouveau pseudo n'est ni vide ni trop long
		if (!empty($nouveauPseudo) AND strlen($nouveauPseudo) < 15)
		{
			// Ok, on change son pseudo
			$this->pseudo = $nouveauPseudo;
		}
    }
	
	public function setEmail($nouveauMail){
		$this->email = $nouveauMail;
	}
}
?>