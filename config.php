<?php
/**
 * config.php
 * The Long Reverb — thelongreverb.com
 * Database configuration and global settings
 */

// ─── Environment ────────────────────────────────────────────
define('ENVIRONMENT', 'development'); // change to 'production' when live

// ─── Database ───────────────────────────────────────────────
define('DB_HOST', 'localhost');
define('DB_NAME', 'thelongreverb');
define('DB_USER', 'your_db_user');       // replace with your IONOS DB username
define('DB_PASS', 'your_db_password');   // replace with your IONOS DB password
define('DB_CHARSET', 'utf8mb4');

// ─── Site Settings ──────────────────────────────────────────
define('SITE_NAME', 'The Long Reverb');
define('SITE_URL', 'https://thelongreverb.com');
define('ADMIN_EMAIL', 'signal@rondashstella.com'); // replace with Ron's email

// ─── Security ───────────────────────────────────────────────
define('ADMIN_PASSWORD_HASH', password_hash('changeme123', PASSWORD_BCRYPT)); // set a real password before going live
define('SESSION_NAME', 'tlr_admin_session');

// ─── Error Reporting ────────────────────────────────────────
if (ENVIRONMENT === 'development') {
      ini_set('display_errors', 1);
      error_reporting(E_ALL);
} else {
      ini_set('display_errors', 0);
      error_reporting(0);
}

// ─── Database Connection (PDO) ──────────────────────────────
function getDB() {
      static $pdo = null;
      if ($pdo === null) {
                try {
                              $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
                              $options = [
                                                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                                                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                                                PDO::ATTR_EMULATE_PREPARES   => false,
                                            ];
                              $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
                } catch (PDOException $e) {
                              if (ENVIRONMENT === 'development') {
                                                die(json_encode(['error' => 'Database connection failed: ' . $e->getMessage()]));
                              } else {
                                                die(json_encode(['error' => 'Database connection failed.']));
                              }
                }
      }
      return $pdo;
}

// ─── CORS Headers (for API) ─────────────────────────────────
function setCORSHeaders() {
      header('Access-Control-Allow-Origin: ' . SITE_URL);
      header('Content-Type: application/json; charset=utf-8');
}

// ─── JSON Response Helper ───────────────────────────────────
function jsonResponse($data, $status = 200) {
      http_response_code($status);
      echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
      exit;
}
