<?php
/**
 * StorageException.php
 *
 * @copyright      More in license.md
 * @license        https://www.ipublikuj.eu
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 * @package        iPublikuj:WebSockets!
 * @subpackage     Exceptions
 * @since          1.0.0
 *
 * @date           24.02.17
 */

declare(strict_types = 1);

namespace IPub\WebSockets\Exceptions;

use Exception;

class StorageException extends Exception implements IException
{
}
