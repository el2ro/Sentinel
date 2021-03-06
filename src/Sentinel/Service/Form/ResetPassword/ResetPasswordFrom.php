<?php namespace Sentinel\Service\Form\ResetPassword;

use Sentinel\Service\Validation\ValidableInterface;
use Sentinel\Repo\User\UserInterface;

class ResetPasswordForm {

    /**
     * Form Data
     *
     * @var array
     */
    protected $data;

    /**
     * Validator
     *
     * @var \Cesario\Service\Form\ValidableInterface
     */
    protected $validator;

    /**
     * Session Repository
     *
     * @var \Cesario\Repo\Session\SessionInterface
     */
    protected $user;

    public function __construct(ValidableInterface $validator, UserInterface $user)
    {
        $this->validator = $validator;
        $this->user = $user;

    }

    /**
     * Reset password with new password
     *
     * @return integer
     */
    public function reset(array $input)
    {
        if( ! $this->valid($input) )
        {
            return false;
        }

        return $this->user->resetNewPassword($input['id'], $input['code'], $input['newPassword']);
    }

    /**
     * Return any validation errors
     *
     * @return array
     */
    public function errors()
    {
        return $this->validator->errors();
    }

    /**
     * Test if form validator passes
     *
     * @return boolean
     */
    protected function valid(array $input)
    {

        return $this->validator->with($input)->passes();

    }


}