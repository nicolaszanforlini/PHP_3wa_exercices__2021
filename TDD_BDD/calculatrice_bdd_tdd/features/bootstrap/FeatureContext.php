<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Calc\Calcule;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private Calcule $calc;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->calc = new Calcule;
    }


    /**
     * @Given la somme est supérieur à :arg1
     */
    public function laSommeEstSuperieurA($arg1)
    {
        if( $arg1<200 ) throw new Exception("somme inférieur à 200");
    }

    /**
     * @Given j'ai deux nombres que j'additionne :arg1 :arg2
     */
    public function jaiDeuxNombresQueJadditionne($arg1, $arg2)
    {
        $this->calc->add( $arg1, $arg2 );
        if( $this->calc->lastInMemory() != ($arg1 + $arg2) ) throw new Exception("calcule non memorisé");
    }

    /**
     * @Then j'ai dans la memoire en derniere valeur :arg1
     */
    public function jaiDansLaMemoireEnDerniereValeur($arg1)
    {
        if( !($arg1 == $this->calc->lastInMemory()) ) {
            throw new Exception( "error last calcul in memory" );
        } else {
            return( $arg1 == $this->calc->lastInMemory() );
        }
    }

    /**
     * @Given toutes mes opérations mise en memoire <1000,2000,5000,6000>
     */
    public function toutesMesOperationsMiseEnMemoire2()
    {
        $this->calc->add( 500, 500 );
        $this->calc->add( 1000, 1000 );
        $this->calc->add( 2500, 2500 );
        $this->calc->add( 3000, 3000 );
        if( count($this->calc->getMemory()) != 4 ) throw new Exception("error save in memory");
    }

    /**
     * @Then j'affiche la valeur de toutes la memoire
     */
    public function jafficheLaValeurDeToutesLaMemoire()
    {
        $this->calc->add( 500, 500 );
        $this->calc->add( 1000, 1000 );
        $this->calc->add( 2500, 2500 );
        $this->calc->add( 3000, 3000 );
        if( !empty( $this->calc->getMemory() || $this->calc->getMemory() != [] )) {
            $this->calc->displayMemory();
        } else {
            throw new Exception("la memoire est vide, pas de données à afficher");
        }
    }

    /**
     * @Then je la vide la memoire
     */
    public function jeLaVideLaMemoire()
    {
        $this->calc->resetMemory();
        if( $this->calc->getMemory() != [] ) {
            throw new Exception("probleme pour vider la memoire");
        }
    }


}



