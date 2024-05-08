<?php
namespace AppBundle;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;

class TaskAssets
{
	/**
     * @Assert\Type("string")
     */
    protected $firstName;
	
	/**
     * @Assert\NotNull(message = "DNI cannot be null")
     */
    protected $dni;
	
	//INTEGER NO FUNCIONA BIEN
	/**
     * @Assert\Type(
     *     type="digit",
     *     message="The value {{ value }} is not a valid {{ type }} age.")
     */
    protected $age;
	
	/**
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
     protected $email;
	 
    /**
     * @Assert\IsTrue(message = "Checkbox is Off")
     */
	protected $checkbox;
	
	/*
    public function isTokenValid()
    {
        return $this->checkbox == $this->generateToken();
    }
	*/
	
	// FIRST NAME
	public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
	
	// DNI
	public function getDni()
    {
        return $this->dni;
    }
    public function setDni($dni)
    {
        $this->dni = $dni;
    }
	
	// AGE
	public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
	
	// CHECK BOX
	public function getCheckBox()
    {
        return $this->checkbox;
    }
    public function setCheckBox($checkbox)
    {
        $this->checkbox = $checkbox;
    }
	
	// EMAIL
	public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}