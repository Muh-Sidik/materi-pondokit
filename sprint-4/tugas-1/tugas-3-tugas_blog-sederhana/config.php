<?php

class Blog {

    private $config;

    public function __construct()
    {
        
        $core = 'mysql:host=localhost;dbname=blogku';
        $user = 'root';
        $pass = 'masukaja';

        $this->config = new PDO($core, $user, $pass);

    }

    public function login($email, $password)
    {

        $login = "SELECT * FROM user WHERE email=? AND password=?";

        $statement = $this->config->prepare($login);
        $statement->execute([$email, $password]);
        return $statement;

        if ($statement) {
            return "berhasil";
        } else{
            return "gagal";
        }

    }

    public function register($nama, $email, $nomor,$password)
    {

        $register = "INSERT INTO user (nama, email, nomor,password) VALUES (?, ?, ?, ?)";

        $statement = $this->config->prepare($register);
        $statement->execute([$nama, $email, $nomor,$password]);

        if ($statement) {
            return "berhasil";
        } else {
            return "gagal";
        }

    }

    public function input($nama, $judul, $isi, $user_id, $id_category)
    {
        $input = "INSERT INTO article (nama, tanggal, judul, isi, user_id, id_category) VALUES (?, now(), ?, ?, ?, ?)";

        $statement = $this->config->prepare($input);
        $statement->execute([$nama, $judul, $isi, $user_id, $id_category]);

    }

    public function article($id)
    {
        
        $article = "SELECT * FROM article INNER JOIN user ON article.user_id=user.id WHERE article.user_id=?";

        $statement = $this->config->prepare($article);
        $statement->execute([$id]);
        return $statement;

    }

    public function category($id)
    {

        $category = "SELECT * FROM article INNER JOIN category USING (id_category) WHERE id_category=?";

        $statement = $this->config->prepare($category);
        $statement->execute([$id]);
        return $statement;

    }

    public function allcategory()
    {

        $category = "SELECT * FROM article INNER JOIN category USING (id_category)";

        $statement = $this->config->prepare($category);
        $statement->execute();
        return $statement;
    }

    public function selectcategory()
    {

        $category = "SELECT * FROM category";

        $statement = $this->config->prepare($category);
        $statement->execute();
        return $statement;
    }

}

?>