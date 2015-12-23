<?php
/**
 * Unit-Testing einer Zend Framework 2 Anwendung
 *
 * Zend Framework Session auf der International PHP Conference 2013 in München
 *
 * @package    Customer
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Ralf Eggert <r.eggert@travello.de>
 * @link       http://www.ralfeggert.de/
 */

/**
 * namespace definition and usage
 */
namespace Customer\Form;

use Zend\Form\Form;

/**
 * Customer form
 *
 * Form class to create and update customer data
 *
 * @package    Customer
 */
class CustomerForm extends Form
{
    /**
     * Init
     */
    public function init()
    {
        $this->add(
            array(
                'type' => 'hidden',
                'name' => 'id',
            )
        );

        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'firstname',
                'options'    => array(
                    'label' => 'First Name',
                ),
                'attributes' => array(
                    'class' => 'span5',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'lastname',
                'options'    => array(
                    'label' => 'Last Name',
                ),
                'attributes' => array(
                    'class' => 'span5',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'street',
                'options'    => array(
                    'label' => 'Address',
                ),
                'attributes' => array(
                    'class' => 'span5',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'postcode',
                'options'    => array(
                    'label' => 'postcode',
                ),
                'attributes' => array(
                    'class' => 'span5',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'city',
                'options'    => array(
                    'label' => 'City',
                ),
                'attributes' => array(
                    'class' => 'span5',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Select',
                'name'       => 'country',
                'options'    => array(
                    'label'         => 'Country',
                    'value_options' => array(
                        'de' => 'Deutschland',
                        'at' => 'Österreich',
                        'ch' => 'Schweiz',
                    ),
                ),
                'attributes' => array(
                    'class' => 'span5',
                ),
            )
        );


        $this->add(
            array(
                'type'       => 'Submit',
                'name'       => 'submit_save',
                'attributes' => array(
                    'value' => 'Speichern',
                    'id'    => 'submit_save',
                    'class' => 'btn btn-primary',
                ),
            )
        );
    }
}
