<?php
     session_start();
     if(!isset($_SESSION['userdata'])){
         header("location: ../");
     }

     
     $userdata = $_SESSION['userdata'];
     $groupsdata = $_SESSION['groupsdata'];

   if ($_SESSION['userdata']['status'] == 0) {
        $status = '<b style="color:red">Not Voted</b>';
    } else {
        $status = '<b style="color:green">Voted</b>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
   
  
    <style>
        /* Reset default browser styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #headerSection {
            background-color: #45a049;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000; /* Ensure it's above other content */
        }

        #headerSection:after {
            content: '';
            display: table;
            clear: both;
        }

        #backbutton, #logbutton {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            float: left;
            margin-left: 10px;
        }

        #logbutton {
            background-color: #f44336;
            float: right;
            margin-right: 10px;
        }

        #backbutton:hover, #logbutton:hover {
            opacity: 0.8;
        }

        h1 {
            margin: 0;
            font-family: 'Georgia', serif;
            padding: 10px;
        }

        #mainSection {
            padding: 80px 20px 20px; /* Adjust padding to account for fixed header */
            display: flex;
            justify-content: space-between;
        }

        #profile, #group {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-top: 20px;
        }

        #profile {
            width: 30%;
            text-align: center;
        }

        #profile img {
            border-radius: 50%;
        }

        #group {
            width: 65%;
        }

        #group div {
            margin-bottom: 20px;
        }

        #group img {
            float: right;
            border-radius: 8px;
        }

        #votebtn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
            margin: 10px 0;
            display: inline-block;
        }

        #votebtn:hover {
            background-color: #45a049;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
        }

        @media (max-width: 768px) {
            #mainSection {
                flex-direction: column;
                align-items: center;
            }

            #profile, #group {
                width: 100%;
            }

            #group img {
                float: none;
                display: block;
                margin: 0 auto 10px;
            }
        }
        #voted{
            background-color: #75f086;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
            margin: 10px 0;
            display: inline-block;
        }
    </style>
    
</head>
<body>
    <div id="mainSection">

    <div id="headerSection">
    <a href="../"> <button id="backbutton" >Back</button></a>
    <a href="logout.php"><button id="logbutton">Logout</button></a>
    <h1>Online Voting System</h1>
    </div>
    
    
    <div id="profile">
        <img src="../uploads/<?php echo  $userdata['photo'] ?>" height="100" width="100" alt=""><br><br>
        <b>Name:<?php echo  $userdata['name'] ?></b><br><br>
        <b>Mobile:<?php echo  $userdata['mobile'] ?></b><br><br>
        <b>Address:<?php echo  $userdata['address'] ?></b><br><br>
        <b>Status:<?php echo  $status ?></b>
    </div>
    <div id="group">
        <?php
            if($_SESSION['groupsdata']) {
                for ($i = 0; $i<count($groupsdata); $i++){
                    ?>
                    <div>
                        <img  src="../uploads/<?php echo  $groupsdata[$i]['photo'] ?>" height="100" width="100" alt="">
                       <p><b>Group Name:</b><?php echo  $groupsdata[$i]['name'] ?> </p><br>
                        <p><b>Votes:</b><?php echo  $groupsdata[$i]['votes'] ?></p><br><br>
                        <form method="POST" action="../api/vote.php">
                            <input type="hidden" name="gvotes" value="<?php echo $groupsdata [$i]['votes']?>">
                            <input type="hidden" name="gid" value="<?php echo $groupsdata [$i]['id']?>">
                            <?php  
                            if($_SESSION['userdata']['status']==0){
                                ?>
                                     <input type="submit" name="votebtn" value="vote" id="votebtn">
                                <?php
                            }
                            else{
                                ?>
                                     <button disabled type="Button" name="votebtn" value="vote" id="voted">Voted</button>
                                <?php 
                            }
                            ?>
                           
                         
                        </form>
                    </div>
                    <hr>
                    <?php
                }
            } else{

            }   
        ?>
    </div>

    </div>
    
</body>
</html>

