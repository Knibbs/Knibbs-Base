<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php  $this->inc('inc/top.php'); ?>
<?php  $this->inc('inc/header.php'); ?>
<?php  $this->inc('inc/nav.php'); ?>
<div class="container">

<?php   
defined('C5_EXECUTE') or die("Access Denied.");
$html = Loader::helper('html');
$this->addHeaderItem($html->css('page_types/pb_post.css', 'problog'));
Loader::model('blogify','problog');
$blog_settings = blogify::getBlogSettings();
extract($blog_settings);
?>
    <section class="row">
        <article class="eight columns">
			<?php   
            defined('C5_EXECUTE') or die(_("Access Denied."));
            global $c;
            $v = View::getInstance();
            $v->addHeaderItem('<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>');
            Loader::model('blogify','problog');
            Loader::model("attribute/categories/collection");
            
            //get this install's blog settings
            $blog_settings = blogify::getBlogSettings();
            
            //establish links to this post
            $BASE_URL = BASE_URL;
            $url = Loader::helper('navigation')->getLinkToCollection($c);
            
            //get the collectionID for this post
            $cID = $c->getCollectionID();
            
            //this posts user ID
            $uID = $c->getCollectionUserID();
            $ui = UserInfo::getByID($uID); 
            
            //get Author information if designated
            $authorID = $c->getAttribute('blog_author');
            if(!$authorID){
            $authorID = $c->getCollectionUserID();
            }
            //set a bogus user for page_type defaults editing
            if(!$authorID){
            $authorID = '1';
            }
            
            //go get ther userinfo object for user
            $ui = UserInfo::getByID($authorID); 
            
            //get post title
            $blogTitle = $c->getCollectionName();
            
            //get public date
            $blogDate = $c->getCollectionDatePublic();
            
            //get tags
            $tags = $c->getAttribute('tags');
            
            //get cooking time
            $cooking_time = $c->getAttribute('cooking_time');
            //get Preparation Time
            $preparation_time = $c->getAttribute('preparation_time');
            //get Servings
            $servings = $c->getAttribute('servings');
            
            //get geotagging
            $geo = $c->getAttribute('post_location');
            
            //get thumbnail link path
            $thumb = $c->getAttribute('thumbnail');
            if(is_object($thumb)){
            $fID = $thumb->getFileID();
            $thumbpath = BASE_URL.File::getRelativePathFromID($fID);
            }
            ?>
            
            <div class="blog-attributes">
                <div>
                    <h1><?php   echo $blogTitle; ?> </h1>
                    <h5><?php   echo date('M d, Y',strtotime($blogDate));  ?></h5>
                </div>
            </div>
            
            <div id="sbBlog-news-holder">
                <div class="sbBlog-news-image">
					<?php  
                    if($thumbpath){
                    //if thumbail is present, show it
                    print '<img src="'.$thumbpath.'" alt="mobile_photo" class="image photo"/>';
                    print '<br style="clear: both;" />';
                    } ?>
                </div>
            	<div class="clearfix"></div>
            </div> 
            
            <?php $a = new Area('Main'); $a->display($c); ?>
            
			<?php  if($trackback>0){ $a = new Area('Blog Post Trackback'); $a->display($c); } ?>
            
			<?php   
            if($comments>0){
            if($disqus){
            Loader::PackageElement('disqus','problog',array('discus'=>$disqus));
            }else{
            $a = new Area('Blog Post More');
            $a->display($c);
            }
            }?>
            <div class="ccm-next-previous-wrapper">
                <br/>
                <?php    
                if($prev_link){
                ?>
                    <div class="ccm-next-previous-previouslink">
                    <?php  echo '<a href="'.$prev_link.'" alt="prev_page">&laquo; '.t('Previous').'</a>';?>
                    </div>
                <?php 
                }
                if($next_link){
                ?>
                    <div class="ccm-next-previous-nextlink">
                    <?php  echo '<a href="'.$next_link.'" alt="next_page">'.t('Next').' &raquo;</a>';?>
                    </div>
                <?php 
                }
                ?>
                <div class="spacer"></div> 
            </div>
        </article><!-- end eight columns -->
    
		<article class="side-bar-bk four columns">
            <?php $as = new Area('Sidebar'); $as->display($c); ?>		
        </article> <!-- sidebar -->
        
    </section><!-- end row -->
</div> <!--! end container -->
<?php  $this->inc('inc/footer.php'); ?>
</body>
</html>