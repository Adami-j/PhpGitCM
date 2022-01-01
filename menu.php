<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-md bg-dark">
    <a href="..\..\PhpGitCm\adminGestion.php" class="navbar-brand">Cabinet medical</a>
    <div class=" navbar-collapse">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active"   >
                <a href="..\..\patient/patient.php" class="nav-link" >Patient</a>
            </li>
            <li class="nav-item">
                <a href="..\..\PhpGitCM\medecin/medecin.php" class="nav-link">Medecin</a>
            </li>
            <li class="nav-item">
                <a href="..\..\PhpGitCM\rdv/afficherRdv.php" class="nav-link">Rendez-vous</a>
            </li>
            <li class="nav-item">
                <a href="..\..\PhpGitCM\stats/stats.php" class="nav-link">Statistiques</a>
            </li>

        </ul>
    </div>
    <form method="POST">
        <div class="form-group">
            <button type="submit" name="deco"  class="btn-dark " value="Deconnexion" >Deconnexion</button>
        </div>
    </form>
</nav>