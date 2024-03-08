1. `touch composer.json`
>> {
    "require": {
        "aws/aws-sdk-php": "^3.0"
    }
}

2. `composer install`

####Install PHPMailer (Optional)
 - You can download PHPMailer from its GitHub repository (https://github.com/PHPMailer/PHPMailer) or install it via Composer. If you choose to use Composer, you can run `composer require phpmailer/phpmailer`.

`touch PHPMailerAutoload.php`

>> require 'vendor/autoload.php'; // Make sure this path is correct if you're using Composer.

>>// Import the PHPMailer classes using the correct namespace.
use PHPMailer\PHPMailer\PHPMailer;

>>// Create a new PHPMailer instance.
$mail = new PHPMailer();
