themefolder=~/dev/renguangdo/theme
magefolder=~/dev/renguangdo/website

echo $themefolder

mkdir $magefolder/app/code/local
cp -r $themefolder/app/code/local/* $magefolder/app/code/local/
ln -s $themefolder/app/design/adminhtml/default/default/layout/options.xml $magefolder/app/design/adminhtml/default/default/layout/options.xml
ln -s $themefolder/app/design/frontend/default/parfijure $magefolder/app/design/frontend/default/parfijure
cp $themefolder/app/etc/modules/Excellence_Ajax.xml $magefolder/app/etc/modules/Excellence_Ajax.xml
cp $themefolder/app/etc/modules/ThemeAdminPanel_All.xml $magefolder/app/etc/modules/ThemeAdminPanel_All.xml

ln -s $themefolder/js/colorpicker $magefolder/js/colorpicker
ln -s $themefolder/js/easing $magefolder/js/easing
ln -s $themefolder/js/jcarousel $magefolder/js/jcarousel
ln -s $themefolder/js/jquery $magefolder/js/jquery
ln -s $themefolder/js/lightbox $magefolder/js/lightbox
ln -s $themefolder/js/revolution $magefolder/js/revolution
ln -s $themefolder/js/slideshow $magefolder/js/slideshow
ln -s $themefolder/js/sprintf $magefolder/js/sprintf
ln -s $themefolder/js/twitter $magefolder/js/twitter
mv $magefolder/js/varien/menu.js $magefolder/js/varien/menu.js.old
ln -s $themefolder/js/varien/menu.js $magefolder/js/varien/menu.js
ln -s $themefolder/js/varien/script.js $magefolder/js/varien/script.js
ln -s $themefolder/js/zoom $magefolder/js/zoom

ln -s $themefolder/lib/Varien/Data/Form/Element/Color.php $magefolder/lib/Varien/Data/Form/Element/Color.php

mkdir $themefolder/media/wysiwyg
ln -s $themefolder/media/wysiwyg/parfijure $magefolder/media/wysiwyg/parfijure

ln -s $themefolder/skin/adminhtml/default/default/colorpicker.css $magefolder/skin/adminhtml/default/default/colorpicker.css
ln -s $themefolder/skin/frontend/default/parfijure $magefolder/skin/frontend/default/parfijure