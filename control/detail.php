<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<?php require_once('../database/connexion.php'); ?>
<?php 
$id = $_GET['edit'];

    $sql = "SELECT s.codigo, s.fullname as nombre, ROUND(datediff(now(), s.birthdate)/365) as edad "
            ."FROM student s "  
            ."WHERE s.id = $id";
    
   $sqld = "SELECT sub.name as curso, ssy.score as nota, knowState(sy.end_date) as eva, y.year as ciclo "
          ."FROM student s, subject sub, student_subject_year ssy, year y, subject_year sy "
          ."WHERE ssy.student_id = s.id "
          ."AND  ssy.subject_year_Id = sy.id "
          ."AND sy.subject_id = sub.id "
          ."AND sy.year_Id = y.id " 
          ."AND s.id = $id ";
            
    if($connection) {
        $result = $connection->query($sqld);
        $student = $connection->query($sql);
    }
?>
<?php if($result==null): ?>
    <div class="container">
        Este estudiante no se encuentra en ningun curso!
    </div>
<?php else: ?>
<div class="container">
  
    <?php $s = $student->fetch(); ?>
    <div class="columns">
        <div class="column">
          <?php echo $s['nombre'];?> <br>
          <?php echo $s['codigo']; ?>
          <p><?php echo $s['edad'];?> años</p>
        </div>
        <div class="column is-one-quarter">
            <button class="button is-primary">Print</button>
            <button class="button is-primary">Asign</button>
            <a href="list.php" class="button is-warning">Back</a>
        </div>
    </div>

          <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Year</th>
                <th>State</th>
                <th>Score</th>
            </tr>
        </thead>
        <?php  
            $i = 0;
            forEach($result as $row):  ?>
        <tr>
            <td><?php echo $i = $i + 1; ?></td>
            <td><?php echo $row['curso']; ?></td>
            <td><?php echo $row['ciclo']; ?></td>
            <td>
            <?php  if ($row['eva']): ?>
                In process  

           <?php else:  ?>
                Done
            <?php endif; ?>
            </td>
            <td>
                <?php  if ($row['eva']): ?>
                    NF  

                <?php else:  ?>
                <?php 
                    echo $row['nota']; 
                ?>     
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php endif; ?>
<?php require_once('../templates/footer.php'); ?>