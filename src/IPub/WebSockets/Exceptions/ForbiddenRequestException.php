<?php
/**
 * ForbiddenRequestException.php
 *
 * @copyright      More in license.md
 * @license        https://www.ipublikuj.eu
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 * @package        iPublikuj:WebSockets!
 * @subpackage     Exceptions
 * @since          1.0.0
 *
 * @date           19.02.17
 */

declare(strict_types = 1);

namespace IPub\WebSockets\Exceptions;

use Exception;

class ForbiddenRequestException extends Exception implements IException
{
}
