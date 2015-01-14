<?php require ('inc/header.php'); ?>
<div class="hidden-xs col-sm-2" id="sidebar">
  <img class="sidebar-brand" src="img/logo.png" />
  <ul class="nav nav-pills nav-stacked">
    <?php require ('inc/nav-links.php'); ?>
  </ul><!--/.mav-->
  <div class="social-media">
    <a href="https://www.facebook.com/codenamelungonet" target="_blank" class="csmb-flat csmb-round facebook" data-toggle="tooltip" data-placement="top" title="Facbook"></a>
    <a href="https://plus.google.com/+CodenamelungoNet" target="_blank" class="csmb-flat csmb-round gplus" data-toggle="tooltip" data-placement="top" title="Google+"></a>
    <a href="https://git.sphere.ly/groups/codename-lungo" target="_blank" class="csmb-flat csmb-round git" data-toggle="tooltip" data-placement="top" title="GIT Repo's"></a>
    <a href="http://bit.ly/cnl-donate
" target="_blank" class="csmb-flat csmb-round paypal" data-toggle="tooltip" data-placement="top" title="Donate"></a>
    <a href="http://bit.ly/cnl-twitter" target="_blank" class="csmb-flat csmb-round twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></a>
  </div><!--/.social-media -->
</div><!--/#sidebar -->
    
<div id="content-wrapper">
  <div class="head-spacing"> </div>
  <div class="col-sm-12" id="header">
    <h3>Download<br/>
    <small>Want Codename Lungo? This is the place to be!</small></h3>
    <span class="separator"></span>
  </div><!--/#header -->
        
  <div class="col-sm-12" id="downloads">
    <div class="filter-panel">
      <button id="filter-reset" type="button" class="btn btn-primary">All Devices</button>
    	<div class="dropdown pull-left">
        <button type="button" class="btn btn-primary" id="vendor-menu" data-toggle="dropdown">
          Vendor
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="vendor-menu">
          <li><a class="filter" data-filter=".google">Google</a></li>
          <li><a class="filter" data-filter=".motorola">Motorola</a></li>
          <li><a class="filter" data-filter=".oneplus">OnePlus</a></li>
          <li><a class="filter" data-filter=".oppo">Oppo</a></li>
        </ul>
     </div><!---/.dropdown -->
     <div class="dropdown pull-left">
        <button type="button" class="btn btn-primary" id="type-menu" data-toggle="dropdown">
          Type
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="type-menu">
          <li><a class="filter" data-filter=".phone">Phone</a></li>
          <li><a class="filter" data-filter=".tablet">Tablet</a></li>
        </ul>
     </div><!--/.dropdown -->
     <div class="dropdown pull-left">
        <button type="button" class="btn btn-primary" id="type-menu" data-toggle="dropdown">
          ROM Version
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="type-menu">
          <li><a class="filter" data-filter=".cm11">CM11</a></li>
          <li><a class="filter" data-filter=".pa46">PA4.6</a></li>
        </ul>
     </div><!--/.dropdown -->
     <a id="filter-archive" href="http://bit.ly/cnlarchive" target="_blank" type="button" class="btn btn-primary">Archives</a>
    </div><!--/.filter-panel -->  
    <div class="row filter-content" id="devices">
      <li class="device google phone cm11 pa46">
      	<p class="name">Google Nexus 5
      	<br/><small>hammerhead</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/google-nexus-5/development/rom-codename-lungo-t2615861" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=11297" target="_blank" type="button" class="btn btn-primary"> Download</a>
        </div><!--/.btn-group -->  
      </li><!--/.device -->

      <li class="device google tablet cm11 pa46">
        <p class="name">Google Nexus 7 (Wi-Fi, 2013 version)
      	<br/><small>flo</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2462694" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=8303" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device google tablet cm11 pa46">
      	<p class="name">Google Nexus 7 (4G, 2013 version)
      	<br/><small>deb</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2517989" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=8303" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device google phone cm11 pa46">
      	<p class="name">Google Nexus 4
      	<br/><small>mako</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/nexus-4/development/rom-codename-lungo-t2272539" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=4927" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device google tablet cm11 pa46">
      	<p class="name">Google Nexus 7 (Wi-Fi, 2012 version)
      	<br/><small>grouper</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2027780" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=1744" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device google tablet cm11 pa46">
      	<p class="name">Google Nexus 7 (GSM, 2012 version)
      	<br/><small>tilapia</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2027780" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=1744" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device google tablet cm11 pa46">
      	<p class="name">Google Nexus 10
      	<br/><small>manta</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2355800" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=6113" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->
      
      <li class="device motorola phone cm11">
      	<p class="name">Motorola Moto G (4G)
      	<br/><small>peregrine</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/moto-g/4g-development/rom-codename-lungo-t2867100" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=12714" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li>

      <li class="device motorola phone cm11">
      	<p class="name">Motorola Moto X (Unified)
      	<br/><small>ghost</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/moto-x/development/rom-codename-lungo-t2887305" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=19409" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device motorola phone cm11">
      	<p class="name">Motorola Moto G
      	<br/><small>falcon</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2674669" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=12714" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->
      <li class="device oneplus phone cm11 pa46">
      	<p class="name">OnePlus One
      	<br/><small>bacon</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2789491" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=17046" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li>
      <li class="device oppo phone cm11 pa46">
      	<p class="name">Oppo Find 7 (A/S)
      	<br/><small>find7</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/find-7/find7-development/rom-codename-lungo-t2899762" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=17045" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device oppo phone cm11 pa46">
      	<p class="name">Oppo N1
      	<br/><small>n1</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2711335" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=12745" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->

      <li class="device oppo phone cm11 pa46">
      	<p class="name">Oppo Find 5
      	<br/><small>find5</small></p>
        <div class="btn-group pull-right">
          <a href="http://forum.xda-developers.com/showthread.php?t=2481875" target="_blank" type="button" class="btn btn-primary"> XDA Forum</a>
          <a href="https://www.androidfilehost.com/?w=files&flid=8647" target="_blank" type="button" class="btn btn-primary">Download</a>
        </div><!--/.btn-group -->
      </li><!--/.device -->
    </div><!--/.filter-content -->
  </div><!--/#downloads -->
</div><!-- /#content-wrapper -->
<?php require ('inc/footer.php'); ?>