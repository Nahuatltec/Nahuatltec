<?php
session_start();
require_once  'vendor/autoload.php'; 

$fb = new Facebook\Facebook([
  'app_id' => '686166942000947',
  'app_secret' => 'e14cad8c152c2a8672de23cb7c93e5fc',
  'default_graph_version' => 'v3.2',
  ]);

  

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
  
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}
try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name', $accessToken);
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  
  $user = $response->getGraphUser();
  var_dump($user);
  echo 'Id: ' . $user['id'];
  echo 'Name: ' . $user['name'];

// Conectar
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());

// El controlador de cliente OAuth 2.0 nos ayuda a administrar los tokens de acceso
$oAuth2Client = $fb->getOAuth2Client();

// Obtenga los metadatos del token de acceso de / debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);

// Validación (estos arrojarán FacebookSDKException cuando fallan)
$tokenMetadata->validateAppId('{app-id}'); // Reemplaza {app-id} con tu ID de aplicación
// Si conoce el ID de usuario al que pertenece este token de acceso, puede validarlo aquí
// $ tokenMetadata-> validateUserId ('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Intercambia un token de acceso de corta duración por uno de larga duración.
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }

  echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;

// El usuario ha iniciado sesión con un token de acceso de larga duración.
// Puede redirigirlos a una página exclusiva para miembros.
// encabezado ('Ubicación: https://example.com/members.php');
?>
