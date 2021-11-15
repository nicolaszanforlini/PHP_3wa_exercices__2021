<?php


interface HtmlComponent {

    public function getComponent() :string ;
}



class Text implements HtmlComponent {

    private string $text;

    public function __construct( $s )
    {
        $this->setText( $s );
    }

    public function setText( string $s ) :void {
        $this->text = $s;
    }

    public function getComponent() :string {
        return $this->text;
    }
}



class DecoItalic implements HtmlComponent  {

    private $elemHtml;

    public function __construct( $elem ) {
        $this->setElem( $elem );
    }

    public function setElem( $e ) :void {
        $this->elemHtml = $e;
    }

    public function getComponent() :string {
        return "<em>".$this->elemHtml->getComponent()."</em>";
    }
}



class DecoParagraphe implements HtmlComponent  {

    private $elemHtml;

    public function __construct( $elem ) {
        $this->setElem( $elem );
    }

    public function setElem( $e ) :void {
        $this->elemHtml = $e;
    }

    public function getComponent() :string {
        return "<p>".$this->elemHtml->getComponent()."</p>";
    }
}



//============================================

$texte = new Text("toto tata titi");
$texte->getComponent();
echo PHP_EOL;

$decoIt = new DecoItalic( $texte );
echo $decoIt->getComponent();
echo PHP_EOL;

$decoP = new DecoParagraphe( $decoIt );
echo $decoP->getComponent();
echo PHP_EOL;

//===========================================


