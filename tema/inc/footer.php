<footer class="footer bg-light-3" id="page-footer" data-arts-footer-logo=primary>
	<div class="footer__container container-fluid">
		<!-- widgets upper area -->
		<div class="ftLogoArea">
			<img src="<?php echo URL;?>images/<?php echo $ayar["footer_logo"];?>" alt="<?php echo $ayar["site_title"];?>">
		</div>
		<div class="footer__area footer__area_upper pt-md-5 pt-sm-3 pt-2 pb-md-5 pb-sm-1 pb-0">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-lg-2 order-lg-1 footer__column">
							<section id="text-9" class="widget widget_nav_menu">
								<h2 class="widgettitle"><?php echo $blokRowdil["baslik1"]; ?></h2>
								<div class="menu-menu-footer-collezioni-container">
									<ul id="menu-menu-footer-collezioni" class="menu">
										<?php
											$url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
											$menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=1 ORDER BY menu_sira ASC ");
											if($menuQuery->rowCount()){
											$numb  = 0;
										foreach($menuQuery as $menuRow){ ?>
										<li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2065 bg-page-id-770">
											<a href="<?php echo $menuRow[$lehce."menu_href"]; ?>"><?php echo $menuRow[$lehce."menu_baslik"]; ?></a>
										</li>
										<?php $numb++; } } ?>
										
										
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-2 order-lg-2 footer__column">
							<section id="nav_menu-4" class="widget widget_nav_menu">
								<h2 class="widgettitle"><?php echo $blokRowdil["desc1"]; ?></h2>
								<div class="menu-menu-footer-collezioni-container">
									<ul id="menu-menu-footer-collezioni" class="menu">
										<?php
											$url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
											$menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=11 ORDER BY menu_sira ASC ");
											if($menuQuery->rowCount()){
											$numb  = 0;
										foreach($menuQuery as $menuRow){ ?>
										<li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2065 bg-page-id-770">
											<a href="<?php echo $menuRow[$lehce."menu_href"]; ?>"><?php echo $menuRow[$lehce."menu_baslik"]; ?></a>
										</li>
										<?php $numb++; } } ?>
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-2 order-lg-3 footer__column">
							<section id="nav_menu-4" class="widget widget_nav_menu">
								<h2 class="widgettitle"><?php echo $blokRowdil["baslik2"]; ?></h2>
								<div class="menu-menu-footer-collezioni-container">
									<ul id="menu-menu-footer-collezioni" class="menu">
										<?php
											$url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
											$menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=22 ORDER BY menu_sira ASC ");
											if($menuQuery->rowCount()){
											$numb  = 0;
										foreach($menuQuery as $menuRow){ ?>
										<li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2065 bg-page-id-770">
											<a href="<?php echo $menuRow[$lehce."menu_href"]; ?>"><?php echo $menuRow[$lehce."menu_baslik"]; ?></a>
										</li>
										<?php $numb++; } } ?>
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-2 order-lg-4 footer__column">
							<section id="nav_menu-4" class="widget widget_nav_menu">
								<h2 class="widgettitle"><?php echo $blokRowdil["desc2"]; ?></h2>
								<div class="menu-menu-footer-collezioni-container">
									<ul id="menu-menu-footer-collezioni" class="menu">
										<?php
																$url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
																$menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=33 ORDER BY menu_sira ASC ");
																if($menuQuery->rowCount()){
																$numb  = 0;
										foreach($menuQuery as $menuRow){ ?>
										<li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2065 bg-page-id-770">
											<a href="<?php echo $menuRow[$lehce."menu_href"]; ?>"><?php echo $menuRow[$lehce."menu_baslik"]; ?></a>
										</li>
										<?php $numb++; } } ?>
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-3 order-lg-5 footer__column">
							<section id="nav_menu-3" class="widget widget_nav_menu">
								<h2 class="widgettitle"><?php echo $blokRowdil["baslik3"]; ?></h2>
								<div class="menu-menu-footer-container">
									<ul id="menu-menu-footer" class="menu">
										<?php
																$url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
																$menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=44 ORDER BY menu_sira ASC ");
																if($menuQuery->rowCount()){
																$numb  = 0;
										foreach($menuQuery as $menuRow){ ?>
										<li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2065 bg-page-id-770">
											<a href="<?php echo $menuRow[$lehce."menu_href"]; ?>"><?php echo $menuRow[$lehce."menu_baslik"]; ?></a>
										</li>
										<?php $numb++; } } ?>
									</ul>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- - widgets upper area -->
		<div class="col-md-12  text-small text-center pt-5" style="color:white;"><?php echo $ayar["site_title"]; ?> Copyright © 2023 All Right Reserved.</div>
	</div>
</footer>