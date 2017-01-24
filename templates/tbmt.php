<!-- text bottom, media top -->
    <div>
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
    </div>
    <div>
       <p>Lorem ipsum Laborum sint nostrud dolor sunt in consectetur officia dolor velit commodo anim quis minim amet eu in dolor dolor aliquip ullamco enim veniam cillum Excepteur sit est pariatur quis aliquip reprehenderit fugiat ex minim sint in sed fugiat ullamco dolor mollit tempor aliqua reprehenderit aliquip in ex culpa deserunt sint eu dolore ut in et velit adipisicing et Ut magna adipisicing ut commodo sit irure pariatur cupidatat sit Excepteur sint aliquip cupidatat sit adipisicing aliquip nisi est eu deserunt mollit consequat Ut ex non aliquip dolor dolor culpa ut ad do tempor sit Duis quis nostrud cupidatat irure dolor nulla magna Duis dolor dolore id mollit ullamco dolore in consectetur in adipisicing do nostrud anim id nulla Ut velit aute sunt voluptate adipisicing ullamco dolore non amet magna enim eiusmod quis minim id dolore ad adipisicing incididunt ullamco exercitation nisi Duis Duis aliquip ut magna irure incididunt dolore esse cillum in consectetur aliqua.</p>
    </div>
