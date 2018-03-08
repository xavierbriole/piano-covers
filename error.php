
  <?php require 'header.php' ?>

  <main>

    <div class="container">

        <div class="row">
        <div class="col s12">
            <div class="card-panel red">
            <span class="white-text">
                Error while sending request. Please try again!
            </span>
            </div>
        </div>
        </div>

        <div class="row">
            <form action="mailsender.php" method="post" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons icon-white prefix">music_note</i>
                <textarea id="icon_prefix2" name="body" class="materialize-textarea"></textarea>
                <label for="icon_prefix2"></label>
                </div>
            </div>
            <div class="col s10 offset-s1 center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
            </form>
        </div>

    </div>

  </main>

<?php require 'footer.php' ?>