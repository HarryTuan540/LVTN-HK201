<?php
namespace TransportInterprovincial\Form;
use Laminas\Form\Form;
use Laminas\InputFilter\InputFilter;
use Laminas\Form\Element;

class LoginForm extends Form{

    public function __construct(){
        parent::__construct();
        $this->setAttributes([
            'class' => 'form-horizontal',
            'id' => 'student-login-form',
            'enctype' => 'multipart/form-data',
            'action' => '/transportinterprovincial'
        ]);
        $this->setElement();
    }
    private function setElement(){
        // <input type="password" id="first" name="input-code" class="input-text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
        $password = new Element\Text('password');
        $password->setAttributes([
                    'type' => 'password',
                    'class' => 'input-text',
                    'name' => 'input-code',
                    'size' => 1,
                    'min' => 0,
                    'max' => 9,
                    'pattern' => "[0-9]{1}"

                ]);
        $this->add($password);
        // $this->add([
        //     'element' => 'button',
        //     'name' => 'btnSubmit',
        //     'type' => 'submit',
        //     'attributes' => [
        //         'class' => 'btn btn-primary',
        //         'value' => 'Save'
        //     ],
        // ]);
    }
}