<?php

//this is the controller for the index page.

//You are going to need to create / use a accounts controller that deals with login and registration you should not submit the post for the to the index controller
//POST index.php?page=accounts?action=create for adding a user
//POST index.php?page=accounts?action=login for logging a  user in and get the userID out of the session
//POST index.php?page=accounts?action=logout  this would destroy the session and return the user to the homepage
//GET  index.php?page=accounts?action=show  this would be to show the user profile and you get the userID out of session


class homepageController extends http\controller
{

    public static function get()
    {
        $form = '<form action="index.php?page=accounts?action=create" method="post"
  enctype="multipart/form-data">';
        
        
    }
    public static function show()
    {
//this is the show method that is called to show the sites name in a template any array passed in will be accepted by the template function as a model
//You could get fancy with the homepage and check for the userID in the session and hide/show the login / registration links when no session
//If there is a session then you should show the user profile link
//the template is an HTML page with PHP inserted in it.  just put an if/else statement to check for the session and show correct links


        $templateData['site_name'] = 'mysite';

//template data contains what will show up in the $data variable in the homepage template
//the name of the template 'homepage' becomes 'homepage.php' in the pages directory

        self::getTemplate('homepage', $templateData);
    }

    public static function create()
    {


//I just put a $_POST here but this is where you would put the code to add a record
    
          $db = dbConn::getConnection();
          $tableName = get_called_class();
          $sql ='INSERT INTO ' .$tableName.'(owneremail,ownerid, createddate,duedate,message,isdone) VALUES ("jss@example.com","77", "2017-12-11","2018-01-02","hi i am shivangi","0")';

          $statement = $db->prepare($sql);
          $statement->execute();
          return 0;
        print_r($_POST);
    }

}
