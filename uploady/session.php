<?php
session_start();
include_once 'config/config.php';
include_once APP_PATH . 'loadSettings.php';

$user = new Uploady\User($db, $utils);
$auth = new Uploady\Auth($db, $utils);

$current_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (isset($_SESSION)) {
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;

    if ($username != null) {
        if (isset($_SESSION['loggedin'])) {
            $data = $user->getUserData($username);

            if (!isset($_SESSION['user_id'])) {
                $_SESSION["user_id"] = hash("sha1", $data->user_id);
            }
        }

        if (!isset($_SESSION['current_ip'])) {
            $_SESSION['current_ip'] = $utils->sanitize($_SERVER['REMOTE_ADDR']);
        }

        if (!(isset($_SESSION['csrf']))) {
            $auth->generateSessionToken();
        }

        if (isset($_SESSION['isHuman'])) {
            if ($_SESSION['isHuman'] == false) {
                $utils->redirect($utils->siteUrl('/logout.php'));
            }
        }
    }

    if (strpos($current_url, "profile/")) {
        if (!isset($_SESSION['loggedin'])) {
            $utils->redirect($utils->siteUrl('/login.php'));
        }
    }
}

$page = 'session';
