<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
    <div id="bgStretch" class="bgimagedefault">	
		
		
	</div>
	
		
	
    <div id="glob">
        <div class="spinner"></div>
        <div id="leftPanel">
		<header>
                    <h1><a href="#!/page_home">North Beach Cricket Club</a></h1>
        </header>
            <div>
			

                <!-- MENU -->
                <nav class="menu">
                    <ul id="menu">
                        <li class="with_ul"><a href="#!/page_home" onclick="document.getElementById('bgStretch').className = ' bgimagehome';"><span>Home</span><span>Home</span></a>
                            <ul class="submenu_1">
                                <li><a href="#!/page_more">Lorem ipsum</a>
                                    <ul class="submenu_2">
                                        <li><a href="#!/page_more">Lorem ipsum</a></li>                                
                                        <li><a href="#!/page_more">Dolor sit amet</a></li>               				    
                                        <li class="last"><a href="#!/page_more">Conse ctetur</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="#!/page_more">Dolor sit amet</a></li>               				    
                                <li><a href="#!/page_more">Conse ctetur</a></li>               				    
                                <li><a href="#!/page_more">Adipisicing</a></li>
                                <li class="last"><a href="#!/page_more">Eiusmod</a></li>
               				</ul>
                        </li>
                        <li><a href="#!/page_about" onclick="document.getElementById('bgStretch').className = ' bgimageabout';"><span>About</span><span>About</span></a></li>
                        <li><a href="#!/page_cricket_news" onclick="document.getElementById('bgStretch').className = ' bgimagecricket';"><span>Cricket News</span><span>Cricket News</span></a></li>
                        <li><a href="#!/page_stats_scores" onclick="document.getElementById('bgStretch').className = ' bgimagestats';"><span>Stats & scores</span><span>Stats & scores</span></a></li>
                        <li><a href="#!/page_videos" onclick="document.getElementById('bgStretch').className = ' bgimagevideos';"><span>Videos</span><span>Videos</span></a></li>
                        <li class="last"><a href="#!/page_mail" onclick="document.getElementById('bgStretch').className = ' bgimagecontacts';"><span>Contacts</span><span>Contacts</span></a></li>
                	</ul>
           	    </nav>
                <!-- END MENU -->
                <!-- FOOTER -->
                <footer>            
                    <p>Cricket Club&copy; 2013<br><a href="#!/page_privacy">Privacy Policy</a></p>
                    <!-- {%FOOTER_LINK} -->           
                </footer>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- CONTENT -->
        <div class="splash">
            <div class="container_12">
                <div class="grid_11 prefix_1 alpha">
                    <ul class="slogans">
                        <li>
                            <p>Life is an</p>
                            <p>elaborate metaphor</p>
                            <p>for cricket</p>
                            <p>Lorem ipsum dolor sit amet conse ctetur</p>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor in- cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.<a href="#!/page_more" class="readMore2"></a></p>
                        </li>
                        <li>
                            <p>Cricket</p>
                            <p class="fontStyle1">civilises people</p>
                            <p></p>
                            <p>Lorem ipsum dolor sit amet conse ctetur</p>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor in- cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.<a href="#!/page_more" class="readMore2"></a></p>
                        </li>
                        <li>
                            <p>The greatest</p>
                            <p>game that the wit of</p>
                            <p class="fontStyle2">man has yet devised</p>
                            <p>Lorem ipsum dolor sit amet conse ctetur</p>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor in- cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.<a href="#!/page_more" class="readMore2"></a></p>
                        </li>
                    </ul>
                    <div class="pagin">
                        <ul>
                            <li class="active"><a href="<?php echo $this->getThemePath();?>/images/bg_pic1.jpg"><span></span></a></li>
                            <li><a href="<?php echo $this->getThemePath();?>/images/bg_pic2.jpg"><span></span></a></li>
                            <li><a href="<?php echo $this->getThemePath();?>/images/bg_pic3.jpg"><span></span></a></li>               
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section id="content">
            <div id="topShadow"></div>
            <div id="botShadow"></div>
            <ul>           
                <li id="page_home"></li>
                <li id="page_about">
                    <div class="container_12">
                        <div class="grid_4 alpha">
                            <div class="wrapper">
								<?php
									$areaAboutSection1 = new Area('About Section 1');
									$areaAboutSection1->display($c);
								?>
                                
                                <p><a href="#!/page_more" class="readMore">more</a></p>
                            </div>
                        </div>
                        <div class="grid_4">
                            <div class="wrapper">
                                <h2>about</h2>
                                <hr>
                                <figure class="mar1"><img src="<?php echo $this->getThemePath() ?>/images/page2_pic2.jpg" alt></figure>
                                <hr>
                                <h3 class="pad2">Ipsum dolor sit amet conse ctetur adipisicing eli.</h3>
                                <p class="pad6">Lorem ipsum dolor sit amet conse ctetur adipis- icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <p class="pad4"> exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate veli.</p>
                                <p><a href="#!/page_more" class="readMore">more</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="page_cricket_news">
                    <div class="container_12">
                        <div class="grid_8 alpha">
                            <div class="wrapper">
                                <h2>Cricket News</h2>
                                <hr>
                                <h3 class="pad5">Lorem ipsum dolor sit amet conse ctetur adipisicing eli. Fusce euismod con- sequat ante. Lorem ipsum dolor sit amet, consec.</h3>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe.</p>
                                <ul class="list1">
                                    <li>
                                        <figure><img src="<?php echo $this->getThemePath();?>/images/page3_pic1.jpg" alt></figure>
                                        <h3>25.07.2012 - sit amet conse ctetur adipis.</h3>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sters aliqua. Ut enim ad minim veniam.</p>
                                        <p><a href="#!/page_more" class="readMore">more</a></p>
                                    </li>
                                    <li>
                                        <figure><img src="<?php echo $this->getThemePath();?>/images/page3_pic2.jpg" alt></figure>
                                        <h3>25.07.2012 - sit amet conse ctetur adipis.</h3>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sters aliqua. Ut enim ad minim veniam.</p>
                                        <p><a href="#!/page_more" class="readMore">more</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="page_stats_scores">
                    <div class="container_12">
                        <div class="grid_8 alpha">
                            <div class="rel">
                                <h2>Schedule</h2>
                                <hr>
                                <div class="grid_4 alpha">
                                    <div class="mSlider">
                                        <a href="#" class="prev"><span></span></a>
                                        <a href="#" class="next"><span></span></a>
                                        <ul>
                                            <li><h3>august 2012</h3></li>
                                            <li><h3>sept 2012</h3></li>
                                            <li><h3>nov 2012</h3></li>
                                            <li><h3>oct 2012</h3></li>
                                            <li><h3>dec 2012</h3></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid_4 omega">
                                    <div class="rel">
                                        <form id="form2">
                                            <div class="rel">
                                                <select class="select_1" name="select1">
                                                    <option value="opt1">Select Team</option>
                                                    <option value="opt1">Team1</option>
                                                    <option value="opt1">Team2</option>
                                                    <option value="opt1">Team3</option>
                                                    <option value="opt1">Team4</option>
                                                    <option value="opt1">Team5</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- calendar Slider -->
                                <ul class="calSlider">
                                    <li>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td><p>Monday</p></td>
                                                    <td><p>Tuesday</p></td>
                                                    <td><p>Wednesday</p></td>
                                                    <td><p>Thursday</p></td>
                                                    <td><p>Friday</p></td>
                                                    <td><p>Saturday</p></td>
                                                    <td class="last"><p>Sunday</p></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span>1</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="empty"><span>2</span><p></p></td>
                                                    <td><span>3</span><p>Adipisicing W 4-2</p></td>
                                                    <td><span>4</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="empty"><span>5</span><p></p></td>
                                                    <td><span>6</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="last empty"><span>7</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>8</span><p></p></td>
                                                    <td><span>9</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>10</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="empty"><span>11</span><p></p></td>
                                                    <td><span>12</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>13</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="last"><span>14</span><p>Adipisicing 7:05 pm </p></td>
                                                </tr>
                                                <tr>
                                                    <td><span>15</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td><span>16</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="empty"><span>17</span><p></p></td>
                                                    <td><span>18</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>19</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>20</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="last empty"><span>21</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    <td><span>22</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>23</span><p></p></td>
                                                    <td><span>24</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>25</span><p></p></td>
                                                    <td><span>26</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td><span>27</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="last"><span>28</span><p>Adipisicing 6:30 pm</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>29</span><p></p></td>
                                                    <td><span>30</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td class="empty"><span>31</span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="last empty"><span></span><p></p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td><p>Monday</p></td>
                                                    <td><p>Tuesday</p></td>
                                                    <td><p>Wednesday</p></td>
                                                    <td><p>Thursday</p></td>
                                                    <td><p>Friday</p></td>
                                                    <td><p>Saturday</p></td>
                                                    <td class="last"><p>Sunday</p></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td><span>1</span><p>Adipisicing W 4-2</p></td>
                                                    <td><span>2</span><p>Adipisicing W 4-2</p></td>
                                                    <td><span>3</span><p>Adipisicing W 4-2</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>4</span><p></p></td>
                                                    <td><span>5</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>6</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="empty"><span>7</span><p></p></td>
                                                    <td><span>8</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>9</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="last"><span>10</span><p>Adipisicing 7:05 pm </p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>11</span><p></p></td>
                                                    <td><span>12</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>13</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>14</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td><span>15</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>16</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="last empty"><span>17</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td><span>18</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td><span>19</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td><span>20</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>21</span><p></p></td>
                                                    <td><span>22</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>23</span><p></p></td>
                                                    <td class="last"><span>24</span><p>Adipisicing 6:30 pm</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>25</span><p></p></td>
                                                    <td class="empty"><span>26</span><p></p></td>
                                                    <td class="empty"><span>27</span><p></p></td>
                                                    <td class="empty"><span>28</span><p></p></td>
                                                    <td class="empty"><span>29</span><p></p></td>
                                                    <td><span>30</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td class="last empty"><span></span><p></p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td><p>Monday</p></td>
                                                    <td><p>Tuesday</p></td>
                                                    <td><p>Wednesday</p></td>
                                                    <td><p>Thursday</p></td>
                                                    <td><p>Friday</p></td>
                                                    <td><p>Saturday</p></td>
                                                    <td class="last"><p>Sunday</p></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span>1</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="empty"><span>2</span><p></p></td>
                                                    <td><span>3</span><p>Adipisicing W 4-2</p></td>
                                                    <td><span>4</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="empty"><span>5</span><p></p></td>
                                                    <td><span>6</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="last empty"><span>7</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>8</span><p></p></td>
                                                    <td><span>9</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>10</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="empty"><span>11</span><p></p></td>
                                                    <td><span>12</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>13</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="last"><span>14</span><p>Adipisicing 7:05 pm </p></td>
                                                </tr>
                                                <tr>
                                                    <td><span>15</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td><span>16</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="empty"><span>17</span><p></p></td>
                                                    <td><span>18</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>19</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>20</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="last empty"><span>21</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    <td><span>22</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>23</span><p></p></td>
                                                    <td><span>24</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>25</span><p></p></td>
                                                    <td><span>26</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td><span>27</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="last"><span>28</span><p>Adipisicing 6:30 pm</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>29</span><p></p></td>
                                                    <td><span>30</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td class="empty"><span>31</span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="last empty"><span></span><p></p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td><p>Monday</p></td>
                                                    <td><p>Tuesday</p></td>
                                                    <td><p>Wednesday</p></td>
                                                    <td><p>Thursday</p></td>
                                                    <td><p>Friday</p></td>
                                                    <td><p>Saturday</p></td>
                                                    <td class="last"><p>Sunday</p></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td><span>1</span><p>Adipisicing W 4-2</p></td>
                                                    <td><span>2</span><p>Adipisicing W 4-2</p></td>
                                                    <td><span>3</span><p>Adipisicing W 4-2</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>4</span><p></p></td>
                                                    <td><span>5</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>6</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="empty"><span>7</span><p></p></td>
                                                    <td><span>8</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>9</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="last"><span>10</span><p>Adipisicing 7:05 pm </p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>11</span><p></p></td>
                                                    <td><span>12</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>13</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>14</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td><span>15</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>16</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="last empty"><span>17</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td><span>18</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td><span>19</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td><span>20</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>21</span><p></p></td>
                                                    <td><span>22</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>23</span><p></p></td>
                                                    <td class="last"><span>24</span><p>Adipisicing 6:30 pm</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>25</span><p></p></td>
                                                    <td class="empty"><span>26</span><p></p></td>
                                                    <td class="empty"><span>27</span><p></p></td>
                                                    <td class="empty"><span>28</span><p></p></td>
                                                    <td class="empty"><span>29</span><p></p></td>
                                                    <td><span>30</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td class="last empty"><span></span><p></p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td><p>Monday</p></td>
                                                    <td><p>Tuesday</p></td>
                                                    <td><p>Wednesday</p></td>
                                                    <td><p>Thursday</p></td>
                                                    <td><p>Friday</p></td>
                                                    <td><p>Saturday</p></td>
                                                    <td class="last"><p>Sunday</p></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span>1</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="empty"><span>2</span><p></p></td>
                                                    <td><span>3</span><p>Adipisicing W 4-2</p></td>
                                                    <td><span>4</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="empty"><span>5</span><p></p></td>
                                                    <td><span>6</span><p>Adipisicing W 4-2</p></td>
                                                    <td class="last empty"><span>7</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>8</span><p></p></td>
                                                    <td><span>9</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>10</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="empty"><span>11</span><p></p></td>
                                                    <td><span>12</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td><span>13</span><p>Adipisicing 7:05 pm</p></td>
                                                    <td class="last"><span>14</span><p>Adipisicing 7:05 pm </p></td>
                                                </tr>
                                                <tr>
                                                    <td><span>15</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td><span>16</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="empty"><span>17</span><p></p></td>
                                                    <td><span>18</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>19</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td><span>20</span><p>Adipisicing 6:05 pm</p></td>
                                                    <td class="last empty"><span>21</span><p></p></td>
                                                </tr>
                                                <tr>
                                                    <td><span>22</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>23</span><p></p></td>
                                                    <td><span>24</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="empty"><span>25</span><p></p></td>
                                                    <td><span>26</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td><span>27</span><p>Adipisicing 6:30 pm</p></td>
                                                    <td class="last"><span>28</span><p>Adipisicing 6:30 pm</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="empty"><span>29</span><p></p></td>
                                                    <td><span>30</span><p>Adipisicing 6:05 pm </p></td>
                                                    <td class="empty"><span>31</span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="empty"><span></span><p></p></td>
                                                    <td class="last empty"><span></span><p></p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                                 <!-- end calendar Slider -->
                            </div>
                        </div>
                    </div>
                </li>
                <li id="page_videos">
                    <div class="container_12">
                        <div class="grid_8 alpha">
                            <div class="wrapper">
                                <h2>Videos</h2>
                                <hr>
								<?php
									$areaVideos = new Area('Videos');
									$areaVideos->display($c);
								?>
                                <ul class="list2">
                                    <li>
                                        <a href="http://player.vimeo.com/video/37582150?title=0&amp;byline=0&amp;portrait=0&amp;color=aa9d85" title=""><img src="<?php echo $this->getThemePath();?>/images/page5_pic1.jpg" alt><span></span></a>
                                        <h3>Sit amet conse ctetur adipi lroe.</h3>
                                    </li>
                                    <li class="right">
                                        <a href="http://player.vimeo.com/video/37582150?title=0&amp;byline=0&amp;portrait=0&amp;color=aa9d85" title=""><img src="<?php echo $this->getThemePath();?>/images/page5_pic2.jpg" alt><span></span></a>
                                        <h3>Sit amet conse ctetur adipi lroe.</h3>
                                    </li>
                                    <li>
                                        <a href="http://player.vimeo.com/video/37582150?title=0&amp;byline=0&amp;portrait=0&amp;color=aa9d85" title=""><img src="<?php echo $this->getThemePath();?>/images/page5_pic3.jpg" alt><span></span></a>
                                        <h3>Sit amet conse ctetur adipi lroe.</h3>
                                    </li>
                                    <li class="right">
                                        <a href="http://player.vimeo.com/video/37582150?title=0&amp;byline=0&amp;portrait=0&amp;color=aa9d85" title=""><img src="<?php echo $this->getThemePath();?>/images/page5_pic4.jpg" alt><span></span></a>
                                        <h3>Sit amet conse ctetur adipi lroe.</h3>
                                    </li>
                                    <li>
                                        <a href="http://player.vimeo.com/video/37582150?title=0&amp;byline=0&amp;portrait=0&amp;color=aa9d85" title=""><img src="<?php echo $this->getThemePath();?>/images/page5_pic5.jpg" alt><span></span></a>
                                        <h3>Sit amet conse ctetur adipi lroe.</h3>
                                    </li>
                                    <li class="right">
                                        <a href="http://player.vimeo.com/video/37582150?title=0&amp;byline=0&amp;portrait=0&amp;color=aa9d85" title=""><img src="<?php echo $this->getThemePath();?>/images/page5_pic6.jpg" alt><span></span></a>
                                        <h3>Sit amet conse ctetur adipi lroe.</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="page_mail">
                    <div class="container_12">
                        <div class="grid_4 alpha">
                            <div class="wrapper">
                                <h2><?php
									$areaOurAddressHeader = new Area('Our Address Header');
									$areaOurAddressHeader->display($c);
								?></h2>
                                <hr>
                                
								<?php
									$areaOurAddress = new Area('Our Address');
									$areaOurAddress->display($c);
								?>
								
                                
                            </div>
                        </div>
                        <div class="grid_4">
                            <div class="wrapper">
                                <h2><?php
									$areaGetInTouch = new Area('Get In Touch');
									$areaGetInTouch->display($c);
								?></h2>
                                <hr>
                                <form id="form1">
                                  <div class="success"> Contact form submitted!<br>We will be in touch soon.</div>
                                  <fieldset>
                                		<label class="name">
                                          <span class="name">Name:</span>
                                		  <input type="text" value="">
                                		  <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>
                                        </label>
                                        <label class="email">
                                          <span class="name">E-mail:</span>
                                		  <input type="email" value="">
                                		  <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>
                                        </label>
                                        <label class="phone">
                                          <span class="name">Phone:</span>
                                          <input type="tel" value="">
                                		  <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
                                        </label>
                                		<label class="message">
                                		  <span class="name">Message:</span>
                                          <textarea></textarea>
                                		  <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
                                        </label>
                                	<br class="clear">
                                	<div class="btns"><p><a href="#" class="readMore" data-type="reset">Clear</a><a href="#" class="readMore" data-type="submit">submit</a></p></div>
                                  </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="page_privacy">
                    <div class="container_12">
                        <div class="grid_8 alpha">
                            <div class="wrapper">
                                <h2>privacy policy</h2>
                                <hr>
                                <p class="pad2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <p>Sum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <p>Sum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p class="pad2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <p>Sum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p><a href="#" class="color1 und">privacy@demolink.org</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="page_more">
                    <div class="container_12">
                        <div class="grid_8 alpha">
                            <div class="wrapper">
                                <h2>Lorem ipsum</h2>
                                <hr>
                                <p class="pad2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <p>Sum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <p>Sum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p class="pad2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <p>Sum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>   
        </section>
        <!-- END CONTENT -->
    </div>

<?php  $this->inc('elements/footer.php'); ?>