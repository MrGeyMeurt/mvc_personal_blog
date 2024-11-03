<?php
class images extends Controller {
    public function index() {
        $this->loadModel('Image');
        
        $images = $this->Image->getAll();
        
        $this->render('index', compact('images'));
    }
}
?>