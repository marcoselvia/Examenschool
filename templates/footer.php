<footer class="footer">
    <div class="content has-text-centered">
        <p>
            este el footer
        </p>
    </div>
</footer>
<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/js/jquery-3.4.0.js"></script>
<script>
var current = window.location.href;
        var lista = document.querySelector("#lista");

    if(current.includes('/control/')) {


        lista.querySelector("#two").classList.add("is-active");

    } else if (current.includes("/cursos/")) {

         lista.querySelector("#three").classList.add("is-active");

    } else {

         lista.querySelector("#one").classList.add("is-active");
    }

</script>
<script>
    window.onclick = function() {
        var n = document.querySelector(".notification").remove();
    }
</script>
</body>

</html>
