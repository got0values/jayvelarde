<?php
    include_once 'header.php';
?>

<script type=text/javascript src='../lettercount/lbtletters.js'></script>
    <div id='mainflex'>
        <div id='leftflex'>
            <form onsubmit='addpar(); return false;'>
                <textarea name='text' id='text' rows='20' cols='70' placeholder="Type in your input here. Then, click on Submit."></textarea>
                <br>
                <button class='button1' id='submit' name='submit' type='submit' value='submit' disabled>Submit</button>
            </form>

            

            <script>
                document.querySelector('#text').onkeyup = function() {
                    if (document.querySelector('#text').value === '') {
                        document.querySelector('#submit').disabled = true;
                    }
                    else {
                        document.querySelector('#submit').disabled = false;
                    }
                }
            </script>
        </div>

        <div id='rightflex'>
            <h3>Results:</h3>
            <div id='letterswords'></div>
            <form onsubmit='clearpar(); return false;'>
                <button class='button2' id='submit2' name='submit2' type='submit' value='Clear'>Clear</button>
            </form>
        </div>

    </div>
<?php
    include_once 'footer.php';
?>