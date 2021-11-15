<?php

//=========================================
abstract class Component
{
    abstract public function operation(): string;
}

//============================================
class Input extends Component {

    private string $name;
    private string $id;

    public function __construct( string $n, string $i ) {
        $this->setName( $n );
        $this->setId( $i );
    }

    public function setName ( string $n ) :void {
        $this->name = $n;
    }

    public function setId ( string $i ) :void {
        $this->id = $i;
    }

    public function operation(): string
    {
        return "<input type='text' id='{$this->id}' name='{$this->name}'>";
    }

}

//========================================
class Form extends Component
{

    protected \SplObjectStorage $children;

    public function __construct() {

        $this->children = new \SplObjectStorage;
    }

    public function add(Component $c): void
    {
        $this->children->attach($c);
    }

    public function remove(Component $c): void
    {
       $this->children->detach($c);
    }

    public function get(): \SplObjectStorage{

        return $this->children;
    }

    public function operation(): string
    {
        $results = "<Form>";
        foreach ($this->children as $child) {
            $results = $results."\n".$child->operation();
        }
        return "\n".$results."\n"."</Form>";
    }

}
//======================================================

class Wrapper extends Component
{

    protected \SplObjectStorage $children;

    public function __construct() {

        $this->children = new \SplObjectStorage;
    }

    public function add(Component $c): void
    {
        $this->children->attach($c);
    }

    public function remove(Component $c): void
    {
       $this->children->detach($c);
    }

    public function get(): \SplObjectStorage{

        return $this->children;
    }

    public function operation(): string
    {
        $results = "<div>";
        foreach ($this->children as $child) {
            $results = $results.$child->operation();
        }
        return $results."\n"."</div>";
    }

}

//==============================================================

$form = new Form();
$form->add(new Input('name', "Name"));
$form->add(new Input('description', "Description"));
echo $form->operation();

echo "\n=============================\n";
$wrapper = new Wrapper();
$wrapper->add($form);
echo $wrapper->operation();



