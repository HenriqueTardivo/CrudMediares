<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #8A2BE2;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Turma</button>
  <div class="dropdown-content">
    <a href="addTurma.php"         target="home">Incluir</a>
    <a href="updateTurma.php"      target="home" >Alterar</a>
    <a href="excluirTurma.php"     target="home">Excluir</a>
    <a href="updateTurma.php"      target="home"   >Consultar</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Semestre</button>
  <div class="dropdown-content">
    <a href="addSemestre.php"       target="home">Incluir</a>
    <a href="updateSemestre.php"    target="home">Alterar</a>
    <a href="excluirSemestre.php"   target="home">Excluir</a>
    <a href="updateSemestre.php"    target="home">Consultar</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Professores</button>
  <div class="dropdown-content">
    <a href="addProfessor.php"        target="home">Incluir</a>
    <a href="updateProfessor.php"     target="home">Alterar</a>
    <a href="excluirProfessor.php"    target="home">Excluir</a>
    <a href="updateProfessor.php"     target="home">Consultar</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Cursos</button>
  <div class="dropdown-content" target="home">
    <a href="addCurso.php"      target="home">Incluir</a>
    <a href="updateCurso.php"  target="home">Alterar</a>
    <a href="excluirCurso.php" target="home">Excluir</a>
    <a href="updateCurso.php"  target="home">Consultar</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Alunos</button>
  <div class="dropdown-content">
    <a href="addAluno.php"      target="home">Incluir</a>
    <a href="updateAluno.php"   target="home">Alterar</a>
    <a href="excluirAluno.php"  target="home">Excluir</a>
    <a href="updateAluno.php"   target="home">Consultar</a>
  </div>
</div>


</body>
</html>
