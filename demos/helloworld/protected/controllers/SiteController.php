<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		echo 'Hello World';
	}
    
    public function actionShow()   
    {
        $show = "show";
        //if($_GET['pg']){
			$pg = $_GET['r'];
            //}
        var_dump($pg);
        $this->render("show", array("data" => $show));
        
    }
    
    public function actionMysql()
    {
        
        $mysql = new SaeMysql();

		$sql = "SELECT * FROM `user` LIMIT 10";
        $data = $mysql->getData( $sql );
        
        var_dump($data);
        
    }
    
    public function actionExeSql()
    {
        
        // $sql = "INSERT  INTO `user` ( `name`, `mobile`, `password`) VALUES ('haha" , "ddd" , NOW() ) ";
        //$mysql->runSql($sql);
    }
}