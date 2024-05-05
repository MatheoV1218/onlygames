<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-color: rgb(157, 212, 224);
        }
        .img {
            justify-content: center; 
            align-items: center; 
            border-radius: 50%; 
            width: 200px; 
            height: 200px; 
            object-fit: cover; 
            border: 2px solid white; 
        }
        .user_info{
            
         display:inline;
         margin-right: 20px;
        }
        .box{
            display: inline-block;
            margin-right: 30px;
        }
        .user_box {
            
            justify-content:space-evenly; 
            align-items: center; 
            border-radius: 50%; 
            width: 200px; 
            height: 200px; 
            
        }
        
        .add_friend_btn 
        {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin-left:35px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Welcome</h2>
            <div>
            
            <img src="profile_image/Guest.jpg" alt="Profile image" class="img">
            <h1 class = "user_info">Guest 01</h1>
            </div>
          

       
            
            <h3>Recommended friends</h3>
            
            <?php
                echo '
               <body> 
               <div class = "box">
                <img src="profile_image/nuts.jpg" alt="Profile image" class="user_box"></body>
        
                            <span>'.$row->username.'</span>
                            <button class="add_friend_btn">Add Friend</button>
                        </div>
                
                  
                      </div>
                      <div class = "box">
                <img src="profile_image/batman.jpg" alt="Profile image" class="user_box"></body>
        
                            <span>'.$row->username.'</span>
                            <button class="add_friend_btn">Add Friend</button>
                        </div>
                <div class = "box">
                <img src="profile_image/gege glazer.jpg" alt="Profile image" class="user_box"></body>
        
                            <span>'.$row->username.'</span>
                            <button class="add_friend_btn">Add Friend</button>
                        </div>
                  
                      </div>'; 
                      
                      
            
            ?>
        </div>

        <div class="all_friends">
            <h3>All friends</h3>
            <div class="usersWrapper">
                <?php
                if($get_frnd_num > 0){
                    foreach($get_all_friends as $row){
                        echo '<div class="user_box">
                                <div class="user_img"><img src="profile_images/'.$row->user_image.'" alt="Profile image"></div>
                                <div class="user_info"><span>'.$row->username.'</span></div>
                            </div>';
                            
                    }
                }
                else{
                    echo '<h4>You have no friends!</h4>';
                }
                ?>
            </div>
        </div>
        
    </div>
</body>
</html>
