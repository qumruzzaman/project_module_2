<?php
//Terminal-Based Contact Management App
$name1 = "";    
$phone1 = "";
$name2 = "";    
$phone2 = "";

while(true){
    echo "\n==== Welcome to Contact manger ====\n";
    echo "1. Add Contact\n2. View Contacts\n3. Exit\nChoose your option (1/2/3):";
    $option = trim(fgets(STDIN));
    //Add Contact
    if($option == 1){              
        if($name1 == ""){
            echo "Enter name of contact1:";
            $name1 = trim(fgets(STDIN));
            echo "Enter phone no of contact1:";
            $phone1 = trim(fgets(STDIN));
        }elseif($name2 == ""){
            echo "Enter name of contact2:";
            $name2 = trim(fgets(STDIN));
            echo "Enter phone no of contact2:";
            $phone2 = trim(fgets(STDIN));
        }else{
            echo "Sorry. 2 contacts are already added.\n";
        }            
    }
    // View Contacts    
    elseif($option == 2){            
        echo "==== Contact List ====\n";
        if($name1 != ""){
            echo "SL| Name | Phone\n";
            echo "1 | $name1 | $phone1\n";                
        }
        if($name2 != ""){
            echo "2 | $name2 | $phone2\n";
        }
        if($name1 == "" && $name2 == ""){
            echo "No contact is found\n";
        }
    }
    // Exit        
    elseif($option == 3){
        echo "Good bye...";
        break;
    }
    // Invalid
    else{
        echo "You entered invalid choice\n";
    }
}
?>
