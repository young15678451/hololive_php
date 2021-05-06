<?php include_once "database.php";
    session_start();
    if(!isset($_SESSION["id"])){
    	header("Location: login.php");
    }
    // var_dump($_SESSION['id']);
    $id = $_GET["id"];
    $sql = "SELECT * FROM `mes` WHERE id = $id";
    $result = mysqli_query($con , $sql) or die('MySQL query error');
   
   
   
    if($_SESSION['id']){
    $sqli = "SELECT * FROM `member` WHERE id = {$_SESSION['id']} ORDER BY date DESC";
    $result2 = mysqli_query($con , $sqli) or die('MySQL query error');
    // var_dump($result2 );
    $row2 = mysqli_fetch_assoc($result2);
    



    // var_dump($row2);


   
}



   
    
	
   

?>





<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Hielo by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="wow/WOW-master/css/libs/animate.css">
    <script src="wow/WOW-master/dist/wow.min.js"></script>
    <script>
        new WOW().init();

        function check_data()
      {
       
         if (document.myForm.name.value.length == 0)
          alert("暱稱不可以空白哦❤");
        else if (document.myForm.content.value.length == 0)
          alert("內容不可以空白哦❤");
        else
          myForm.submit();
      }
    </script>
    <style>
.backto{float: left;}
footer{
    }
  .container h1{ text-align:center;
    margin-top: 5rem;
    font-size: 3rem;
    color: #555555;}
    .form-group label{font-size:2rem;
        margin-bottom:1.5rem}
        .back{ text-align:right;
            font-size: 1.5rem;}
.lb{margin-top: 2rem}
#btnroo{background:#d6d6d6;}
.btn{margin-top: 1rem;
    margin-right: 1rem;
    background:;
    opacity:0.8;
}
.form-control{ opacity:1;
    margin-bottom:1.5rem;
    background: #d6d6d65d;}
#content{height: 10rem;}

         .headimg{width: 10rem;
            
    height:10rem;
    float: center;
    position:absolute;
    overflow: hidden;
    Display: inline-block;
    border-radius:50%
    ;
    margin-right: 3rem;
    }  



        .card{float:right;
            position: auto;
            opacity:0.8;
            width: 95%;
           
                }
    .welcome{font-size:2rem; text-align:right;margin-bottom: 1rem;}
      .word { font-size: 1.5rem;
          text-align:right;
        margin-bottom: 1rem;}
        .card-header {background: #d6d6d6;
            color: #000;
            font-size: 2rem;
            }
            .card-title{font-size: 1.25rem;}
            .card-body{font-size: 1.25rem;}
/* .dbtn{text-align:right;} */
.btn-danger {
    float: right;
    margin-top: 1rem;
    margin-right: 1rem;
    background:;
    opacity: 1;
}

.btn-primary {
    float: right;
    margin-right: 1rem;
    margin-top: 1rem;
    margin-right: 1rem;
    background:;
    opacity: 1;
}     
    .outslider_container{height:200vh;;}
    
    .slider_container {
    margin: 5rem auto;
    width: 90vw;
    height:;
    position: absolute;
    overflow: auto;
    background-color: #f5f5f5;
    box-shadow: #666 0 0 10px;
    background-size: auto;
}

.bbackground {
    object-fit: cover;
}

.slider_container {
    position: absolute;
    left: 0;
    top: 19.5rem;
    right: 0;
    bottom: 0;
    z-index: -1;
}

.slider_container div {
    position: absolute;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    filter: alpha(opacity=0);
}

.slider_container div {
    -webkit-animation: round 25s linear infinite;
    animation: round 25s linear infinite;
}

@-webkit-keyframes round {
    4% {
        opacity: 1;
        filter: alpha(opacity=100);
        /* 0 - 1秒 淡入*/
    }
    20% {
        opacity: 1;
        filter: alpha(opacity=100);
        /* 1- 5秒靜止*/
    }
    24% {
        opacity: 0;
        filter: alpha(opacity=0);
        /* 5-6秒淡出*/
    }
}

@keyframes round {
    4% {
        opacity: 1;
        filter: alpha(opacity=100);
        /* 0 - 1秒 淡入*/
    }
    20% {
        opacity: 1;
        filter: alpha(opacity=100);
        /* 1- 5秒靜止*/
    }
    24% {
        opacity: 0;
        filter: alpha(opacity=0);
        /* 5-6秒淡出*/
    }
}

.slider_container div:nth-child(5) {
    -webkit-animation-delay: 0s;
    animation-delay: 0s;
}

.slider_container div:nth-child(4) {
    -webkit-animation-delay: 5s;
    animation-delay: 5s;
}

.slider_container div:nth-child(3) {
    -webkit-animation-delay: 10s;
    animation-delay: 10s;
}

.slider_container div:nth-child(2) {
    -webkit-animation-delay: 15s;
    animation-delay: 15s;
}

.slider_container div:nth-child(1) {
    -webkit-animation-delay: 20s;
    animation-delay: 20s;
}

.slider_container {
    opacity: 0.5;
    filter: alpha(opacity=50);
}  
    
  
.updown{ margin-top: 2rem;
        font-size:1.5rem;}



.wrapper.style10 {
    background-color: #000;
    color: #bfbfbf;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    position: relative;
    background-image: url(images/hololive_chat.jpg);
}
.wrapper.style10{
    animation: lol ease 3s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
}
.wrapper.style10 input,
.wrapper.style10 select,
.wrapper.style10 textarea  {
    color: #ffffff;
}
.wrapper.style10 a {
    color: #0084ff;
}
.wrapper.style10 strong,
.wrapper.style10 b {
    color: #ffffff;
}
.wrapper.style10 h1,
.wrapper.style10 h2,
.wrapper.style10 h3,
.wrapper.style10 h4,
.wrapper.style10 h5,
.wrapper.style10 h6 {
    color: #ffffff;
}
.wrapper.style10 ::-webkit-input-placeholder{
    color: #999999 !important;
}
.wrapper.style10 :-moz-placeholder {
    color: #999999 !important;
}
.wrapper.style10 ::-moz-placeholder {
    color: #999999 !important;
}
.wrapper.style10 :-ms-input-placeholder {
    color: #999999 !important;
}
.wrapper.style10 .formerize-placeholder {
    color: #999999 !important;
}
.wrapper.style10 header p {
    color: rgba(255, 255, 255, 0.65);
}
.wrapper.style10 .inner {
    position: relative;
    z-index: 2;
}
.wrapper.style10 p{
    text-transform: uppercase;
    font-size: 1.25rem;
    font-weight: 300;
    margin: 0 0 .5rem 0;
    padding: 0 0 1rem 0;
    letter-spacing: .25rem;
}
.wrapper.style10 p:after{
    content: '';
    position: absolute;
    margin: auto;
    right: 0;
    bottom: 0;
    left: 0;
    width: 50%;
    height: 1px;
    background-color: rgba(255, 255, 255, 0.5);
}
.wrapper.style10:before{
    -moz-transition: opacity 3s ease;
    -webkit-transition: opacity 3s ease;
    -ms-transition: opacity 3s ease;
    transition: opacity 3s ease;
    -moz-transition-delay: 1.25s;
    -webkit-transition-delay: 1.25s;
    -ms-transition-delay: 1.25s;
    transition-delay: 1.25s;
    content: '';
    display: block;
    background-color: rgba(0, 0, 0, 0.95);
    height: 100%;
    left: 0;
    opacity: 0.5;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
}
@media screen and (max-width: 980px) {
    .wrapper>.inner {
        width: 90%;
    }
    
    .wrapper.style10{
        background-attachment: scroll;
    }
}

























</style>
</head>

<body class="subpage">

    <!-- Header -->
    <header id="header">
        <div class="logo"><a href="index.html">Hololive</a></div>
        <a href="#menu">選單</a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">首頁</a></li>
            <li><a href="vtuber.html">藝人</a></li>
            <li><a href="history.html">歷史</a></li>
            <li><a href="news.html">新聞</a></li>

            <li><a href="music_player.html">音樂</a></li>
            <li><a href="list.html">表單</a></li>
            <li><a href="chat.php">留言</a></li>
        </ul>
    </nav>

    <!-- One -->
    <div class="style3background">

        <div>
            <section id="One" class="wrapper style10">

                <div class="inner animate__animated animate__fadeInUp animate__slow wow">
                    <header class="align-center">
                        <p>動手寫下你的偉人名言</p>
                        <h2>哈拉交流</h2>
                    </header>

                </div>

            </section>
        </div>

    </div>
    <!-- Two -->

	<div class="container">
		<h1 class="inner animate__animated animate__bounceInUp wow">留言版</h1>
		
         
    


        <span>
            <div class="word inner animate__animated animate__bounceInUp wow">
            

			<?php if(($_SESSION["id"])){?> 
                <div class="welcome"> 歡迎光臨 <?php echo $row2["name"]  ?></div>
        
               <a class="backto" href="chat.php">回上層</a>
				<a href="config.php?method=logout">登出</a>
				<a href="#container">新增留言</a>
			<?php }else{?>
				<a href="login.php">登入</a>
				<a href="signup.php">註冊</a>
			<?php }?>
            </div>
		</span>


        <div class="">
		<?php 
   

   
    
    

   echo "<table class='inner animate__animated animate__bounceInUp wow' width='800' align='center' cellspacing='3'>";
   

   
   while ($row = mysqli_fetch_assoc($result)){  echo "<tr>";
     echo "<td width='120' cellSpacing=0>
           <img class='headimg' src='images/".mt_rand(1, 43) . ".jpg'></td>";?>
   <td>
     <div class="card">
         <h4 class="card-header" ><?php echo $row['title'];?>
     
         </h4>

         
         <div class="card-body">
         <h5 class="card-title">暱稱：<?php echo $row["name"];?></h5>
             <h5 class="card-title">日期：<?php echo $row["date"];?></h5><br>
             <p class="card-text">
                 <?php echo $row["content"];?>
             </p>
         </div>
     </div>	</td>	 
     </tr><?php  
 }
  echo "</table>" ;



  mysqli_free_result($result);
  ?></div>

<?php $sql = "SELECT * FROM `reply_mes` WHERE reply_id = $id";
    $result = mysqli_query($con , $sql) or die('MySQL query error'); ?>
   
<?php
echo "<table width='800' align='center' cellspacing='3'>";



while ($row = mysqli_fetch_assoc($result)){  echo "<tr>";
 echo "<td width='120' cellSpacing=0>
       <img class='headimg' src='images/".mt_rand(1, 43) . ".jpg'></td>";?>
<td>
 <div class="card">
    

     
     <div class="card-body"> <?php if(@$_SESSION["id"]===$row["uid"]){?>
        
     <?php }?>    <?php if(@$_SESSION["id"]===$row["uid"]){?>
                <a href="mes_reply.php?method=del&id=<?php echo $row["id"]?>" class="btn btn-danger mybtn">刪除</a>
    
            <?php }?>
     <h5 class="card-title">暱稱：<?php echo $row["name"];?></h5>
         <h5 class="card-title">日期：<?php echo $row["date"];?></h5><br>
         <p class="card-text">
             <?php echo $row["content"];?>
         </p>
     </div>
 </div>	</td>	 
 </tr><?php  
}
echo "</table>" ;
 

mysqli_free_result($result);
?></div>

<?php
$sql = "SELECT * FROM `reply_mes` WHERE reply_id = $id";
    $result = mysqli_query($con , $sql) or die('MySQL query error');?>

<div class="container inner animate__animated animate__bounceInUp wow" id="container">
		<h1>新增留言</h1>
	
		<form role="form" name="myForm" action="mes_reply.php?method=add" method="post">
        <input type="hidden" name="reply_id" value="<?php echo $id ?>">
         
            <div class="form-group">
                <label for="name">暱稱</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
            </div>
            <div class="form-group">
                <label for="content">留言內容</label>
                <textarea class="form-control" id="content" maxlength="500" rows="3" placeholder="內容" name="content" value="<?php echo $row["content"]?>"></textarea>
            </div>
            <button type="button" id="btnroo" class="btn" onClick="check_data()">新增</button>
            <button type="reset" id="btnroo" class="btn">重新輸入</button>
        </form>
	</div>



   
    
    












<div class="slider_container ">

        <div>
            <img src="images/chat_5.jpg" class="bbackground " height="100%" width="100%" />
            <span class=" info"></span>
        </div>
        <div>
            <img src="images/chat_4.jpg" class="bbackground " height="100%" width="100%" />
            <span class="info"></span>
        </div>
        <div>
            <img src="images/chat_3.jpg" class="bbackground " height="100%" width="100%" />
            <span class="info"></span>
        </div>
        <div>
            <img src="images/chat_2.jpg" class="bbackground " height="100%" width="100%" />
            <span class="info"></span>
        </div>
        <div>
            <img src="images/chat_1.jpg" class="bbackground " height="100%" width="100%" />
            <span class="info"></span>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="container animate__animated animate__zoomInUp wow">
            <ul class="icons">
                <div class="logolol">
                    <li><a href="https://twitter.com/hololivetv" class="icon fa-twitter "><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/hololivetv/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.youtube.com/channel/UCJFZiqLMntJufDCHc6bQixg" class="icon fa-youtube"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.reddit.com/r/Hololive/" class="icon fa-reddit"><span class="label">Email</span></a></li>
                </div>
            </ul>
        </div>
        <div class="copyright animate__animated animate__zoomInUp wow">
            &copy; Young.
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>