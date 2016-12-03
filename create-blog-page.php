<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<!----------------------------------------------------------------------------------------------------------------------------------------																													
                                                                                                           ,---,          
                 ,----..                     ,----..                                                    ,`--.' |          
  ,----..       /   /   \     ,----..       /   /   \                                                   |   :  :          
 /   /   \     /   .     :   /   /   \     /   .     :                                                  '   '  ;          
|   :     :   .   /   ;.  \ |   :     :   .   /   ;.  \                ,---.     __  ,-.          ,--,  |   |  |          
.   |  ;. /  .   ;   /  ` ; .   |  ;. /  .   ;   /  ` ;   ,----._,.   '   ,'\  ,' ,'/ /|        ,'_ /|  '   :  ;          
.   ; /--`   ;   |  ; \ ; | .   ; /--`   ;   |  ; \ ; |  /   /  ' /  /   /   | '  | |' |   .--. |  | :  |   |  '          
;   | ;  __  |   :  | ; | ' ;   | ;  __  |   :  | ; | ' |   :     | .   ; ,. : |  |   ,' ,'_ /| :  . |  '   :  |          
|   : |.' .' .   |  ' ' ' : |   : |.' .' .   |  ' ' ' : |   | .\  . '   | |: : '  :  /   |  ' | |  . .  ;   |  ;          
.   | '_.' : '   ;  \; /  | .   | '_.' : '   ;  \; /  | .   ; ';  | '   | .; : |  | '    |  | ' |  | |  `---'. |          
'   ; : \  |  \   \  ',  /  '   ; : \  |  \   \  ',  /  '   .   . | |   :    | ;  : |    :  | : ;  ; |   `--..`;          
'   | '/  .'   ;   :    /   '   | '/  .'   ;   :    /    `---`-'| |  \   \  /  |  , ;    '  :  `--'   \ .--,_             
|   :    /      \   \ .'    |   :    /      \   \ .'     .'__/\_: |   `----'    ---'     :  ,      .-./ |    |`.          
 \   \ .'        `---`       \   \ .'        `---`       |   :    :                       `--`----'     `-- -`, ;         
  `---`                       `---`                       \   \  /                                        '---`"          
                                                           `--`-'                                                         
 __                        __     __  __  __                                      __       ______                   __  __                     
|  \                      |  \   |  \|  \|  \                                    |  \     /      \                 |  \|  \                    
| $$____   __    __       | $$   | $$ \$$| $$____    ______   ______   _______  _| $$_   |  $$$$$$\  ______    ____| $$ \$$ _______    ______  
| $$    \ |  \  |  \      | $$   | $$|  \| $$    \  /      \ |      \ |       \|   $$ \  | $$   \$$ /      \  /      $$|  \|       \  /      \ 
| $$$$$$$\| $$  | $$       \$$\ /  $$| $$| $$$$$$$\|  $$$$$$\ \$$$$$$\| $$$$$$$\\$$$$$$  | $$      |  $$$$$$\|  $$$$$$$| $$| $$$$$$$\|  $$$$$$\
| $$  | $$| $$  | $$        \$$\  $$ | $$| $$  | $$| $$   \$$/      $$| $$  | $$ | $$ __ | $$   __ | $$  | $$| $$  | $$| $$| $$  | $$| $$  | $$
| $$__/ $$| $$__/ $$         \$$ $$  | $$| $$__/ $$| $$     |  $$$$$$$| $$  | $$ | $$|  \| $$__/  \| $$__/ $$| $$__| $$| $$| $$  | $$| $$__| $$
| $$    $$ \$$    $$          \$$$   | $$| $$    $$| $$      \$$    $$| $$  | $$  \$$  $$ \$$    $$ \$$    $$ \$$    $$| $$| $$  | $$ \$$    $$
 \$$$$$$$  _\$$$$$$$           \$     \$$ \$$$$$$$  \$$       \$$$$$$$ \$$   \$$   \$$$$   \$$$$$$   \$$$$$$   \$$$$$$$ \$$ \$$   \$$ _\$$$$$$$
          |  \__| $$                                                                                                                 |  \__| $$
           \$$    $$                                                                                                                  \$$    $$
            \$$$$$$                                                                                                                    \$$$$$$ 													   
														   
Happy to see you here! @coder.
I, Vikrant Banerjee is the creator of the website if you want to ask or suggest me something contact me @ -> banerjeevikrant@gogogoru.com
------------------------------------------------------------------------------------------------------------------------------------------>

<?php $blogName = $_GET["blog"]; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo "Blog "; echo file_get_contents('fun-blogs/facts/'.$blogName.'.topic'); ?></title>
<?php include "blogpage_head.php"; ?>
</head>
<body id="top">
<?php include "blogpage_top.php"; ?>
<div class="wrapper">
  <div class="container">
    		<h1><?php echo file_get_contents('fun-blogs/facts/'.$blogName.'.topic'); ?></h1>
		<?php echo '<img src = "fun-blogs/images/'.$blogName.'.jpg" />'."\n"; ?>
		<?php echo file_get_contents('fun-blogs/facts/'.$blogName.'.body'); ?>
  </div>
  
<div class = "container">
  <a href="https://twitter.com/VBGOGOgoru" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @VBGOGOgoru</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div class="fb-like" data-href="https://www.facebook.com/gogogoru/?ref=hl" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
</div>

  <div class = "container">
	  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<?php echo '<div class="fb-comments" data-href="http://gogogoru.com/v2/blog/fun-blogs/facts/create-blog-page.php?blog='.
		   $blogName.'" data-numposts="5"></div>'; ?>
</div>
</div>

<div class="wrapper">
  <div id="adblock">
    
    <br class="clear" />
  </div>
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="#">Environment &raquo;</a></h2>
      <img src="fun-blogs/images/Globe_of_language.png" width = "100px" height = "100px" alt="" />
      <p><strong><a href="#">How did Languages Originated?</a></strong></p>
      <p>There are estimated to be around 6,500 spoken languages in the world today. But more than half the world's population uses only 20 of them and a language dies out every 14 days. The most spoken language is Mandarin, with 955 million native speakers, followed by Spanish...<a href = "#" target = "blank">Read More</a></p>
    </div>
    <div class="fl_right">
      <h2><a href="#">Technology &raquo;</a></h2>
      <img src="fun-blogs/images/body.jpg" width = "100px" height = "100px" alt="" />
      <p><strong><a href="#">Amazing things about your Body</a></strong></p>
      <p>Approximately 1.26 billion cells in your body will die and be replaced with new cells, in the time it takes to watch this video. Your body also makes a brand new skeleton every three months and a completely new layer of skin every month. Your body is...<a href = "#" target = "blank">Read More</a></p>
    </div>
    <br class="clear" />
    <div class="fl_left">
      <h2><a href="#">Entertainment &raquo;</a></h2>
      <img src="fun-blogs/images/taj-mahal.jpg" width = "100px" height = "100px" alt="" />
      <p><strong><a href="#">What might be the price of one of the great wonders?!!</a></strong></p>
      <p>When you are calculating costs of something with historical or antique value, the cost of construction is not that important. Monalisa by Leonardo da Vinci is currently valued at around $780 Million, The cost of making it however was negligible...<a href = "#" target = "_blank">Read More</a></p>
    </div>
    <div class="fl_right">
      <h2><a href="#">Fun Facts &raquo;</a></h2>
      <img src="fun-blogs/images/youtube.png" width = "100px" height = "100px"  alt="" />
      <p><strong><a href="#">Fun Facts about Youtube</a></strong></p>
      <p>YouTube is the internet's second largest search engine and has over one billion active monthly users. Over 100 hours of video are uploaded to YouTube every minute and more content is uploaded in 60 days than all 3 major U.S. TV Networks generated in the last 60 years...<a href = "#" target = "_blank">Read More</a></p>
    </div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2>Other Interesting Topics!</h2>
        <ul>
          <li><img src="fun-blogs/images/opera-singer.png" width = "190" height = "130" alt="" />
            <h2>Can a Opera Singer shatter a wine glass?</h2>
            <p>Have you ever done this? The sound being emitted from the glass...</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li><img src="fun-blogs/images/ramesh-babu.jpg" width = "190" height = "130" alt="" />
            <h2>Barber owns Rolls Royce</h2>
            <p>An Indian Millionare Barber owns a Rolls Royce! Listen to his story..</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last"><img src="fun-blogs/images/deadly-spider.jpg" width = "190" height = "130" alt="" />
            <h2>Deadliest Animals</h2>
            <p>They are the worlds largest hornets, at 5 times the size of the european honey bee, they are nearly as big as...</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <div class="column">
     <?php  include "adblock.php" ?>
    </div>
    <br class="clear" />
  </div>
</div>

<?php include "blogpage_bot.php"; ?>
</body>
</html>
		