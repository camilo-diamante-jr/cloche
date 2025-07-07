<?php


class LoginModel
{

    private $pdo;


    public function __construct($pdo)
    {

        $this->pdo = $pdo;
    }

    public function login($email, $password): array
    {
        try {
            // Check for 'active' or 'inactive' status
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ? ");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                return [
                    'error' => true,
                    'message' => 'User not found or inactive.',
                ];
            }

            if (!password_verify($password, $user['password'])) {
                return [
                    'error' => true,
                    'message' => 'Incorrect password',
                ];
            }

            return [
                'success' => true,
                'user_id' => $user['userId'],
                'userType' => $user['userType'],
                'email' => $user['email'],
            ];
        } catch (PDOException $e) {
            return [
                'error' => true,
                'message' => 'Database error: ' . $e->getMessage(),
            ];
        }
    }
}
