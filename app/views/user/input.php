<style>
form {
  width: 400px;
  margin: 0 auto;
  background-color: #f5f7fa;
  padding: 20px;
  border-radius: 10px;
}

h2 {
  text-align: center;
  color: #2c3e50;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table td {
  padding: 10px;
  border: 2px solid #006400;
  color: #000;
  font-weight: bold;
}



table input[type="text"],
table textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

table input[type="submit"] {
  width: auto;
  padding: 10px 20px;
  background-color: #2c3e50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}

table input[type="submit"]:hover {
  background-color: #1c2833;
}

</style>

<h2>Input User</h2>

<form action="<?php echo URL; ?>/user/simpan" method="post">
    <table>
        <tr>
            <td>NAMA USER</td>
            <td><input type="text" name="user_nama"></td>
        </tr>
        <tr>
            <td>PASSWORD USER</td>
            <td><input type="text" name="user_password"></td>
        </tr>
        <tr>
            <td>ALAMAT USER</td>
            <td><textarea name="user_alamat" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>EMAIL USER</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos"></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="user_role"></td>
        </tr>
        <tr>
            <td>USER AKTIF</td>
            <td><input type="text"name="user_aktif"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form><br><br><br><br>