<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;

class CommentController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $Comments = (new Comment())->all();

        $this->renderAdmin("comments/index", ['Comments' => $Comments]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'noidung' => $_POST['noidung'],
                'ngaybinhluan' => date('H:i d-m-y'),
            ];

            (new Comment())->insert($data);

            header('Location: /admin/comments');
        }

        $this->renderAdmin("comments/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'noidung' => $_POST['noidung'],
                'ngaybinhluan' => date('H:i d-m-y')
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Comment())->update($data, $conditions);
        }

        $Comment = (new Comment())->findOne($_GET["id"]);

        $this->renderAdmin("Comments/update", ["Comment" => $Comment]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Comment())->delete($conditions);

        header('Location: /admin/Comments');
    }
}



