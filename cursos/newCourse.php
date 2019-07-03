<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="hero is-fullheight">
  <div class="container">
      <a href="Ejerciciodb/cursos/courseList.php" class="button is-warning is-pulled-right">Back</a>
      <h1 class="title">New course</h1>

      <div class="columns">
          <div class="column">
          </div>
          <div class="column is-three-quarters">
              <form action="Ejerciciodb/src/logic/newCourse.php" method="post">
                <div class="field">
                  <div class="control">
                    <input class="input" required name="name" type="text" placeholder="Course...">
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
