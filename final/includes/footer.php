<footer>
    <ul>
        <li>Copyright &copy;
            <?php
            $date_current = date('Y');
            $date_created = 2017;
            if($date_current == $date_created) {
                echo $date_current;
            } else {
                echo ''.$date_created.' - '.$date_current.' ';
            }
             ;?>        
        </li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of Use</a></li>
        <li><a href="">Web Design by murphwillsurf</a></li>
        <li><a href="https://validator.w3.org">HTML Validation</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator">CSS Validation</a></li>
    </ul>
</footer>
</body>
</html>