<?php
interface ITextDecorator { 
    public function getTitle();
    public function setTitle($_text);
}

abstract class Decorator implements ITextDecorator{
    protected $title;
    
    public function getTitle() {
        return $this->title;
    }
}

class SimpleText extends Decorator{
   
    public function __construct($_text) {
        $this->setTitle($_text);
    }
    
    public function setTitle($_txt) {
        $this->title = $_txt;
    }
}

class SimpleTextWithColor extends Decorator{
    
    public function __construct(SimpleText $_text) {
        $this->setTitle($_text->getTitle());
    }

    public function setTitle($_txt) {
        $this->title = "<label style='color:red;'>".$_txt."</label>";
    }
}

class SimpleTextWithHeader extends Decorator{
    
    public function __construct(SimpleText $_text) {
        $this->setTitle($_text->getTitle());
    }

    public function setTitle($_txt) {
        $this->title = "<h1>".$_txt."</h1>";
    }
}

class SimpleTextWithColorAndHeader extends Decorator{
    public function __construct(SimpleTextWithColor $_text) {
        $this->setTitle($_text->getTitle());
    }
    public function setTitle($_txt) {
        $txthead = new SimpleTextWithHeader(new SimpleText($_txt));
        $this->title = $txthead->getTitle();
    }
}

class SimpleTextWithBorder extends Decorator{
    
    public function __construct(SimpleText $_text) {
        $this->setTitle($_text->getTitle());
    }
    
    public function setTitle($_txt) {
        $this->title = "<div style='border: 1px solid red;'>".$_txt."</div>";
    }

}


$text1 = new SimpleText("Hola Mundo");
$textH1 = new SimpleTextWithHeader($text1);
echo $textH1->getTitle();


$text = new SimpleText("Hola Mundo texto 1");
$textRed = new SimpleTextWithColor($text);
echo $textRed->getTitle();

$text3 = new SimpleTextWithColorAndHeader(new SimpleTextWithColor(new SimpleText("Texto con rojo y Encabezado")));
echo $text3->getTitle();

$text4 = new SimpleTextWithBorder(new SimpleText($text3->getTitle()));
echo $text4->getTitle();

$text5 = new SimpleText('Otra Combinacion');
$textcolor = new SimpleTextWithColor($text5);
$texcoloconborde = new SimpleTextWithBorder(new SimpleText($textcolor->getTitle()));
echo $texcoloconborde->getTitle();

$text6 = new SimpleText('Otra Combinacion mas');
$textborde = new SimpleTextWithBorder($text5);
echo $textborde->getTitle();