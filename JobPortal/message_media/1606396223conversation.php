<?php
ob_start();
include('UserFiles/header_user.php');
?>

<?php
if(isset($_GET['user_id'])){


?>
<?php

 $current_ide = $_SESSION["suer_session"];
 $user_id = $_GET["user_id"]; 
 $mark_read = 'UPDATE MessageTable SET message_viewssssss = 1 WHERE UserId='.$user_id.' AND message_for ='.$current_ide.' ';
 $qty = 1; $id = 1;
 $stmt = sqlsrv_query($conn, $mark_read);
if( !$stmt ) {
    die( print_r( sqlsrv_errors(), true));
}
?>


 


<?php

if(isset($_GET['my_id'])){
		session_start();
    $my_id = $_GET["my_id"];
	 	$version = 'SELECT * FROM Users WHERE UserId = '.$my_id.' ';
		$row = sqlsrv_query($conn,$version);

							 
		while( $data = sqlsrv_fetch_array( $row, SQLSRV_FETCH_ASSOC) ) {
		$data['UserId'];
		$user =  $_SESSION["suer_session"] = $data['UserId'];
			
		
		 }
    	
			if($row != ""){
				
				header("Location:https://messenger.chitchatchannel.com/conversation.php?user_id=$user_id");
			} else{
	 ob_flush_end();
 	 header("Location:chitchatchannel.com");		
				
			
			 }
		
 		
				 
 		} 
?>

<?php
    
     $current_ide = $_SESSION["suer_session"];
    
     $version = 'SELECT * FROM Users WHERE UserId = '.$current_ide.' ';
        $row = sqlsrv_query($conn,$version);

                             
        while( $data = sqlsrv_fetch_array( $row, SQLSRV_FETCH_ASSOC) ) {
           $FirstName = $data['FirstName'];
            $MyImage = $data['ProfilePicture']; 
            //var_dump($MyImage);
        }
    
    ?>
  
  
        <!-- Sidebar Start -->
        <aside class="sidebar">
            <!-- Tab Content Start -->
            <div class="tab-content">
                <!-- Chat Tab Content Start -->
                <div class="tab-pane active" id="chats-content">
                    <div class="d-flex flex-column h-100">
                        <div class="hide-scrollbar h-100" id="chatContactsList">
                            
                            <!-- Chat Header Start -->
                            <div class="sidebar-header sticky-top p-2">

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Chat Tab Pane Title Start -->
                                    <h5 class="font-weight-semibold mb-0">Chats</h5>
                                    <!-- Chat Tab Pane Title End -->

                                    <ul class="nav flex-nowrap">

                                        <li class="nav-item list-inline-item mr-1">
                                            <a class="nav-link text-muted px-1" href="#" title="Notifications" role="button" data-toggle="modal" data-target="#notificationModal">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img src="./../assets/media/heroicons/outline/bell.svg" alt="" class="injectable hw-20"> -->
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item list-inline-item d-block d-xl-none mr-1">
                                            <a class="nav-link text-muted px-1" href="#" title="Appbar" data-toggle-appbar="">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="hw-20" src="./../assets/media/heroicons/outline/view-grid.svg" alt="" class="injectable hw-20"> -->
                                            </a>
                                        </li>
 
                                    </ul>
                                </div>
                                
                                
                                <!-- Sidebar Header Start -->
                                <div class="sidebar-sub-header">
                                    <!-- Sidebar Header Dropdown Start -->
                                    <div class="dropdown mr-2">
                                        <!-- Dropdown Button Start -->
                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-chat-filter-list="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            All Chats
                                        </button>
                                        <!-- Dropdown Button End -->

                                        <!-- Dropdown Menu Start -->
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-chat-filter="" data-select="all-chats" href="#">All Chats</a>
                                             <a class="dropdown-item" data-chat-filter="" data-select="groups" href="#">Channels</a>
                                         
                                        </div>
                                        <!-- Dropdown Menu End -->
                                    </div>
                                    <!-- Sidebar Header Dropdown End -->

                                    <!-- Sidebar Search Start -->
                                    <form class="form-inline">
                                        <div class="input-group">
                                            <input type="text" class="form-control search border-right-0 transparent-bg pr-0"id="myInput" onkeyup="myFunctionss()" placeholder="Search users...">
                                            <div class="input-group-append">
                                                <div class="input-group-text transparent-bg border-left-0" role="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Sidebar Search End -->
                                </div>
                                <!-- Sidebar Header End -->
                            </div>
                            <!-- Chat Header End -->

                            <!-- Chat Contact List Start -->
                            <ul class="contacts-list" id="chatContactTab" data-chat-list="">
                                <!-- Chat Item Start -->
                                
                                    <?php
                                 
                                 $conversation_query = 'SELECT DISTINCT(UserId) FROM MessageTable WHERE UserId = '.$current_ide.' OR message_for = '.$current_ide.'  ';
                                    $conversation = sqlsrv_query($conn,$conversation_query);


                                    while($conversations = sqlsrv_fetch_array($conversation, SQLSRV_FETCH_ASSOC) ) {
                                     //var_dump($conversations);
									$other_user_id = $conversations["UserId"];
									 
                                ?>
                                
								<?php
									
									$stmt = 'SELECT message_viewssssss FROM MessageTable WHERE UserId = '.$other_user_id.' AND message_for = '.$current_ide.'  AND message_viewssssss = 0';  
									$params = array();
									$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
									$stmt = sqlsrv_query( $conn, $stmt , $params, $options );

								  $row_count = sqlsrv_num_rows( $stmt );

									 		
										 
								?>
                                
								
                                <?php
                                 
                                 $version = 'SELECT * FROM Users WHERE UserId = '.$conversations["UserId"].'  ';
                                    $row = sqlsrv_query($conn,$version);


                                    while($data = sqlsrv_fetch_array( $row, SQLSRV_FETCH_ASSOC) ) {
                                     
                                ?>
                                <?php 
                                if($data["UserId"] != $current_ide )
                                {
									
									
                                ?>
								 
                                <li class="contacts-item friends <?php if($data["UserId"] == $user_id) { ?> active <?php } ?>">
                                    <a class="contacts-link" href="/conversation.php?user_id=<?php echo $data["UserId"]; ?>">
                                        <div class="avatar avatar">
                                            <img src="https://chitchatchannel.com/Images/ProfilePicture/<?php echo $data["ProfilePicture"]; ?>" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate"><?php echo $data["FirstName"]; ?> <?php echo $data["LastName"]; ?></h6>
                                               
                                            </div>
                                            <div class="contacts-texts">
                                                <p class="text-truncate">...</p>
												 
												 <?php
													if($row_count > 0){
														?>
                                                   <div class="d-inline-flex align-items-center ml-1"style="display:block;">
                                              
												   <div class="badge badge-rounded badge-primary ml-1" id="badgesss"><?php echo $row_count; ?></div>
												 </div>
												<?php } ?>
												 
												 
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php }  } } ?>
                                <!-- Chat Item End -->
								
									
								<!-- Own grou -->
								<p>My Groups</p>
										<?php
	
								 
								 $versionsss = 'SELECT * FROM Category WHERE IsPresenter = '.$current_ide.' ';
									$roooow = sqlsrv_query($conn,$versionsss);


									while($datasaa = sqlsrv_fetch_array($roooow, SQLSRV_FETCH_ASSOC) ) {
									   
									   $channelName = $datasaa['Name'];
									   $channel_image = $datasaa['Image']; 
									 

								?>
								
								<?php
									
									$chnnl_unrd = 'SELECT message_viewssssss FROM ChannelMessagetable WHERE channel_id='.$datasaa['CategoryId'].' AND sender_id != '.$current_ide.'  AND message_viewssssss = 0';  
									$chnnl_unrds = array();
									$optionss =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
									$stmtss = sqlsrv_query( $conn, $chnnl_unrd , $chnnl_unrds, $optionss );

								    $row_countss = sqlsrv_num_rows( $stmtss );

									 		
										 
								?>
                                
                                <!-- Chat Item Start -->
                                <li class="contacts-item groups">
                                    <a class="contacts-link"  href="channel.php?chennel_id=<?php echo $datasaa['CategoryId'];  ?>">
                                        <div class="avatar bg-success text-light">
                                             <img src="https://chitchatchannel.com/Images/Category/<?php echo $channel_image; ?>"/>
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name"><?php echo $channelName; ?></h6>
                                             </div>
                                            <div class="contacts-texts">
                                                <p class="text-truncate">....</p>
                                                 
												  <?php
													if($row_count > 0){
														?>
                                                   <div class="d-inline-flex align-items-center ml-1"style="display:block;">
                                              
												   <div class="badge badge-rounded badge-primary ml-1" id="badgesss"><?php echo $row_countss; ?></div>
												 </div>
												<?php } ?>
											  </div>
                                        </div>
                                    </a>
                                </li>
								 
								<?php } ?>
								<p>Other Groups </p>
                                		<?php
	
								 $current_ide = $_SESSION["suer_session"];
 								 $version = 'SELECT * FROM ParticipantCategory WHERE UserId = '.$current_ide.' ';
								 $row = sqlsrv_query($conn,$version);


								 while( $data = sqlsrv_fetch_array( $row, SQLSRV_FETCH_ASSOC) ) {
									 
									  $category = $data['CategoryId'];
								 
									 
								?>
								
								<?php
									
									$other_chnnl_unrd = 'SELECT message_viewssssss FROM ChannelMessagetable WHERE channel_id='.$category.' AND sender_id != '.$current_ide.'  AND message_viewssssss = 0';  
									$other_chnnl_unrds = array();
									$optionsss =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
									$stmtsss = sqlsrv_query( $conn, $other_chnnl_unrd , $other_chnnl_unrds, $optionsss );

								    $row_countsss = sqlsrv_num_rows( $stmtsss );

									 		
										 
								?>
								
									<?php
	
								 
								 $versionsss = 'SELECT * FROM Category WHERE CategoryId = '.$category.' ';
									$roooow = sqlsrv_query($conn,$versionsss);


									while($datasaa = sqlsrv_fetch_array($roooow, SQLSRV_FETCH_ASSOC) ) {
									   
									   $channelName = $datasaa['Name'];
									   $channel_image = $datasaa['Image']; 
									 

								?>
                                <!-- Chat Item Start -->
                                <li class="contacts-item groups">
                                    <a class="contacts-link"  href="/channel.php?chennel_id=<?php echo $data['CategoryId']; ?>">
                                        <div class="avatar bg-success text-light">
                                             <img src="https://chitchatchannel.com/Images/Category/<?php echo $channel_image; ?>"/>
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name"><?php echo $channelName; ?></h6>
                                             </div>
                                            <div class="contacts-texts">
                                                <p class="text-truncate"><span>...</span> </p>
                                                 <?php
													if($row_countsss > 0){
														?>
                                                   <div class="d-inline-flex align-items-center ml-1"style="display:block;">
                                              
												   <div class="badge badge-rounded badge-primary ml-1" id="badgesss"><?php echo $row_countsss; ?></div>
												 </div>
												<?php } ?>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php } ?>
                                <!-- Chat Item End -->
                                      
                            </ul>
                            <!-- Chat Contact List End -->
                        </div>
                    </div>
                </div>
                <!-- Chats Tab Content End -->


                <!-- Friends Tab Content Start -->
                <div class="tab-pane" id="friends-content">
                    <div class="d-flex flex-column h-100">
                        <div class="hide-scrollbar" id="friendsList">
                            <!-- Chat Header Start -->
                            <div class="sidebar-header sticky-top p-2">

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Chat Tab Pane Title Start -->
                                    <h5 class="font-weight-semibold mb-0">Friends</h5>
                                    <!-- Chat Tab Pane Title End -->

                                    <ul class="nav flex-nowrap">

                                        <li class="nav-item list-inline-item mr-1">
                                            <a class="nav-link text-muted px-1" href="#" title="Notifications" role="button" data-toggle="modal" data-target="#notificationModal">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img src="./../assets/media/heroicons/outline/bell.svg" alt="" class="injectable hw-20"> -->
                                            </a>
                                        </li>
 
                                    </ul>
                                </div>
                                
                                
                                <!-- Sidebar Header Start -->
                                <div class="sidebar-sub-header">
                                    <!-- Sidebar Header Dropdown Start -->
                                    <div class="dropdown mr-2">
                                        <!-- Dropdown Button Start -->
                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-chat-filter-list="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            All Chats
                                        </button>
                                        <!-- Dropdown Button End -->

                                        <!-- Dropdown Menu Start -->
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-chat-filter="" data-select="all-chats" href="#">All Chats</a>
                                             <a class="dropdown-item" data-chat-filter="" data-select="groups" href="#">All Channels</a>
                                         </div>
                                        <!-- Dropdown Menu End -->
                                    </div>
                                    <!-- Sidebar Header Dropdown End -->

                                    <!-- Sidebar Search Start -->
                                    <form class="form-inline">
                                        <div class="input-group">
                                            <input type="text" class="form-control search border-right-0 transparent-bg pr-0" placeholder="Search users...">
                                            <div class="input-group-append">
                                                <div class="input-group-text transparent-bg border-left-0" role="button">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                                    </svg>

                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/search.svg" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Sidebar Search End -->
                                </div>
                                <!-- Sidebar Header End -->
                            </div>
                            <!-- Chat Header End -->

                            <!-- Friends Contact List Start -->
                            <ul class="contacts-list" id="friendsTab" data-friends-list="">
                                <!-- Item Series Start -->
                                <li>
                                    <small class="font-weight-medium text-uppercase text-muted">A</small>
                                </li>
                                <!-- Item Series End -->

                                <!-- friends Item Start -->
                                <li class="contacts-item active">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Albert K. Johansen</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>
                                                    
                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">San Fransisco, CA</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->

                                <!-- friends Item Start -->
                                <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Alice R. Botello</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Brentwood, NY</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->
                                
                                <!-- Item Series Start -->
                                <li>
                                    <small class="font-weight-medium text-uppercase text-muted">b</small>
                                </li>
                                <!-- Item Series End -->
                                
                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Brittany K. Williams</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Scranton, PA</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->

                                <!-- Item Series Start -->
                                <li>
                                    <small class="font-weight-medium text-uppercase text-muted">C</small>
                                </li>
                                <!-- Item Series End -->
                                
                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Christopher Garcia</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Riverside, CA</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->

                                <!-- friends Item Start -->
                                <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Casey Mcbride</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Zephyr, NC</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->
                                
                                <!-- Item Series Start -->
                                <li>
                                    <small class="font-weight-medium text-uppercase text-muted">G</small>
                                </li>
                                <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Gemma Mendez</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Frederick, MD</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->

                                <!-- Item Series Start -->
                                <li>
                                    <small class="font-weight-medium text-uppercase text-muted">k</small>
                                </li>
                                <!-- Item Series End -->

                                <!-- friends Item Start -->
                                <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Katelyn Valdez</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Jackson, TN</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->

                                <!-- friends Item Start -->
                                <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Katherine Schneider</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Saginaw, MI</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->

                                <!-- Item Series Start -->
                                <li>
                                    <small class="font-weight-medium text-uppercase text-muted">m</small>
                                </li>
                                <!-- Item Series End -->

                                    <!-- friends Item Start -->
                                    <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Maizie Edwards</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Greensboro, NC</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->

                                <!-- Item Series Start -->
                                <li>
                                    <small class="font-weight-medium text-uppercase text-muted">s</small>
                                </li>
                                <!-- Item Series End -->

                                <!-- friends Item Start -->
                                <li class="contacts-item">
                                    <a class="contacts-link" href="#">
                                        <div class="avatar">
                                            <img src="./../assets/media/avatar/3.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate">Susan K. Taylor</h6>
                                            </div>
                                            <div class="contacts-texts">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-16 text-muted mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-16 text-muted mr-1" src="./../assets/media/heroicons/solid/location-marker.svg" alt=""> -->
                                                <p class="text-muted mb-0">Centerville, VA</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- friends Item End -->
                                
                            </ul>
                            <!-- Friends Contact List End -->
                        </div>
                    </div>
                </div>
                <!-- Friends Tab Content End -->

                <!-- Profile Tab Content Start -->
                <div class="tab-pane" id="profile-content">
                    <div class="d-flex flex-column h-100">
                        <div class="hide-scrollbar">
                            <!-- Sidebar Header Start -->
                            <div class="sidebar-header sticky-top p-2 mb-3">
                                <h5 class="font-weight-semibold">Profile</h5>
                                <p class="text-muted mb-0">Personal Information & Settings</p>
                            </div>
                            <!-- Sidebar Header end -->

                            <!-- Sidebar Content Start -->
                            <div class="container-xl">
                                <div class="row">
                                    <div class="col">

                                        <!-- Card Start -->
                                        <div class="card card-body card-bg-5">

                                            <!-- Card Details Start -->
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="avatar avatar-lg mb-3">
                                                    <img class="avatar-img" src="./../assets/media/avatar/3.png" alt="">
                                                </div>
                
                                                <div class="d-flex flex-column align-items-center">
                                                    <h5>Catherine Richardson</h5>
                                                </div>

                                                <div class="d-flex">
                                                    <button class="btn btn-outline-default mx-1" type="button">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-18 d-none d-sm-inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-18 d-sm-inline-block" src="./../assets/media/heroicons/outline/logout.svg" alt=""> -->
                                                        <span>Logout</span> 
                                                    </button>
                                                    <button class="btn btn-outline-default mx-1 d-xl-none" data-profile-edit="" type="button">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-18 d-none d-sm-inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-18 d-sm-inline-block" src="./../assets/media/heroicons/outline/cog.svg" alt=""> -->
                                                        <span>Settings</span> 
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Card Details End -->

                                            <!-- Card Options Start -->
                                            <div class="card-options">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Change Profile Picture</a>
                                                        <a class="dropdown-item" href="#">Change Number</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card Options End -->

                                        </div>
                                        <!-- Card End -->

                                        <!-- Card Start -->
                                        <div class="card mt-3">

                                            <!-- List Group Start -->
                                            <ul class="list-group list-group-flush">
                                                
                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Local Time</p>
                                                            <p class="mb-0">10:25 PM</p>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/heroicons/outline/clock.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->
                                                
                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Birthdate</p>
                                                            <p class="mb-0">20/11/1992</p>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/heroicons/outline/calendar.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->
                                                
                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Phone</p>
                                                            <p class="mb-0">+01-222-364522</p>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Email</p>
                                                            <p class="mb-0">catherine.richardson@gmail.com</p>
                                                        </div>

                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/heroicons/outline/mail.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Website</p>
                                                            <p class="mb-0">www.catherichardson.com</p>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/heroicons/outline/globe.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->
                                                
                                                <!-- List Group Item Start -->
                                                <li class="list-group-item pt-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Address</p>
                                                            <p class="mb-0">1134 Ridder Park Road, San Fransisco, CA 94851</p>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/heroicons/outline/home.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->

                                            </ul>
                                            <!-- List Group End -->

                                        </div>
                                        <!-- Card End -->

                                        <!-- Card Start -->
                                        <div class="card my-3">

                                            <!-- List Group Start -->
                                            <ul class="list-group list-group-flush">
                                                
                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Facebook</p>
                                                            <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/icons/facebook.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->
                                                
                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Twitter</p>
                                                            <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                                        </svg>
                                                            
                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/icons/twitter.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Instagram</p>
                                                            <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/icons/instagram.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->

                                                <!-- List Group Item Start -->
                                                <li class="list-group-item py-2">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Linkedin</p>
                                                            <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                                        </div>
                                                        <!-- Default :: Inline SVG -->
                                                        <svg class="text-muted hw-20 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                                            <rect x="2" y="9" width="4" height="12" />
                                                            <circle cx="4" cy="4" r="2" />
                                                        </svg>

                                                        <!-- Alternate :: External File link -->
                                                        <!-- <img class="injectable text-muted hw-20 ml-1" src="./../assets/media/icons/linkedin.svg" alt=""> -->
                                                    </div>
                                                </li>
                                                <!-- List Group Item End -->
                                                
                                            </ul>
                                            <!-- List Group End -->

                                        </div>
                                        <!-- Card End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Content End -->
                        </div>
                    </div>
                </div>
                <!-- Profile Tab Content End -->
            </div>
            <!-- Tab Content End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Start -->

 

<?php
    
    $user_id = $_GET["user_id"];
    
      $version = 'SELECT * FROM Users WHERE UserId = '.$user_id.' ';
        $row = sqlsrv_query($conn,$version);

                             
        while( $data = sqlsrv_fetch_array( $row, SQLSRV_FETCH_ASSOC) ) {
           $FirstName = $data['FirstName'];
            $other_image = $data['ProfilePicture']; 
        }
    
    ?>
        <main class="main main-visible">

            <!-- Chats Page Start -->
            <div class="chats">
                <div class="chat-body">

                    <!-- Chat Header Start-->
                    <div class="chat-header">
                        <!-- Chat Back Button (Visible only in Small Devices) -->
                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none" type="button" data-close="">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                        </button>

                        <!-- Chat participant's Name -->
                        <div class="media chat-name align-items-center text-truncate">
                            <div class="avatar avatar-online d-none d-sm-inline-block mr-3">
                                <img src="https://chitchatchannel.com/Images/ProfilePicture/<?php echo $other_image; ?> " alt="">
                            </div>

                            <div class="media-body align-self-center ">
                                <h6 class="text-truncate mb-0"><?php echo $FirstName;?> <?php  echo $data['LastName']; ?></h6>
                             </div>
                        </div>

                        <!-- Chat Options -->
                        <ul class="nav flex-nowrap">
                             
                            <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-1" href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img src="./../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                              
                                            <!-- Alternate :: External File link -->
                                            <!-- <img src="./../assets/media/heroicons/outline/information-circle.svg" alt="" class="injectable hw-20 mr-2"> -->
                                            <span>View Info</span>
                                        </a>
 
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item list-inline-item d-sm-none mr-0">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-1" href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img src="./../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        
                                        <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                              
                                            <!-- Alternate :: External File link -->
                                            <!-- <img src="./../assets/media/heroicons/outline/information-circle.svg" alt="" class="injectable hw-20 mr-2"> -->
                                            <span>View Info</span>
                                        </a>
                                       
                                         
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Chat Header End-->

                    <!-- Search Start -->
                    <div class="collapse border-bottom px-3" id="searchCollapse">
                        <div class="container-xl py-2 px-0 px-md-3">
                            <div class="input-group bg-light ">
                                <input type="text" class="form-control form-control-md border-right-0 transparent-bg pr-0" placeholder="Search...">
                                <div class="input-group-append">
                                    <span class="input-group-text transparent-bg border-left-0">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                          
                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/search.svg" alt="Search icon"> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Search End -->

                    <!-- Chat Content Start-->
                    <div class="chat-content p-2" id="messageBody">
                         
                         <div id="message-container"></div>
                            
                         
                                 

                        <!-- Scroll to finish -->
                        <div class="chat-finished" id="chat-finished"></div>
                    </div>
                    <!-- Chat Content End-->

                    <form method="post" id="send_container_messge" enctype="multipart/form-data">
                    <!-- Chat Footer Start-->
                    <div class="chat-footer">
                        <div class="form-row">
                            <!-- Chat Input Group Start -->
                            <div class="col">
                                <div class="input-group">
                                    <!-- Attachment Start -->
                                    <div class="input-group-prepend mr-sm-2 mr-1">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                    
                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/plus-circle.svg" alt=""> -->
                                            </button>
                                            <div class="dropdown-menu">
                                               
                                           <div class="file_choosen_trigger">
                                              
                                                <a class="dropdown-item" onclick="myFunction()"id="file_choosen_trigger">
                                                    <!-- Default :: Inline SVG -->
                                                    <svg class="hw-20 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                    </svg>
                                                        
                                                    <!-- Alternate :: External File link -->
                                                    <!-- <img class="injectable hw-20 mr-2" src="./../assets/media/heroicons/outline/document.svg" alt=""> -->
                                                    <span id=""> 
                                                        <input type="file" class="hide_file" name="files" onchange="readURL(this);" id="image" style="display: none;">
                                                     Document
                                                 </span>
                                                </a>
												</div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Attachment End -->

                                                                   

                                    <!-- Textarea Start-->
                                    <input type="text" class="form-control transparent-bg border-0 no-resize hide-scrollbar" name="message" id="message_content" autocomplete="off" placeholder="Write your message..." rows="1">
                                    <!-- Textarea End -->
                                </div>
                            </div>
                            <!-- Chat Input Group End -->
                    
                            <!-- Submit Button Start -->
                            <div class="col-auto">
                               <button type="submit" id="send-button" class="btn btn-primary btn-icon rounded-circle text-light mb-1" role="button">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                        
                                    <!-- Alternate :: External File link -->
                                    <!-- <img src="./../assets/media/heroicons/outline/arrow-right.svg" alt="" class="injectable hw-24"> -->
                                </button>
                            </div>
                            <!-- Submit Button End-->
                        </div>
						<div class="container shadow p-3 mb-5 bg-white rounded"id="image_display">
                             <button type="reset" onclick="myFunctions()" class="close" onclick="reset($('#file'))">
                              <span aria-hidden="true">&times;</span>
                            </button>
							 <div class="chat-info-group-body collapse show" id="shared-files">
                                    <div class="chat-info-group-content list-item-has-padding">
                                         <!-- List Group Start -->
                                    
							<ul class="list-group list-group-flush">

							 <li class="list-group-item">
                                            
							 <div class="document" id="blah">
                          <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
             <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
     </svg> 
							 
								 </div>
								 
								   <div class="document-body">
                             <h6 class="text-truncate"id="file_name"></h6>
  								 </div>

                                                   
 
                                                </div>
							</li>
							</ul>
										</div>
                                                </div>
                            <!--<img class="injectable hw-20 img-thumbnail" id="" src="#">-->

                        </div>
                    </div>
                </form>
                    <!-- Chat Footer End-->
                </div>
<script type="text/javascript">
function myFunction(){
document.getElementById("image").click();
 
}
 </script>
				
				
 <script type="text/javascript">
var x = document.getElementById("image_display");
x.style.display = "none";
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(200)
.height(100);
};

 var name = document.getElementById('image'); 
  x.style.display = "block";
	
 $('#files').val(name.files.item(0).name);
	 $('#file_name').html(name.files.item(0).name);

reader.readAsDataURL(input.files[0]);
document.getElementById("file_name").innerHtml = name.files.item(0).name;
	
}
}


 function myFunctions() {
   var xdiv = document.getElementById("image_display");
  xdiv.style.display = "none"; 
 }
</script>
                   
				<?php
    
                     $user_id = $_GET["user_id"];
                    
                     $version = 'SELECT * FROM Users WHERE UserId = '.$user_id.' ';
                        $row = sqlsrv_query($conn,$version);

                                             
                        while( $data = sqlsrv_fetch_array( $row, SQLSRV_FETCH_ASSOC) ) {
                           $FirstName = $data['FirstName'];
                            $MyImage = $data['ProfilePicture']; 
                             $Address = $data['Address']; 
                             $LastName = $data['LastName'];
							 $email = $data['EmailID'];
							$adres = $data["Address"];
                            //var_dump($MyImage);
                        }
                    
                    ?>
             <!-- Chat Info Start -->
                <div class="chat-info">
                    <div class="d-flex h-100 flex-column">

                        <!-- Chat Info Header Start -->
                        <div class="chat-info-header px-2">
                            <div class="container-fluid">
                                <ul class="nav justify-content-between align-items-center">
                                    <!-- Sidebar Title Start -->
                                    <li class="text-center">
                                        <h5 class="text-truncate mb-0">Profile Details</h5>
                                    </li>
                                    <!-- Sidebar Title End -->

                                    <!-- Close Sidebar Start -->
                                    <li class="nav-item list-inline-item">
                                        <a class="nav-link text-muted px-0" href="#" data-chat-info-close="">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-22" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                              
                                            <!-- Alternate :: External File link -->
                                            <!-- <img class="injectable hw-22" src="./../assets/media/heroicons/outline/x.svg" alt=""> -->
                                        
                                        </a>
                                    </li>
                                    <!-- Close Sidebar End -->
                                </ul>
                            </div>
                        </div>
                        <!-- Chat Info Header End  -->

                        <!-- Chat Info Body Start  -->
                        <div class="hide-scrollbar flex-fill">

                            <!-- User Profile Start -->
                            <div class="text-center p-3">

                                <!-- User Profile Picture -->
                                <div class="avatar avatar-xl mx-5 mb-3">
                                    <img class="avatar-img" src="https://chitchatchannel.com/Images/ProfilePicture/<?php echo $MyImage; ?>" alt="">
                                </div>

                                <!-- User Info -->
                                <h5 class="mb-1"><?php echo $FirstName ?> <?php echo $LastName; ?></h5>
                                <p class="text-muted d-flex align-items-center justify-content-center">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-18 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                      
                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable mr-1 hw-18" src="./../assets/media/heroicons/outline/location-marker.svg" alt=""> -->
                                    <span><?php echo $adres; ?></span>
                                </p>

                                <!-- User Quick Options -->
                                <div class="d-flex align-items-center justify-content-center">
                                  
                                    <div class="btn btn-primary"style="width:200px;">
                                        <!-- Default :: Inline SVG -->
<svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/heart.svg" alt=""> -->
                                    </div>
                             
                                </div>
                            </div>
                            <!-- User Profile End -->

                            <!-- User Information Start -->
                            <div class="chat-info-group">
                                <a class="chat-info-group-header" data-toggle="collapse" href="#profile-info" role="button" aria-expanded="true" aria-controls="profile-info">
                                    <h6 class="mb-0">User Information</h6>
                                    
                                    <!-- Default :: Inline SVG -->
                                     <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                      
                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/information-circle.svg" alt=""> -->
                                  </a>

                                <div class="chat-info-group-body collapse show" id="profile-info">
                                    <div class="chat-info-group-content list-item-has-padding">
                                        <!-- List Group Start -->
                                        <ul class="list-group list-group-flush ">
 

                                            <!-- List Group Item Start -->
                                            <li class="list-group-item border-0">
                                                <p class="small text-muted mb-0">Email</p>
                                                <p class="mb-0"><?php echo $email; ?></p>
                                            </li>
                                            <!-- List Group Item End -->
 
                                        </ul>
                                        <!-- List Group End -->
                                    </div>
                                </div>
                            </div>
                            <!-- User Information End -->
 

                            <!-- Shared Files Start -->
                            <div class="chat-info-group">
                                <a class="chat-info-group-header" data-toggle="collapse" href="#shared-files" role="button" aria-expanded="true" aria-controls="shared-files">
                                    <h6 class="mb-0">Documents</h6>
                                  
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                  
                                    <!-- Alternate :: External File link -->
                                    <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/document.svg" alt=""> -->
                                </a>

                                <div class="chat-info-group-body collapse show" id="shared-files">
                                    <div class="chat-info-group-content list-item-has-padding">
                                         <!-- List Group Start -->
                                         <ul class="list-group list-group-flush" id="shared_doc">
 
 
                                        </ul>
                                        <!-- List Group End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Shared Files End -->

                        </div>
                        <!-- Chat Info Body Start  -->

                    </div>
                </div>
                <!-- Chat Info End -->
            </div>
            <!-- Chats Page End -->
 
            <!-- Friends Page Start -->
            <div class="friends px-0 py-2 p-xl-3">
                <div class="container-xl">
                    <div class="row">
                        <div class="col">
                            <div class="card card-body card-bg-1 mb-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="avatar avatar-lg mb-3">
                                        <img class="avatar-img" src="./../assets/media/avatar/3.png" alt="">
                                    </div>
    
                                    <div class="d-flex flex-column align-items-center">
                                        <h5 class="mb-1">Catherine Richardson</h5>
                                        <!-- <p class="text-white rounded px-2 bg-primary">+01-202-265462</p> -->
                                        <div class="d-flex mt-2">
                                            <div class="btn btn-primary btn-icon rounded-circle text-light mx-2">
                                                <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                                </svg>
                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/chat.svg" alt=""> -->
                                            </div>
                                            <div class="btn btn-success btn-icon rounded-circle text-light mx-2">
                                                <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                </svg>
                                                  
                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-options">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                            </svg>
                                              
                                            <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Remove</a>
                                            <a class="dropdown-item" href="#">Block</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat-closer d-xl-none">
                                    <!-- Chat Back Button (Visible only in Small Devices) -->
                                    <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-close="">
                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                        </svg>

                                        <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row friends-info">
                        <div class="col">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Local Time</p>
                                                <p class="mb-0">10:25 PM</p>
                                            </div>
                                            <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/clock.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Birthdate</p>
                                                <p class="mb-0">20/11/1992</p>
                                            </div>
                                            <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                              
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/calendar.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Phone</p>
                                                <p class="mb-0">+01-222-364522</p>
                                            </div>
                                            <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Email</p>
                                                <p class="mb-0">catherine.richardson@gmail.com</p>
                                            </div>
                                            <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/mail.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Website</p>
                                                <p class="mb-0">www.catherichardson.com</p>
                                            </div>
                                            <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/globe.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Address</p>
                                                <p class="mb-0">1134 Ridder Park Road, San Fransisco, CA 94851</p>
                                            </div>
                                            <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/home.svg" alt=""> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Facebook</p>
                                                <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                            </div>
                                            <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/facebook.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Twitter</p>
                                                <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                            </div>
                                            <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/twitter.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Instagram</p>
                                                <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                            </div>
                                            <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/instagram.svg" alt=""> -->
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Linkedin</p>
                                                <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                            </div>
                                            <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                                <rect x="2" y="9" width="4" height="12" />
                                                <circle cx="4" cy="4" r="2" />
                                            </svg>
                                            <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/linkedin.svg" alt=""> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Friends Page End -->

            <!-- Profile Settings Start -->
            <div class="profile">
                <div class="page-main-heading sticky-top py-2 px-3 mb-3">

                    <!-- Chat Back Button (Visible only in Small Devices) -->
                    <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none" type="button" data-close="">
                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                          </svg>
                        <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                    </button>

                    <div class="pl-2 pl-xl-0">
                        <h5 class="font-weight-semibold">Settings</h5>
                        <p class="text-muted mb-0">Update Personal Information &amp; Settings</p>
                    </div>
                </div>

                <div class="container-xl px-2 px-sm-3">
                    <div class="row">
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h6 class="mb-1">Account</h6>
                                    <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                </div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="firstName">First Name</label>
                                                <input type="text" class="form-control form-control-md" id="firstName" placeholder="Type your first name" value="Catherine">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="lastName">Last Name</label>
                                                <input type="text" class="form-control form-control-md" id="lastName" placeholder="Type your last name" value="Richardson">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="mobileNumber">Mobile number</label>
                                                <input type="text" class="form-control form-control-md" id="mobileNumber" placeholder="Type your mobile number" value="+01-222-364522">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="birthDate">Birth date</label>
                                                <input type="text" class="form-control form-control-md" id="birthDate" placeholder="dd/mm/yyyy" value="20/11/1992">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="emailAddress">Email address</label>
                                                <input type="email" class="form-control form-control-md" id="emailAddress" placeholder="Type your email address" value="catherine.richardson@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="webSite">Website</label>
                                                <input type="text" class="form-control form-control-md" id="webSite" placeholder="Type your website" value="www.catherichardson.com">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <input type="text" class="form-control form-control-md" id="Address" placeholder="Type your address" value="1134 Ridder Park Road, San Fransisco, CA 94851">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer d-flex justify-content-end">
                                    <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                    <button type="button" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h6 class="mb-1">Social network profiles</h6>
                                    <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                </div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="facebookId">Facebook</label>
                                                <input type="text" class="form-control form-control-md" id="facebookId" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="twitterId">Twitter</label>
                                                <input type="text" class="form-control form-control-md" id="twitterId" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="instagramId">Instagram</label>
                                                <input type="text" class="form-control form-control-md" id="instagramId" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="linkedinId">Linkedin</label>
                                                <input type="text" class="form-control form-control-md" id="linkedinId" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer d-flex justify-content-end">
                                    <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                    <button type="button" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h6 class="mb-1">Password</h6>
                                    <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                </div>
                                
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="current-password">Current Password</label>
                                                    <input type="password" class="form-control form-control-md" id="current-password" placeholder="Current password" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="new-password">New Password</label>
                                                    <input type="password" class="form-control form-control-md" id="new-password" placeholder="New password" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="repeat-password">Repeat Password</label>
                                                    <input type="password" class="form-control form-control-md" id="repeat-password" placeholder="Repeat password" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-footer d-flex justify-content-end">
                                    <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                    <button type="button" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h6 class="mb-1">Privacy</h6>
                                    <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                </div>
                                
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush list-group-sm-column">
                                               
                                        <li class="list-group-item py-2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="mb-0">Profile Picture</p>
                                                    <p class="small text-muted mb-0">Select who can see my profile picture</p>
                                                </div>
                                                <div class="dropdown mr-2">
                                                    <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Public
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Public</a>
                                                        <a class="dropdown-item" href="#">Friends</a>
                                                        <a class="dropdown-item" href="#">Selected Friends</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                               
                                        <li class="list-group-item py-2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="mb-0">Last Seen</p>
                                                    <p class="small text-muted mb-0">Select who can see my last seen</p>
                                                </div>
                                                <div class="dropdown mr-2">
                                                    <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Public
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Public</a>
                                                        <a class="dropdown-item" href="#">Friends</a>
                                                        <a class="dropdown-item" href="#">Selected Friends</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                               
                                        <li class="list-group-item py-2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="mb-0">Groups</p>
                                                    <p class="small text-muted mb-0">Select who can add you in groups</p>
                                                </div>
                                                <div class="dropdown mr-2">
                                                    <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Public
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Public</a>
                                                        <a class="dropdown-item" href="#">Friends</a>
                                                        <a class="dropdown-item" href="#">Selected Friends</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                               
                                        <li class="list-group-item py-2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="mb-0">Status</p>
                                                    <p class="small text-muted mb-0">Select who can see my status updates</p>
                                                </div>
                                                <div class="dropdown mr-2">
                                                    <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Public
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Public</a>
                                                        <a class="dropdown-item" href="#">Friends</a>
                                                        <a class="dropdown-item" href="#">Selected Friends</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                               
                                        <li class="list-group-item py-2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="mb-0">Read receipts</p>
                                                    <p class="small text-muted mb-0">If turn off this option you won't be able to see read recipts</p>
                                                </div>
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" id="readReceiptsSwitch" checked="">
                                                    <label class="custom-control-label" for="readReceiptsSwitch">&nbsp;</label>
                                                </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>

                                <div class="card-footer d-flex justify-content-end">
                                    <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                                    <button type="button" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h6 class="mb-1">Security</h6>
                                    <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                                </div>
                                
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush list-group-sm-column">    
                                        <li class="list-group-item py-2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="mb-0">Use two-factor authentication</p>
                                                    <p class="small text-muted mb-0">Ask for a code if attempted login from an unrecognised device or browser.</p>
                                                </div>
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" id="twoFactorSwitch" checked="">
                                                    <label class="custom-control-label" for="twoFactorSwitch">&nbsp;</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-2">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <p class="mb-0">Get alerts about unrecognised logins</p>
                                                    <p class="small text-muted mb-0">You will be notified if anyone logs in from a device or browser you don't usually use</p>
                                                </div>
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" id="unrecognisedSwitch" checked="">
                                                    <label class="custom-control-label" for="unrecognisedSwitch">&nbsp;</label>
                                                </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>

                                <div class="card-footer d-flex justify-content-end">
                                    <button class="btn btn-link text-muted mx-1">Reset</button>
                                    <button class="btn btn-primary" type="button">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Settings End -->

        </main>
        <!-- Main End -->
 

        <div class="backdrop"></div>
 
       
        <!-- Modal 2 :: Create Group -->
        <div class="modal modal-lg-fullscreen fade" id="createGroup" tabindex="-1" role="dialog" aria-labelledby="createGroupLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title js-title-step" id="createGroupLabel">&nbsp;</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body py-0 hide-scrollbar">
                        <div class="row hide pt-2" data-step="1" data-title="Create a New Group">
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="groupName">Group name</label>
                                    <input type="text" class="form-control form-control-md" id="groupName" placeholder="Type group name here">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Choose profile picture</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="profilePictureInput" accept="image/*">
                                        <label class="custom-file-label" for="profilePictureInput">Choose file</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-0">
                                        <label>Group privacy</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group rounded p-2 border">
                                        <div class="custom-control custom-radio">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Public group
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group rounded p-2 border">
                                        <div class="custom-control custom-radio">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Private group
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        
                        </div>

                        <div class="row hide pt-2" data-step="2" data-title="Add Group Members">
                            <div class="col-12 px-0">
                                <!-- Search Start -->
                                <form class="form-inline w-100 px-2 pb-2 border-bottom">
                                    <div class="input-group w-100 bg-light">
                                        <input type="text" class="form-control form-control-md search border-right-0 transparent-bg pr-0" placeholder="Search...">
                                        <div class="input-group-append">
                                            <div class="input-group-text transparent-bg border-left-0" role="button">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                                </svg>   

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/search.svg" alt=""> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Search End -->
                            </div>
    
                            <div class="col-12 px-0">
                                <!-- List Group Start -->
                                <ul class="list-group list-group-flush">
    
                                    <!-- List Group Item Start -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="avatar avatar-online mr-2">
                                                <img src="./../assets/media/avatar/1.png" alt="">
                                            </div>
    
                                            <div class="media-body">
                                                <h6 class="text-truncate">
                                                    <a href="#" class="text-reset">Catherine Richardson</a>
                                                </h6>
    
                                                <p class="text-muted mb-0">Online</p>
                                            </div>

                                            <div class="media-options">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" value="" id="chx-user-1" checked="">
                                                    <label class="custom-control-label" for="chx-user-1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="media-label" for="chx-user-1"></label>
                                    </li>
                                    <!-- List Group Item End -->
    
                                    <!-- List Group Item Start -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="avatar avatar-online mr-2">
                                                <img src="./../assets/media/avatar/2.png" alt="">
                                            </div>
    
                                            <div class="media-body">
                                                <h6 class="text-truncate">
                                                    <a href="#" class="text-reset">Katherine Schneider</a>
                                                </h6>
    
                                                <p class="text-muted mb-0">Online</p>
                                            </div>

                                            <div class="media-options">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" value="" id="chx-user-2" checked="">
                                                    <label class="custom-control-label" for="chx-user-2"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="media-label" for="chx-user-2"></label>
                                    </li>
                                    <!-- List Group Item End -->
    
                                    <!-- List Group Item Start -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="avatar avatar-offline mr-2">
                                                <img src="./../assets/media/avatar/3.png" alt="">
                                            </div>
    
                                            <div class="media-body">
                                                <h6 class="text-truncate">
                                                    <a href="#" class="text-reset">Brittany K. Williams</a>
                                                </h6>
    
                                                <p class="text-muted mb-0">Offline</p>
                                            </div>
                                            <div class="media-options">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" value="" id="chx-user-3">
                                                    <label class="custom-control-label" for="chx-user-3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="media-label" for="chx-user-3"></label>
                                    </li>
                                    <!-- List Group Item End -->
    
                                    <!-- List Group Item Start -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="avatar avatar-busy mr-2">
                                                <img src="./../assets/media/avatar/4.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="text-truncate"><a href="#" class="text-reset">Christina Turner</a></h6>
                                                <p class="text-muted mb-0">Busy</p>
                                            </div>
                                            <div class="media-options">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" value="" id="chx-user-4" checked="">
                                                    <label class="custom-control-label" for="chx-user-4"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="media-label" for="chx-user-4"></label>
                                    </li>
                                    <!-- List Group Item End -->
    
                                    <!-- List Group Item Start -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="avatar avatar-away mr-2">
                                                <img src="./../assets/media/avatar/5.png" alt="">
                                            </div>
    
                                            <div class="media-body">
                                                <h6 class="text-truncate"><a href="#" class="text-reset">Annie Richardson</a></h6>
                                                <p class="text-muted mb-0">Away</p>
                                            </div>
                                            <div class="media-options">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" value="" id="chx-user-5">
                                                    <label class="custom-control-label" for="chx-user-5"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="media-label" for="chx-user-5"></label>
                                    </li>
                                    <!-- List Group Item End -->
    
                                </ul>
                                <!-- List Group End -->
                            </div>
                        </div>

                        <div class="row pt-2 h-100 hide" data-step="3" data-title="Finished">
                            <div class="col-12">
                                <div class="d-flex justify-content-center align-items-center flex-column h-100">
                                    <div class="btn btn-success btn-icon rounded-circle text-light mb-3">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                            
                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/check.svg" alt=""> -->
                                    </div>
                                    <h6>Group Created Successfully</h6>
                                    <p class="text-muted text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque laborum fugiat vero pariatur provident!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link text-muted js-btn-step mr-auto" data-orientation="cancel" data-dismiss="modal"></button>
                        <button type="button" class="btn btn-secondary  js-btn-step" data-orientation="previous"></button>
                        <button type="button" class="btn btn-primary js-btn-step" data-orientation="next"></button>
                    </div>
                </div>
            </div>
        </div>

   
        
        <!-- All Modals End -->
    </div>
    <!-- Main Layout End -->
</body>





<script>

$('#send_container_messge').submit(function(e){

e.preventDefault();

var form = new FormData(document.getElementById('send_container_messge'));
	
if(message_content != ''){
	 
  	  $.ajax({
   	  url: '/UserFiles/send_message.php?user_id=<?php echo $user_id; ?>',
   	  method:"POST",  
      data: form, 
      contentType: false,
      cache: false,
	  processData:false,
		  
      success: function(response){
		  
		  	  var x = document.getElementById("image_display").style.display = "none";
 
       document.getElementById("send_container_messge").reset();
     
   		 $("#messageBody").animate({ 
scrollTop: $( '#messageBody').get(0).scrollHeight },3000); 
		  
     }
 	 });

}else{


  
}
   });
  </script>
<?php
    
     $current_ide=$_SESSION["suer_session"];
      $user_id = $_GET["user_id"];
    
    ?>
     
 
<?php
                                $user_idee = $_GET['user_id'];
                                 
                                 $message_user_image = 'SELECT * FROM Users WHERE UserId = '.$user_idee.'  ';
                                    $rowsws = sqlsrv_query($conn,$message_user_image);


                                    while($dataaass = sqlsrv_fetch_array($rowsws, SQLSRV_FETCH_ASSOC) ) {
                                        $other_imagessss = $dataaass["ProfilePicture"];
                                    }
                                ?>

<?php
    
     $current_ide = $_SESSION["suer_session"];
    
     $versioswwn = 'SELECT * FROM Users WHERE UserId = '.$current_ide.' ';
        $roeeew = sqlsrv_query($conn,$versioswwn);

                             
        while( $dataert = sqlsrv_fetch_array( $roeeew, SQLSRV_FETCH_ASSOC) ) {
           $FirstName = $dataert['FirstName'];
            $MyImages = $dataert['ProfilePicture']; 
            //var_dump($MyImage);
        }
    
    ?>
<script>
  
var reff = firebase.database().ref("user_id_<?php echo $current_ide; ?>/messages/user_id_<?php echo $user_id; ?>");
 reff.on('child_added', function(snapshot,output) {
     var authnames = '<?php echo $current_ide; ?>';
 var myname = '<?php echo $user_id; ?>';
 
     var name = (myname == snapshot.val().user_id) ? myname : snapshot.val().user_id;
      
     var image_tag =  snapshot.val().files == "" ? "" : '<div class="document"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"> <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div> <div class="document-body"><h6><a href="/UserFiles/download_file.php?file='+snapshot.val().files+'" class="text-reset" title="'+snapshot.val().files+'">'+snapshot.val().files+'</a>  </h6></div></div>';
	 
	 
if(authnames == name){
 
	if(snapshot.val().files != ""){
    var block = '<div class="message self"><div class="message-wrapper"><div class="message-content">  <div class="document"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"> <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div> <div class="document-body"><h6><a href="/UserFiles/download_file.php?file='+snapshot.val().files+'" class="text-reset" title="'+snapshot.val().files+'">'+snapshot.val().files+'</a>  </h6></div> </div><span>'+snapshot.val().text+'</span><div class="form-row"><div class="col"></div></div></div></div><div class="message-options"><div class="avatar avatar-sm"><img alt="" src="https://chitchatchannel.com/Images/ProfilePicture/<?php echo $MyImages; ?>"></div><span class="message-date">'+snapshot.val().date+'</span><div class="dropdown"> </div></div></div> '; 
		
		$("#message-container").append(block);
	
	}
		else{
		
		    var block = '<div class="message self"><div class="message-wrapper"><div class="message-content"> <span>'+snapshot.val().text+'</span><div class="form-row"><div class="col"></div></div></div></div><div class="message-options"><div class="avatar avatar-sm"><img alt="" src="https://chitchatchannel.com/Images/ProfilePicture/<?php echo $MyImages; ?>"></div><span class="message-date">'+snapshot.val().date+'</span><div class="dropdown"> </div></div></div> '; 
	$("#message-container").append(block);
	
		
		}
		
    
    }else{
    
		if(snapshot.val().files != ""){
 var block2 = '  <div class="message"><div class="message-wrapper"><div class="message-content"><div class="document"><div class="btn btn-primary btn-icon rounded-circle text-light mr-2"> <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div> <div class="document-body"><h6><a href="/UserFiles/download_file.php?file='+snapshot.val().files+'" class="text-reset" title="'+snapshot.val().files+'">'+snapshot.val().files+'</a>  </h6></div> </div><span>'+snapshot.val().text+'</span><div class="form-row"><div class="col"></div></div></div></div><div class="message-options"><div class="avatar avatar-sm"><img alt="" src="https://chitchatchannel.com/Images/ProfilePicture/<?php echo $other_imagessss; ?>"></div><span class="message-date">'+snapshot.val().date+'</span> </div></div>';
 	$("#message-container").append(block2);
  
		
		}else{
			
		
	 var block2 = '  <div class="message"><div class="message-wrapper"><div class="message-content"><span>'+snapshot.val().text+'</span><div class="form-row"><div class="col"></div></div></div></div><div class="message-options"><div class="avatar avatar-sm"><img alt="" src="https://chitchatchannel.com/Images/ProfilePicture/<?php echo $other_imagessss; ?>"></div><span class="message-date">'+snapshot.val().date+'</span> </div></div>';
	
	   	$("#message-container").append(block2);
  
	
	}

     
	}     
 
	 
	  if(snapshot.val().files != ""){
     var block3 = '<li class="list-group-item"><div class="document"><div class="document-body"><h6 class="text-truncate"><a href="#" class="text-reset" title="effects-of-global-warming.docs">'+image_tag+'</a></h6> <ul class="list-inline small mb-0"> <li class="list-inline-item"><span class="text-muted">Send By</span></li><li class="list-inline-item"><span class="text-muted text-uppercase">'+snapshot.val().sender_name+'</span></li></ul></div><div class="document-options ml-1"><div class="dropdown"><button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><!-- Default :: Inline SVG --><svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg></button><div class="dropdown-menu"><a class="dropdown-item" href="/UserFiles/download_file.php?file='+snapshot.val().files+'">Download</a></div></div></div></div></li><!-- List Group Item End -->';
     $("#shared_doc").append(block3);
	 }
 
});

</script>


<script>
	
 $("#messageBody").animate({ 
scrollTop: $( '#messageBody').get(0).scrollHeight },3000); 
	
</script>

<script>
function myFunctionss() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("chatContactTab");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
 
  

<?php

		}  
	?>