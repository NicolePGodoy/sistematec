<?php 
 require_once '../core/Controller.php';

class UserController extends Controller {
    public function barbers() {
        $userModel = $this->loadModel('User');
        $barbers = $userModel->getAllBarbers();
        $this->render('user/barbers', ['barbers' => $barbers]);
    }
    
    public function rate($id) {
        $userModel = $this->loadModel('User');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'rating' => $_POST['rating'] ?? 0,
                'comment' => $_POST['comment']
            ];
            $userModel->createRate($id, $data);
            header('Location: ' . BASE_URL . 'user/barbers');
        } else {
            $user = $userModel->getUserById($id);
            $this->render('user/rate', ['user' => $user]);
        }
    }

    public function reviews($id) {
        $userModel = $this->loadModel('User');
        $reviews = $userModel->getReviews($id);
        $this->render('user/reviews', ['reviews' => $reviews]);
    }
    
}
?>