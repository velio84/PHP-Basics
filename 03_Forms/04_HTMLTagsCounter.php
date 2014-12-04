<?php
session_start();
if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 0;
    $count = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML Tag Counter</title>
</head>
<body>
    <form method="get">
        <fieldset>
            <label for="tag">HTML tags</label> <br />
            <input type="text" name="tag" id="tag" /> <input type="submit" value="Submit"/><br />
            <?php
            $validTags = array('!DOCTYPE', 'html', 'head', 'title', 'base', 'link', 'meta', 'style',
                            'script', 'noscript', 'template', 'body', 'section', 'nav',
                            'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
                            'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
                            'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
                            'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
                            'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
                            'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
                            'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
                            'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
                            'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
                            'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
                            'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
                            'label', 'input', 'button', 'select', 'datalist', 'optgroup',
                            'option', 'textarea', 'keygen', 'output', 'progress',
                            'meter', 'details', 'summary', 'menuitem', 'menu');
            if(isset($_GET['tag'])): 
                $enteredTag = $_GET['tag'];
                $isValid = false;
                foreach ($validTags as $tag) {
                    if ($enteredTag == $tag) {
                        $isValid = true;
                        $count++;
                        break;
                    }
                   
                }
                if($isValid): 
                    $_SESSION['count']++; ?>
                    <p>
                        Valid HTML tag! <br />
                        Score: <?= htmlentities($_SESSION['count']) ?>
                    </p>
                
                <?php else: ?>
                    <p>
                        Invalid HTML tag! <br />
                        Score: <?= htmlentities($_SESSION['count']) ?>
                    </p>
                <?php 
                endif; 
            endif;
            ?>
        </fieldset>
    </form>
</body>
</html>