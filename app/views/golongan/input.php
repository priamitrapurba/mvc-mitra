<style>
h2 {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  margin-top: 50px;
  color: darkgreen;
}

form {
  margin: 0 auto;
  width: 50%;
  border: 2px solid black; 
  padding: 20px;
}

table {
  width: 100%;
}

td {
  padding: 5px;
}

input[type="text"], input[type="submit"] {
  padding: 5px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  font-weight: bold; 
}
</style>

<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/golongan/simpan" method="post">
    <table>
        <tr>
            <td>KODE GOLONGAN</td>
            <td><input class="form-label" type="text" name="gol_kode"></td>
        </tr>
        <tr>
            <td>NAMA GOLONGAN</td>
            <td><input class="form-label" type="text" name="gol_nama"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form><br><br><br><br>