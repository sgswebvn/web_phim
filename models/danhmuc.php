<?php 


function all_dm() {
    $sql = "select * from category order by id_dm desc";
    $list_dm = pdo_query($sql);
    return $list_dm;
}
function one_dm($id_dm){
    $sql = "SELECT * FROM category WHERE id_dm=".$id_dm ;
    $dm = pdo_query_one($sql);
    return $dm;
}
function add_dm($category) {
    $sql = "insert into category (category) values('$category')";
    pdo_execute($sql);
}
function update_dm($id_dm, $category) {
    $sql = "update category set category='".$category."' where id_dm=".$id_dm;
    pdo_execute($sql);  
}

function delete_dm($id_dm) {
    $sql = "delete from category where id_dm =".$id_dm;
    pdo_delete($sql);
}
