<?php

class MenukaartModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getFullMenu(int $id = null)
    {

        $sql = "SELECT gerechten.gerecht_name
                      ,gerechten.gerecht_beschNL
                      ,gerechten.gerecht_beschEN
                      ,gerechten.gerecht_prijs 
                FROM gerechten";

        $this->db->query($sql);

        $result = $this->db->resultSet();

        return $result;

        //     $where = $id ? "menus.id = :id" : "1 = 1";

        //     $stmt = $this->pdo-> ("
        //     SELECT
        //     menus.menu_id,
        //     menus.menu_name,
        //     (
        //         SELECT
        //             JSON_ARRAYAGG(
        //                 JSON_OBJECT(
        //                     'category_id',
        //                     categories.category_id,
        //                     'category_name',
        //                     categories.category_name,
        //                     'gerechten',
        //                     (
        //                         SELECT
        //                             JSON_ARRAYAGG(
        //                                 JSON_OBJECT(
        //                                     'gerecht_id',
        //                                     gerechten.gerecht_id,
        //                                     'gerecht_name',
        //                                     gerechten.gerecht_name,
        //                                     'gerecht_beschNL',
        //                                     gerechten.gerecht_beschNL,
        //                                     'gerecht_beschEN',
        //                                     gerechten.gerecht_beschEN,
        //                                     'gerecht_prijs',
        //                                     gerechten.gerecht_prijs
        //                                 )
        //                             )
        //                         FROM
        //                             Categorieen_Gerechten
        //                             JOIN Gerechten ON Categorieen_Gerechten.gerecht_id = Gerechten.gerecht_id
        //                         WHERE
        //                             Categorieen_Gerechten.category_id = categories.category_id
        //                     )
        //                 )
        //             )
        //         FROM
        //             Menu_Categories
        //             JOIN Categories ON Menu_Categories.category_id = Categories.category_id
        //         WHERE
        //             Menu_Categories.menu_id = menus.menu_id
        //     ) AS categories
        // FROM
        //     Menu AS menus

        // ORDER BY
        //     menus.menu_id
        //     ");

        //     if ($id) {
        //         $stmt->bindValue(":id", $id);
        //     }

        //     $stmt->execute();
        //     $menus = $stmt->fetchAll(PDO::FETCH_OBJ);

        //     foreach ($menus as $menu) {
        //         $menu->categories = $menu->categories ? json_decode($menu->categories) : [];
        //     }

        //     return $menus;
    }


    public function addDish($name, $price, $season, $cuisine)
    {
        $query = "INSERT INTO Gerechten (gerecht_name, gerecht_prijs, season, cuisine) VALUES (:name, :price, :season, :cuisine)";
        $this->db->query($query);
        $this->db->bind(':name', $name, PDO::PARAM_STR);
        $this->db->bind(':price', $price, PDO::PARAM_STR);
        $this->db->bind(':season', $season, PDO::PARAM_STR);
        $this->db->bind(':cuisine', $cuisine, PDO::PARAM_STR);
   
        return $this->db->execute();
    }
}