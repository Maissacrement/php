<?php
/**
 * All Persons belonging in this class have a name, an age, and a id
 */
class Personnage
{
    /** ----Attribut---- **/

    //definition d'attribut specifique a l'object
    private $_name;
    private $_age;

    //variable static propre a chacun des objets
    private static $_id = 0;

    /** ----Constructeur---- **/

    //instanciation d'un personnage definit par l'utilisateur
    public function __construct($name, $age)
    {
        $this->_name = $name;
        $this->_age = $age;

        self::$_id++;
    }

    /** -----Methodes----- **/

    //getteur

    public function getName()
    {
        return $this->_name;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getId()
    {
        return $this->_id;
    }

    //setteur

    public function setName($name)
    {
        $this->_name = $name;
    }
    public function setAge($age)
    {
        $this->_age = $age;
    }
    public function setId($id)
    {
        $this->_id = $id;
    }

    //Autres

    //function
    public function estMajeur()
    {
        return $this->_age >= 18;
    }

    //procedure
    public function aimeLaMusic(carac)
    {
        if(is_string(carac) && carac < 2)
        {
            carac = strtolower(carac)
            if(carac == 'y')
            {
                echo "Cool la music c'est la vie";
            }
            elseif (carac == 'n')
            {
                echo "Dommage tu rate quelque chose";
            }
            else
            {
                echo "Vous n'avez pas repondu 'O' ou 'N'";
            }
        }
        else
        {
            echo "Je n'ai pas compris";
        }
    }

}
?>
