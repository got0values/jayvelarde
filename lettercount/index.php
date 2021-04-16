<?php
    include_once 'header.php';
?>

<script type=text/javascript src='../lettercount/lbtletters.js'></script>
    <section class="glass" id='mainflex'>
        <div id='leftflex'>
            <form onsubmit='addpar(); return false;'>
                <textarea class="glass3" name='text' id='text' rows='40' cols='100' placeholder="Type in your input here. Then, click on Submit."></textarea>
                <br>
                <button class='button1' id='submit' name='submit' type='submit' value='submit' disabled>Submit</button>
            </form>
        </div>

        <div id='rightflex'>
            <h2>Results:</h2>
            <div class="glass2" id='letterswords'></div>
            <form onsubmit='clearpar(); return false;'>
                <button class='button2' id='submit2' name='submit2' type='submit' value='Clear'>Clear</button>
            </form>
        </div>

    </section>

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

<?php
    include_once 'footer.php';
?>