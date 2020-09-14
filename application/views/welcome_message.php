<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<body class="landing">
<div class="container-fluid">
<div class="row">
<div class="right-panel-container">
<div class="right-panel">
<div class="custom-logo">
<img src="assets/img/logo.png" attr="redskins logo">
</div>
<div class="player-img">
<img src="assets/img/player-images.png">
</div>
</div>
</div>
<div class="left-panel-container">
<div class="left-panel">
<h4>Bon Secours Training Center, 2401 W Lelgh St, Richmond, VA 23220</h4>
<h4 class="text-center"><strong>2018 Redskins Training Camp</strong></h4>
<div class="text-center">
<div class="col-md-12 thank">
<span class="thankyou">THANK YOU FOR SIGNING UP!</span>
</div>
<div class="col-md-12 thank">

<div class="col-md-12">
<span class="frname"><?php
echo $_POST['usr_fname'];
?></span>
<span class="fremail"><?php
echo $_REQUEST['usr_email'];
?></span>
<div class="col-md-12">
<span class="gst">GUEST</span>
</div></div>
</div>
<!-- <?php
echo $_POST['usr_fname'];
echo $_REQUEST['usr_email'];
?> -->
<!-- <?php foreach($results as $result){?>
     <tr>
         <td><?php echo $result->usr_fname;?></td>
         <td><?php echo $result->usr_email;?></td>
      </tr>     
     <?php }?>     -->
</div>

<div class="registration_form">
<form  method="post" class="clearfix" action="<?php echo site_url('user/savingdata'); ?>">

<div class="invatation_details">
<p>
Invite your friends and family to the Redskins Training Camp. You are not required to register kids 13 and under - your Fan Mobile Pass will also be valid for their entry.</p>
</div>
<div style="margin-left:10%;" class="input_fields_wrap invitee-list form-inline" data-prototype="&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;input-field&#x20;clearfix&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;add&#x20;friend-firstname&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;input&#x20;type&#x3D;&quot;text&quot;&#x20;id&#x3D;&quot;registration_guests___name___firstName&quot;&#x20;name&#x3D;&quot;registration&#x5B;guests&#x5D;&#x5B;__name__&#x5D;&#x5B;firstName&#x5D;&quot;&#x20;required&#x3D;&quot;required&quot;&#x20;placeholder&#x3D;&quot;First&#x20;Name&quot;&#x20;class&#x3D;&quot;form-control&#x20;form-control&quot;&#x20;&#x2F;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;add&#x20;friend-lastname&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;input&#x20;type&#x3D;&quot;text&quot;&#x20;id&#x3D;&quot;registration_guests___name___lastName&quot;&#x20;name&#x3D;&quot;registration&#x5B;guests&#x5D;&#x5B;__name__&#x5D;&#x5B;lastName&#x5D;&quot;&#x20;required&#x3D;&quot;required&quot;&#x20;placeholder&#x3D;&quot;Last&#x20;Name&quot;&#x20;class&#x3D;&quot;form-control&#x20;form-control&quot;&#x20;&#x2F;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;add&#x20;friend-email&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;input&#x20;type&#x3D;&quot;email&quot;&#x20;id&#x3D;&quot;registration_guests___name___email&quot;&#x20;name&#x3D;&quot;registration&#x5B;guests&#x5D;&#x5B;__name__&#x5D;&#x5B;email&#x5D;&quot;&#x20;required&#x3D;&quot;required&quot;&#x20;placeholder&#x3D;&quot;Email&quot;&#x20;class&#x3D;&quot;form-control&#x20;form-control&quot;&#x20;&#x2F;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;remove_field&#x20;&quot;&gt;X&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;">
</div>
<div class="input-field clearfix text-center">
<div class="col-md-12">
<input type="button" name="addfriends" value="+ Add Friends" class="addfriend" id="add-invitee-trigger">
<input type="submit" name="getregisterd" value="Submit">
</div>
</div>
<div class="hide">
<div class="form-group"><div class="form-group collection-items registration_guests_form_group" data-prototype="" data-prototype-name="__name__" data-prototype-label="__name__label__" id="collectionregistration_guests_form_group"></div></div><input type="hidden" id="registration_step" name="registration[step]" class="form-control" /><input type="hidden" id="registration__token" name="registration[_token]" class="form-control" value="_kgIibDT-BEYkke2-KNzvHMVUlct7Ezn67OPk8CK4g0" />
</div>
</form>

<div class="details_reg">
<p>Entry is first come, first serve. Date of camp are subject to change. See complete schedule and more information at <a href="http://www.redskins.com/trainingcamp" target="_blank">redskins.com/trainingcamp.</a> <br /><br />
* Please share my email address with NBC Universal, so NBC Universal can send me information about special offer and promotion. I have read and agree to <a href="https://tracking.cirrusinsight.com/6305dab5-367d-4a0f-a674-87d2e81e6e99/nbcuniversal-com-privacy" target="_blank"> NBC UNERVERSAL’S PRIVACY POLICY. </a><br /><br /><br /></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="add_friend"></div>

</body>
</html>

























