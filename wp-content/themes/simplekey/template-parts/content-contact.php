<?php global $SK;?>

<?php if(!isset($SK['hide_contact']) || $SK['hide_contact']==1):?>
<!--Contact Area-->
    <section id="contact" class="page-area<?php if(!isset($SK['contact_background_color']) || $SK['contact_background_color']=='' || $SK['contact_background_color']=='#313131' || $SK['enable_custom']==0):?> blockbg1<?php endif;?>">
       <div class="wrapper">
           <header class="title">
              <h2><strong><?php if(isset($SK['contact_title']) && $SK['contact_title']<>''){echo $SK['contact_title'];}else{echo 'Contact us';}?></strong></h2>
              <?php if(isset($SK['contact_sub_title']) && $SK['contact_sub_title']<>''):?><p><?php echo $SK['contact_sub_title'];?></p><?php endif;?>
           </header>
           
           <?php get_template_part('template-parts/content','contactform');?>
           
           <div class="contactinfo">
           <?php if(isset($SK['contact_custom']) && $SK['contact_custom']<>''):?>
               <?php echo stripslashes($SK['contact_custom']);?>
          <?php else:?>
             <?php if(isset($SK['contact_intro_title']) && $SK['contact_intro_title']<>''):?>
               <h2><?php echo $SK['contact_intro_title'];?></h2>
             <?php endif;?>
             <?php if(isset($SK['contact_content']) && $SK['contact_content']<>''):?><p><?php echo convert_smilies(stripslashes($SK['contact_content']));?></p><?php endif;?>
             <div class="contactway">
                <?php if(isset($SK['name']) && $SK['name']<>''):?><?php _e('Name:','SimpleKey');?> <?php echo $SK['name'];?><br/><?php endif;?>
                <?php if(isset($SK['phone']) && $SK['phone']<>''):?><?php _e('Phone:','SimpleKey');?> <?php echo $SK['phone'];?><br/><?php endif;?>
                <?php if(isset($SK['fax']) && $SK['fax']<>''):?><?php _e('Fax:','SimpleKey');?> <?php echo $SK['fax'];?><br/><?php endif;?>
                <?php if(isset($SK['skype']) && $SK['skype']<>''):?><?php _e('Skype:','SimpleKey');?> <?php echo $SK['skype'];?><br/><?php endif;?>
                <?php if(isset($SK['address']) && $SK['address']<>''):?><?php _e('Address:','SimpleKey');?> <?php echo $SK['address'];?><?php endif;?>
             </div>
             
             <?php if(isset($SK['subscribe_form']) && $SK['subscribe_form']<>''):?>
             <div class="subscribe">
                <?php if(isset($SK['subscribe_intro_title']) && $SK['subscribe_intro_title']<>''):?>
                <h2><?php echo $SK['subscribe_intro_title'];?></h2>
                <?php endif;?>
                <p>
                  <?php echo stripslashes($SK['subscribe_form']);?>
                </p>
              </div>
              <?php endif;?>
             
              <?php echo sk_social();?>
           <?php endif;?>
           </div>
       </div>
    </section>
<?php endif;?>
