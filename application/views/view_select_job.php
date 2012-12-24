<!DOCTYPE html>
<html lang="en-US">
		
		
		<title>Business Linkage</title>
		<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"  />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style_reg.css"  />
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>          
            <script type="text/javascript" src="<?php echo base_url();?>js/global.js"></script>
            <link rel="stylesheet" href="<?php echo base_url();?>css/style_menu.css" type="text/css" media="screen"/>
            <link rel="shortcut icon" href="http://assets.tumblr.com/images/default_avatar_16.gif" />
        <style>
           *{
                margin:0;
                padding:0;
               
            }
            .title{
                width:703px;
                height:144px;
                position:absolute;
                top:0px;
                left:0px;
                background:transparent url(title.png) no-repeat top left;
            }
            a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
        </style>
</head>
	<body>
    
    <div id="all">
        <div id="header">
        <div id="header_content">
        <div id="logo">
            
            <a href="<?php echo base_url();?>site/" title="Business Linkage" id="linklogo">
            </a>
            </div>
          <div class="menu">
    <div class="item">
        <a class="link icon_mail"></a>
        <div class="item_content">
            <h2>Contact us</h2>
            <p>
                <a href="#">eMail</a>
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
            </p>
        </div>
    </div>
    <div class="item">
        <a class="link icon_help"></a>
        <div class="item_content">
            <h2>Help</h2>
            <p>
                <a href="#">Site map</a>
                <a href="#">Servicess</a>
                <a href="#">About us</a>
            </p>
        </div>
    </div>
    <div class="item">
        <a  class="link icon_find"></a>
        <div class="item_content">
            <h2>Search</h2>
            <p>
                <input id="search" type="text"></input>
                <a href="">Go</a>
            </p>
        </div>
    </div>
   
    <div class="item">
        <a href="<?php echo base_url();?>site/" class="link icon_home"></a>
        <div class="item_content">
            <h2>Start from here</h2>
            <p>
                <a href="<?php echo base_url();?>site/">Login</a>
                <a href="<?php echo base_url();?>site/user_regist">User Sign up</a>
                <a href="<?php echo base_url();?>site/build_tree/">Employee </a>
            </p>
        </div>
    </div>
</div>  <!-- menu end -->
        
        </div>
            
            
            </div>
        
        <div id="container" class="clear">  
        
       
               <div id="content">
           <div id="regist_steps"><table width="200" >
  <tr>
    <td><a href="<?php echo base_url();?>site/build_tree/"><p >Step one </p></a></td>
    <td><a href="<?php echo base_url();?>site/select_job/"><p class="active">Step two </p></a> </td>
  </tr>
</table>
 </div>
            
        </div>
       
        <div id="login">
        <div id="main" class="form-4">
				<?php echo form_open('');?> 
				   <h1>Login </h1>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="login" placeholder="Username or email" requried />
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password"  /> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Login"><br/><br/>
                        <a href="#" id="forget"  style="margin-left:40px;">Forget your password</a>
				    </p>       
				<?php echo form_close();?>
			</div>
        </div>
        
        <div id="login2" style="display:none;">
        <div id="main" class="form-4">
				<?php echo form_open('');?> 
				   <h4>Forget Passoword </h4>
                   <br/>
                   <p>Enter your email and we will send to you your passowrd</p><br/><br/>
				    <p>
				        <label for="login">Your E-mail</label>
				        <input type="text" name="login" placeholder="Your E-mail" requried />
				    </p>
				    

				    <p>
				        <input type="submit" name="submit" value="Send Password">
                        <br/><br/>
                       
                       
                       
				    </p>       
				<?php echo form_close();?>

			</div>
        </div>

       <table id="serve" style="margin-bottom:40px;">
        <tr>
    <td width="350">
    <div id="info1">
	<a href="#" title="Video Conference"><img src="<?php echo base_url();?>images/video.png" width="250" height="213" /><span></span></a>
    <p>Having the ability of make a meeting between employees by video conference . </p>
	</div>
        </td>
        <td width="350">
    <div id="info1">
	<a href="#" title="Search for a Job"><img src="<?php echo base_url();?>images/job.png" width="250" height="213" /><span></span></a>
    <p>Write your CV and send it for a suitable companies of your abilities . </p>
	</div>
        </td>
        <td width="350">
    <div id="info1">
	<a href="#" title="Build your company"><img src="<?php echo base_url();?>images/bulid.png" width="250" height="213" /><span></span></a>
    <p>Bulid the tree of your company and state the function of every employee . </p>
	</div>
        </td>
        <td width="350">
        <div id="info1">
	<a href="#" title="Community"><img src="<?php echo base_url();?>images/meeting.png" width="250" height="213" /><span></span></a>
    <p>Your Campany can search and see other company's history and make a deal . </p>
	</div>
    </td>
        </tr>
        </table>
	  </div><!--- End Container --->
    
    
	<div id="footer">
    		<p>Business Linkage &copy; 2012 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" >Sign up</a> - <a href="#" >How Can Use The Site?</a> - <a href="#" >What are Th Site Services?</a> - <a href="#" >Troubleshooting</a></p>
	</div>
    
    </div>
   
       
       
        <script>
            $('.item').hover(
                function(){
                    var $this = $(this);
                    expand($this);
                },
                function(){
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem){
                var angle = 0;
                var t = setInterval(function () {
                    if(angle == 1440){
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
                },10);
                $elem.stop().animate({width:'268px'}, 1000)
                .find('.item_content').fadeIn(400,function(){
                    $(this).find('p').stop(true,true).fadeIn(600);
                });
            }

            function collapse($elem){
                var angle = 1440;
                var t = setInterval(function () {
                    if(angle == 0){
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
                },10);
                $elem.stop().animate({width:'52px'}, 1000)
                .find('.item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }
        </script>
</body>


</html>