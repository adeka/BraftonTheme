<div class="social-sharing">
    <i class="fa fa-twitter" target="_blank" onclick='<?php
      echo 'window.open ("http://twitter.com/intent/tweet?status='.$title.'+'.$url.'","mywindow","menubar=1,resizable=1,width=500,height=500");';
    ?>'></i>
    <i class="fa fa-facebook" target="_blank" onclick='<?php
      echo 'window.open ("http://www.facebook.com/sharer/sharer.php?u='.$url.'&title='.$title.'","mywindow","menubar=1,resizable=1,width=500,height=500");'
    ?>'></i>
    <i class="fa fa-google" target="_blank" onclick='<?php
      echo 'window.open ("https://plus.google.com/share?url='.$url.'","mywindow","menubar=1,resizable=1,width=500,height=500");'
    ?>'></i>
    <i class="fa fa-linkedin" target="_blank" onclick='<?php
      echo 'window.open ("http://www.linkedin.com/shareArticle?mini=true&url='.$url.'&title='.$title.'&source='.$url.'","mywindow","menubar=1,resizable=1,width=500,height=500");'
    ?>'></i>
    <i class="fa fa-pinterest" target="_blank" onclick='<?php
      echo 'window.open ("http://pinterest.com/pin/create/bookmarklet/?media=[MEDIA]&url='.$url.'&is_video=false&description='.$title.'","mywindow","menubar=1,resizable=1,width=500,height=500");'
    ?>'></i>
    <i class="fa fa-rss" target="_blank" onclick='<?php
      echo 'window.open ("");'
    ?>'></i>
</div>
