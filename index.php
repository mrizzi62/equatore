<?php

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');
jimport('joomla.application.component.model');

JHtml::_('behavior.framework', true);

/*
$article_id = JRequest::getInt('id', 0);
$article_model = JModel::getInstance('ContentModelArticle');
if($article_id && $article_model){
	$article = $article_model->getItem($article_id);
	$category_id = $article->catid;
}else{
	$category_id = 0;
}
*/

$category_id = 0;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>

<jdoc:include type="head" />

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/construct.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" />
    
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/pagecontrol.js"></script>

</head>

<body>


<div id="wrapper">
        <div id="page">
            <div id="page_header">
                <jdoc:include type="modules" name="header" style="xhtml" />
            </div>
            <div id="page_menu">
                <div id="languages">
                    <jdoc:include type="modules" name="languages" style="xhtml" />
                </div>
                <div id="menu">
                    <jdoc:include type="modules" name="menu" style="xhtml" />
                </div>
                <div id="social">
                    <jdoc:include type="modules" name="social" style="xhtml" />
                </div>
            </div>
            <div id="page_middle">
                <div id="page_left">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="sidebar" style="xhtml" />
                    </div>
                </div>
                <div id="page_center">
                    <div id="page_content">
			
			<?php if($category_id == 8): ?>
				<div id="page_content_top">
				    <div id="content_header">
					<jdoc:include type="modules" name="content_header" style="xhtml" />
				    </div>
				</div>
				<div id="page_content_bottom">
				    <div id="content_left">
					<div class="box100">
					    <jdoc:include type="modules" name="content_box1" style="xhtml" />
					</div>
					<div class="box100">
					    <jdoc:include type="modules" name="content_box2" style="xhtml" />
					</div>
					<div class="box100">
					    <jdoc:include type="modules" name="content_box3" style="xhtml" />
					</div>
				    </div>
				    <div id="content_right">
					<jdoc:include type="component" />
				    </div>
				</div>
			<?php else: ?>
				<div id="page_content_left">
				    <div id="content">
				        <jdoc:include type="modules" name="breadcrumb" style="xhtml" />
					<jdoc:include type="component" />
				    </div>
				</div>
				<div id="page_content_right">
					<jdoc:include type="modules" name="content_links1" style="xhtml" />
					<jdoc:include type="modules" name="content_links2" style="xhtml" />
				</div>
			<?php endif; ?>
                    </div>
                    <div class="clear">&nbsp;</div>
                    <div id="area_riservata">
                        <jdoc:include type="modules" name="user1" style="xhtml" />
                    </div>
                    <div id="richiedi_informazioni">
                        <jdoc:include type="modules" name="user2" style="xhtml" />
                    </div>
                </div>
                <div id="page_right">
                    <div id="rightbar">
                        <jdoc:include type="modules" name="rightbar" style="xhtml" />
                    </div>
                </div>
            </div>
        </div>
    </div>


<jdoc:include type="modules" name="debug" />

</body>

</html>