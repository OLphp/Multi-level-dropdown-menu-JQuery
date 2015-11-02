<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="text/css" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/lib_base.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery_menu.js"></script>
	<title>Document</title>
</head>
<body>
	<div class="container"> 
            <div id="mainmenu1" onmouseout='SelectLast()' align="center">
                  <a id='i_menu_page1.php' onmouseover='ResetAll(); lastElem = "page1.php"; this.className = "act"; gE("ipage1.php").className = "menu";' onmouseout='this.className = ""; gE("ipage1.php").className = "hidden"' href="#" class="act">Пример</a>
                  <a id='i_menu_page2.php' onmouseover='ResetAll(); lastElem = "page2.php"; this.className = "act"; gE("ipage2.php").className = "menu";' onmouseout='this.className = ""; gE("ipage2.php").className = "hidden"' href="#">Пример 1</a>
                  <a id='i_menu_page3.php' onmouseover='ResetAll(); lastElem = "page3.php"; this.className = "act"; gE("ipage3.php").className = "menu";' onmouseout='this.className = ""; gE("ipage3.php").className = "hidden"' href="#">Пример 2</a>
                  <a id='i_menu_page4.php' onmouseover='ResetAll(); lastElem = "page4.php"; this.className = "act"; gE("ipage4.php").className = "menu";' onmouseout='this.className = ""; gE("ipage4.php").className = "hidden"' href="#">Пример 3</a>
                  <a id='i_menu_page5.php' onmouseover='ResetAll(); lastElem = "page5.php"; this.className = "act"; gE("ipage5.php").className = "menu";' onmouseout='this.className = ""; gE("ipage5.php").className = "hidden"' href="#">Пример 4</a>
                  <a id='i_menu_page6.php' onmouseover='ResetAll(); lastElem = "page6.php"; this.className = "act"; gE("ipage6.php").className = "menu";' onmouseout='this.className = ""; gE("ipage6.php").className = "hidden"' href="#">Пример 5</a>
                  <a id='i_menu_page7.php' onmouseover='ResetAll(); lastElem = "page7.php"; this.className = "act"; gE("ipage7.php").className = "menu";' onmouseout='this.className = ""; gE("ipage7.php").className = "hidden"' href="#">Пример 6</a>
            </div>
		<div id='sub_menus' align="center">
			<ul class='menu' id="ipage1.php">
				<li class="menu_li back_no" onmouseover='ThirdLevelMenu(this, "menu_li1")' onmouseout='ResetSub();'>
					<a href="#" onmouseover='ResetSub();'>Пример</a>
                    <div class="thirdlevelmenu" style="width: 225px; display: none" id="menu_li1" onmouseout='ResetSub();'>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon partner"></div>
            					Пример
            				</a>
            			</div>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon pamm_system"></div>
            					Пример 1
            				</a>
            			</div>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon sell"></div>
            					Пример 2
            				</a>
            			</div>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon forex_options"></div>
            					Пример 3
            				</a>
            			</div>
				</li>
				<li class="back_no">
					<a href="#" onmouseover='ResetSub();'>Пример</a>
				</li>
				<li class="back_no">
					<a href="#" onmouseover='ResetSub();'>Пример 1</a>
				</li>
				<li class="back_no">
					<a href="#" onmouseover='ResetSub();'>Пример 2</a>
				</li>
				<li class="back_no">
					<a href="#" onmouseover='ResetSub();'>Пример 3</a>
				</li>
                  </ul>
            <ul class='hidden' id="ipage2.php">
            	<li class="back_no">
            		<a href="#" onmouseover='ResetSub();'>Пример 4</a>
            	</li>
            	<li class="back_no">
            		<a href="#" onmouseover='ResetSub();'>Пример 5</a>
            	</li>
            	
            </ul>
            <ul class='hidden' id="ipage3.php">
            	<li class="back_no">
            		<a href="#" onmouseover='ResetSub();'>Пример</a>
            	</li>
            	<li class="back_no">
            		<a href="#" onmouseover='ResetSub();'>Пример 1</a>
            	</li>
            	<li class="back_no">
            		<a href="#" onmouseover='ResetSub();'>Пример 2</a>
            	</li>
            	<li class="menu_li back_no" onmouseover='ThirdLevelMenu(this, "#")' onmouseout='ResetSub();'>
            		<a href="#">Конкурсы</a>
            		<div class="thirdlevelmenu" style="width: 225px; display: none" id="#" onmouseout='ResetSub();'>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon partner_instawallet"></div>
            					Пример
            				</a>
            			</div>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon pamm_system"></div>
            					Пример 2
            				</a>
            			</div>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon sell_signals_in_forexcopy"></div>
            					Пример 3
            				</a>
            			</div>
            			<div class="thirtd_point" style="float: left;">
            				<a class="three_a" href="#">
            					<div class="icon forex_options"></div>
            					Пример 4
            				</a>
            			</div>
            		</div>
            	 </li>
            </ul>
            <ul class='hidden' id="ipage4.php">
            	 <li class="back_no"onmouseout='ResetSub();'>
            		<a href="#">Пример 1</a>
            	</li>
            </ul>
            <ul class='hidden' id="ipage5.php">
            	 <li class="back_no">
            		<a href="#" onmouseover='ResetSub();'>Пример 2</a>
            	</li>
            </ul>
            <ul class='hidden' id="ipage6.php">
            	 <li class="back_no">
            		<a href="#" onmouseover='ResetSub();'>Пример 3</a>
            	</li>
            </ul>
          <ul class='hidden' id="ipage7.php">
          	<!-- <li class="back_no">
          		<a href="#" onmouseover='ResetSub();'>$500 Affiliate Reward!</a>
          	</li>-->
          </ul>
    </div>
</div>

</body>
</html>
