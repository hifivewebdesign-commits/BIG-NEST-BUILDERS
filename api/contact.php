<?php
/**
 * BIG NEST BUILDERS - Contact Form Submission Handler
 * Validates submissions, checks Indian phone format, stores leads securely in JSON.
 */

session_start();
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../config.php';

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Please submit the form via POST.'
    ]);
    exit;
}

// Honeypot check (anti-spam)
if (!empty($_POST['website_check']) || !empty($_POST['contact_bot_field'])) {
    // Silently accept without saving to mislead bots
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your enquiry. Our team will contact you shortly.'
    ]);
    exit;
}

// CSRF check
$csrf_token = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
    // If CSRF is empty or invalid, return error
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Security token expired or invalid. Please refresh the page and try again.'
    ]);
    exit;
}

// Collect and sanitize fields
$full_name = trim(filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
$service = trim(filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$location = trim(filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$budget = trim(filter_input(INPUT_POST, 'budget', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

$errors = [];

// Name validation
if (empty($full_name) || mb_strlen($full_name) < 2) {
    $errors['full_name'] = 'Please enter your full name (at least 2 characters).';
}

// Phone validation (Indian 10-digit mobile number)
// Clean any spaces, hyphens or +91 prefix
$clean_phone = preg_replace('/[\s\-\(\)]/', '', $phone);
if (str_starts_with($clean_phone, '+91')) {
    $clean_phone = substr($clean_phone, 3);
} elseif (str_starts_with($clean_phone, '91') && strlen($clean_phone) === 12) {
    $clean_phone = substr($clean_phone, 2);
} elseif (str_starts_with($clean_phone, '0') && strlen($clean_phone) === 11) {
    $clean_phone = substr($clean_phone, 1);
}

if (!preg_match('/^[6-9]\d{9}$/', $clean_phone)) {
    $errors['phone'] = 'Please enter a valid 10-digit Indian mobile number (e.g. 96203 64786).';
}

// Email validation
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

// Service validation
if (empty($service)) {
    $errors['service'] = 'Please select a service for your project.';
}

// Location validation
if (empty($location) || mb_strlen($location) < 2) {
    $errors['location'] = 'Please specify your property location (e.g., Horamavu, Bangalore).';
}

// Budget validation
if (empty($budget)) {
    $errors['budget'] = 'Please select an estimated budget range.';
}

// Description validation
if (empty($description) || mb_strlen($description) < 5) {
    $errors['description'] = 'Please share a brief note about your requirements (at least 5 characters).';
}

// If errors exist
if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => 'Please correct the highlighted errors in the form.',
        'errors' => $errors
    ]);
    exit;
}

// Build enquiry record
$lead = [
    'id' => 'BNB-' . date('Ymd-His') . '-' . substr(bin2hex(random_bytes(2)), 0, 4),
    'timestamp' => date('c'),
    'full_name' => $full_name,
    'phone' => '+91 ' . $clean_phone,
    'email' => $email,
    'service' => $service,
    'location' => $location,
    'budget' => $budget,
    'description' => $description,
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN'
];

// Ensure secure data directory exists
$data_dir = __DIR__ . '/../data';
if (!is_dir($data_dir)) {
    mkdir($data_dir, 0755, true);
    // Write index.html / .htaccess to prevent directory indexing
    file_put_contents($data_dir . '/.htaccess', "Deny from all\n");
    file_put_contents($data_dir . '/index.html', "");
}

$file_path = $data_dir . '/enquiries.json';
$existing = [];
if (file_exists($file_path)) {
    $json_content = file_get_contents($file_path);
    $decoded = json_decode($json_content, true);
    if (is_array($decoded)) {
        $existing = $decoded;
    }
}

// Prepend newest lead
array_unshift($existing, $lead);

// Save to disk
$saved = file_put_contents($file_path, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), LOCK_EX);

if ($saved === false) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while saving your enquiry. Please contact us directly at ' . SITE_PHONE . '.'
    ]);
    exit;
}

// Generate new CSRF token for subsequent requests
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your project enquiry has been successfully received. A senior engineer from Big Nest Builders will review your details and contact you within 24 hours.',
    'lead_id' => $lead['id'],
    'csrf_token' => $_SESSION['csrf_token']
]);
exit;

