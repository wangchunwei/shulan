<?php
class SiteController extends CController 
{
    
    public function actionIndex()
    {
        $data = "sshulan";
        $this->render("index", array("data" => $data));
        
    }
    
    public function actionList()
        
    {
        $get = $_GET['id'];
        $data = "list";
        $this->render("list", array("data" => $data));
        
    }
    
    public function actionAddress()
    {
        
         $this->render("address");
    }
    
    
    public function actionContact()
    {
        
        $this->render("contact");
    }
    
    public function actionHistory()
    {
        
     	$this->render("history");   
    }
    
    public function actionSafe()
    {
        $this->render("safe");
    }
    
    public function actionShow()
    {
        $this->render("show");
    }
    
    
    public function actionStatus()
    {
     	$this->render("status");
    }
}
