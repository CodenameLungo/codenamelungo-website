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
    <h3>Wiki<br/>
      <small>This is the Codename Lungo Wiki here you will find the answers to the most asked questions.</small></h3>
      <span class="separator"></span>
    </div><!--/#header -->

    <div class="col-sm-12" id="wiki">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#installguide">Installation Guide</a></h4>
          </div>
          <div id="installguide" class="panel-collapse collapse in">
            <div class="panel-body">
              <ol>
                <li>Make sure you have the latest CWM for your device</li>
                <li>Download build for your device, place on SD card</li>
                <li>Reboot into recovery</li>
                <li>do a Wipe/factory reset.</li>
                <li>go to the Mounts and Storage menu and do a format /system</li>
                <li>Choose install ZIP from sdcard > Choose ZIP from external sdcard</li>
                <li>Search the downloaded build and select it</li>
                <li>Select YES!</li>
                <li>If you are S-ON flash boot.img via adb fastboot with 'fastboot flash boot boot.img'</li>
                <li>Reboot</li>
                <li><strong>DO NOT CONNECT WIFI YET!</strong></li>
                <li>Flash Google Apps</li>
                <li>Reboot</li>
                <li><strong>NOW IT'S SAFE TO CONNECT WIFI</strong></li>
                <li>Not Required: Flash Add-on Package</li>
                <li>Reboot</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#developermenu"> How to get the “Developer options” and “Performance” menus in CM 10.2+? </a></h4>
          </div>
          <div id="developermenu" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Initially, the ”Developer options” and “Performance” menus are hidden in CyanogenMod 10.1+</p>
              <ol>
                <li>Go to Settings -> About phone</li>
                <li>Scroll to the bottom of the screen</li>
                <li>Press the “Build number” section 7 times.</li>
                <li>You will see the message "You are now Developer".</li>
                <li>The two menu items will become visible!</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#nepowerwidget"> How to get the CM10.2 Power Widget in the Notification Drawer CM11+ </a></h4>
          </div>
          <div id="nepowerwidget" class="panel-collapse collapse">
            <div class="panel-body">
              <ol>
                <li>Go to Settings -> Interface</li>
                <li>Press on Notification drawer.</li>
                <li>Press on Show in drawer.</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#asserterror"> How-to fix the 'assert failed' error in CWM? (Error 7) </a></h4>
          </div>
          <div id="asserterror" class="panel-collapse collapse">
            <div class="panel-body">
              <p>It can happen you will get an assert failed error in CWM. You can fix it by following these steps</p>
              <ol>
                <li>Download the ROM</li>
                <li>Open the zip with 7-zip</li>
                <li>Go to META-INF/com/google/android/</li>
                <li>Drag the updater-sript outside the zip</li>
                <li>Open updater-script in a text editor.
                  <li>Delete the fist line beginning with 'assert'</li>
                  <li>Save the file</li>
                  <li>Drag the updater-script back into the zip and say 'yes'</li>
                  <li>Flash the zip on your device</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#powersettings"> Optimal Power Saving Settings </a></h4>
            </div><!-- /.panel-heading -->
            <div id="powersettings" class="panel-collapse collapse">
              <div class="panel-body">
                <ol>
                  <li>Go to Settings > Performance</li>
                  <li>Set CPU Govenor to ONDEMAND or BADASS</li>
                  <li>set MIN CPU freq to 384MHz</li>
                  <li>set MAX CPU freq. to 1188, 1242 MHz or lower</li>
                  <li>set I/O Scheduler to NOOP or DEADLINE for more info check <a href="http://forum.xda-developers.com/showthread.php?t=1989824" target="_blank">here</a></li>
                  <li>set all settings to "set on boot".</li>
                </ol>
              </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse -->
          </div><!-- /.panel -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#screenoffanimation"> How-to disable Screen-off animation? </a></h4>
            </div><!-- /.panel-heading -->
            <div id="screenoffanimation" class="panel-collapse collapse">
              <div class="panel-body">
                <ol>
                  <li>Go to Settings > Display</li>
                  <li>Uncheck Screen-off animation</li>
                </ol>
              </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse -->
          </div><!-- /.panel -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#pa-dynasettings"> How-to Edit or Disable Some Paranoid Android Features? </a></h4>
            </div><!-- /.panel-heading -->
            <div id="pa-dynasettings" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Paranoid Android has some Dynamic Settings that aren't visable in the settings menu but also have settings with the help of this list you can read how to eit or disable this settings</p>
                <ul>
                  <li><a href="http://forum.xda-developers.com/showpost.php?p=48801767&postcount=10" target="_blank"> Immersive Mode</a></li>
                  <li><a href="http://forum.xda-developers.com/showpost.php?p=50793238&postcount=27" target="_blank"> Pie controls (activated by turning on immersive mode)</a></li>
                  <li><a href="http://forum.xda-developers.com/showpost.php?p=48801887&postcount=11" target="_blank"> Quick settings edit (add, remove and reorder tiles)</a></li>
                  <li><a href="http://forum.xda-developers.com/showpost.php?p=49605868&postcount=44" target="_blank"> Quick settings pull down</a></li>
                  <li><a href="http://forum.xda-developers.com/showpost.php?p=50934371&postcount=30" target="_blank"> Disable safe headset volume warning</a></li>
                  <li><a href="http://forum.xda-developers.com/showpost.php?p=48801064&postcount=2" target="_blank">All other PA Setting and how to edit them</a></li>
                </ul>
              </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse -->
          </div><!-- /.panel -->

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#bugreport">encountered a Bug or Error?</a></h4>
            </div>
            <div id="bugreport" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Codename Lungo's goal is to make a stable ROM unfortunately it can happen that installation fails or something stops working in this can you case post you problem in the <strong>Device Forums</strong>on <strong>XDA Developers</strong>. 
                  You can also use the community on Facebook and Google+ be sure to mention you device if you use the community.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#credits">Credits</a></h4>
              </div>
              <div id="credits" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Codename Lungo is thanks to the following teams or persons giving us premission to use there projects.</p>
                  <ul>
                    <li><a href="https://cyngn.com/" target="_blank">Cyanogen, Inc.</a> for <a href="https://download.cyanogenmod.org/" target="_blank ">Cyanogenmod Base</a></li>
                    <li><a href="http://paranoidandroid.co/" target="_blank">Paranoid Android Team</a> for <a href="http://paranoidandroid.co/roms" target="_blank">Paranoid Android Base</a></li>
                    <li><a href="http://blog.anddoes.com/" target="_blank">Anddoes</a> for <a href="http://www.apexlauncher.com/" target="_blank">Apex Launcher</a></li>
                    <li><a href="http://forum.xda-developers.com/member.php?u=2777334" target="_blank">TKruzze</a> for <a href="http://forum.xda-developers.com/showthread.php?t=2397942" target="_blank">Google Apps</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!--/#wiki -->
        </div><!-- /#content-wrapper -->
        <?php require ('inc/footer.php'); ?>