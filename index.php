<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>
<div id="landing_page">
    <?php
    if($cfg && ($page = $cfg->getLandingPage()))
        echo $page->getBodyWithImages();
    else
        echo  '<h1>Welcome to the Support Center</h1>';
    ?>
    <div id="new_ticket">
        <h3>Open A New Ticket</h3>
        <br>
        <div>Please provide as much detail as possible so we can best assist you. To update a previously submitted ticket, please login.</div>
        <p>
            <a href="open.php" class="green button">Open a New Ticket</a>
        </p>
    </div>

    <div id="check_status">
        <h3>Check Ticket Status</h3>
        <br>
        <div>We provide archives and history of all your current and past support requests complete with responses.</div>
        <p>
            <a href="view.php" class="blue button">Check Ticket Status</a>
        </p>
    </div>
<div class="clear"></div>

<div id="remote_support">
        <h3>Remote Access Software</h3>
        <br>
        <div>Download remote access software to allow help desk technician to access your computer to provide troubleshooting and support. Run the application and provide 9 digit ID to technician.</div>
<br>
        <div id="remote1">
            <a href="remote/impcremoteinstant_user.exe" class="orange button2">Download for Windows</a>
</div>
<div id="remote2">
            <a href="remote/impcremote_instant.dmg" class="orange button2">Download for Mac</a>
        </div>
<div class="clear"></div>
    </div>


</div>
<?php
if($cfg && $cfg->isKnowledgebaseEnabled()){
    //FIXME: provide ability to feature or select random FAQs ??
?>
<p>Be sure to browse our <a href="kb/index.php">Frequently Asked Questions (FAQs)</a>, before opening a ticket.</p>
</div>
<?php
} ?>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
