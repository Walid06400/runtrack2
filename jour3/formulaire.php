<!DOCTYPE html>
<html>
<body>

<h2>Calculatrice PHP</h2>
<form action="indexback.php" method="post">
  
Valeur a: <input type="number" name="a" placeholder="je ne peux pas savoir as t'as place" required><br>
  Valeur b: <input type="number" name="b" placehlder="je ne peux vriament pas savoir"  required><br>
 
  Type de calcul: 
  <select name="operation" required>
        <option value="addition">Addition</option>
        <option value="soustraction">Soustraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
  </select>
  <br>
  <input type="submit" value="Magie!!">
</form>



</body>
</html>
