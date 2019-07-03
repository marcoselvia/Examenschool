<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="hero is-fullheight">
  <div class="container">
      <a href="list.php" class="button is-warning is-pulled-right">Back</a>
      <h1 class="title">New student</h1>

      <div class="columns">
          <div class="column">
          </div>
          <div class="column is-three-quarters">
              <form action="../src/logic/newOne.php" method="post">
                <div class="field">
                  <div class="control">
                    <input class="input" required name="fullname" type="text" placeholder="full name...">
                  </div>
                  </div>
                  <div class="field">
                    <div class="control">
                      <input class="input" required type="date" name="birthdate" placeholder="birthdate">
                    </div>
                  </div>
                  <div class="field is-grouped is-pulled-right">
                  <p class="control">
                    <button class="button is-primary" name="save">
                      Save changes
                    </button>
                    </p>
                  <p class="control">
                    <a class="button is-danger">
                      Cancel
                    </a>
                  </p>
                </div>
              </form>

          </div>
          <div class="column">
          </div>
      </div>

  </div>
</div>
<?php require_once('../templates/footer.php'); ?>