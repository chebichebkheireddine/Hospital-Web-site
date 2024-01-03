<?php

/**
 * Summary of docterDOAintrfa
 */
interface docterDOAintrfa
{

    public function getByeID($id_m);
    public function getEmail($email);
    public function getAll();
    public function insert(Docter $doctor);
    public function update(Docter $doctor);
    public function delet($id_m);
    public function checkCredentials($email, $password);
}
class Docter
{
    private $id_m;
    private $nom;
    private $prenom;
    private $email;
    private $numero_de_telephone;
    private $mot_de_passe;
    private $specialite;
    private $id_state;
    private $imge;
    public function __construct($nom, $prenom, $email, $numero_de_telephone, $mot_de_passe, $specialite, $id_state, $imge)
    {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numero_de_telephone = $numero_de_telephone;
        $this->mot_de_passe = $mot_de_passe;
        $this->specialite = $specialite;
        $this->id_state = $id_state;
        $this->imge = $imge;
    }

    public function getIdM()
    {
        return $this->id_m;
    }

    public function setIdM($id_m)
    {
        $this->id_m = $id_m;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getNumeroDeTelephone()
    {
        return $this->numero_de_telephone;
    }

    public function setNumeroDeTelephone($numero_de_telephone)
    {
        $this->numero_de_telephone = $numero_de_telephone;
    }

    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    public function getSpecialite()
    {
        return $this->specialite;
    }

    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    public function getIdState()
    {
        return $this->id_state;
    }

    public function setIdState($id_state)
    {
        $this->id_state = $id_state;
    }

    public function getImge()
    {
        return $this->imge;
    }

    public function setImge($imge)
    {
        $this->imge = $imge;
    }

}
class DoctertDoa implements docterDOAintrfa
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getByeID($id_m)
    {

        $stmt = $this->connection->prepare("SELECT * FROM medecin WHERE id_m = :id_m");

        $stmt->execute(array(':id_m' => $id_m));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $doctor = new Docter(
            $row['nom'], $row['perenom'], $row['email'], $row['numero_de_telephone'],
            $row['mot_de_passe'], $row['specialitie'], $row['id_state'],
            $row['imge']
        );
        $doctor->setIdM($row['id_m']);

        return $doctor;

    }
    public function getEmail($email){
        $stmt = $this->connection->prepare("SELECT * FROM medecin WHERE email = :email");

        $stmt->execute(array(':email' => $email));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $doctor = new Docter(
            $row['nom'], $row['perenom'], $row['email'], $row['numero_de_telephone'],
            $row['mot_de_passe'], $row['specialitie'], $row['id_state'],
            $row['imge']
        );
        $doctor->setIdM($row['id_m']);

        return $doctor;


    }


    public function getAll()
    {
        $stmt = $this->connection->prepare("SELECT * FROM medecin  LIMIT 6");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $doctors = array();
        foreach ($rows as $row) {
            $doctor = new Docter(
                $row['nom'], $row['perenom'], $row['email'], $row['numero_de_telephone'],
                $row['mot_de_passe'], $row['specialitie'], $row['id_state'],
                $row['imge']
            );

            $doctor->setIdM($row['id_m']);
            $doctors[] = $doctor;
        }
        return $doctors;
    }


    public function insert(Docter $doctor)
    {
        $stmt = $this->connection->prepare("INSERT INTO medecin(id_m, nom, perenom, email, numero_de_telephone, mot_de_passe, specialitie, id_state, imge)
        VALUES (:id_m, :nom, :perenom, :email, :numero_de_telephone, :mot_de_passe, :specialitie, :id_state, :imge)");
        $stmt->execute(
            array(
                ':id_m' => $doctor->getIdM(),
                ':nom' => $doctor->getNom(),
                ':perenom' => $doctor->getPrenom(),
                ':email' => $doctor->getEmail(),
                ':numero_de_telephone' => $doctor->getNumeroDeTelephone(),
                ':mot_de_passe' => $doctor->getMotDePasse(),
                ':specialitie' => $doctor->getSpecialite(),
                ':id_state' => $doctor->getIdState(),
                ':imge' => $doctor->getImge()
            )
        );
        $doctor->setIdM($this->connection->lastInsertId());
    }


    public function update(Docter $doctor)
    {
        $stmt = $this->connection->prepare("UPDATE medecin 
                                         SET nom = :nom, 
                                             perenom = :perenom, 
                                             email = :email, 
                                             numero_de_telephone = :numero_de_telephone, 
                                             mot_de_passe = :mot_de_passe, 
                                             specialitie = :specialitie, 
                                             id_state = :id_state, 
                                             imge = :imge 
                                         WHERE id_m = :id_m");
        $stmt->execute(
            array(
                ':nom' => $doctor->getNom(),
                ':perenom' => $doctor->getPrenom(),
                ':email' => $doctor->getEmail(),
                ':numero_de_telephone' => $doctor->getNumeroDeTelephone(),
                ':mot_de_passe' => $doctor->getMotDePasse(),
                ':specialitie' => $doctor->getSpecialite(),
                ':id_state' => $doctor->getIdState(),
                ':imge' => $doctor->getImge(),
                ':id_m' => $doctor->getIdM()
            )
        );
    }


    public function delet($id_m)
    {
        $stmt = $this->connection->prepare("DELETE FROM medecin WHERE id_m = :id_m");
        $stmt->execute(array(':id_m' => $id_m));
    }
    public function checkCredentials($email, $password)
    {
        $stmt = $this->connection->prepare("SELECT COUNT(*) FROM medecin WHERE email = :email AND mot_de_passe = :password");

        $stmt->execute(array(':email' => $email, ':password' => $password));
        $count = $stmt->fetchColumn();

        return $count === 1;
    }
   
}

?>