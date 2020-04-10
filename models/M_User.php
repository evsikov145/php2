<?

include_once 'M_Db.php';

class M_User {

    public function getAllUsers() {
        $connect = new M_Db("localhost","root","","catalog");
        $connect->connect_pdo();
        $sql = "SELECT * FROM `users`";
        $res = $connect->getInfoPDO()->prepare($sql);
        $res->execute();
        return $res;
    }
    public function authUsers($login, $password) {


            $salc = "145541evsikov145541";
            $password = md5($password).$salc;

            $connect = new M_Db("localhost","root","","catalog");
            $connect->connect_pdo();
            $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
            $res = $connect->getInfoPDO()->prepare($sql);
            $res->execute();
            return $res;
    }
    public function addUsers($login, $password, $email, $name) {
        $salc = "145541evsikov145541";
        $password = md5($password).$salc;

        $connect = new M_Db("localhost","root","","catalog");
        $connect->connect_pdo();
        $sql = "INSERT INTO users(login,password,name,email) VALUES ('$login','$password','$name','$email' )";
        $res = $connect->getInfoPDO()->prepare($sql);
        $res->execute();
        return $res;
    }
    public function deleteUsers() {

    }
}