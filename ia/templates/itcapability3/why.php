<!-- text left, media right -->
<div class="row">
    <div class="half">
       <p>WHY</p>
    </div><!--  /.half -->
    <div class="half">
         <?php
            $url = 'https://www.youtube.com/watch?v=pXRviuL6vMY';
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
            $id = $matches[1];
            $width = '800px';
            $height = '450px';
        ?>
        <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
            src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
            frameborder="0" allowfullscreen></iframe>
    </div><!--  /.half -->
</div><!--  /.row -->