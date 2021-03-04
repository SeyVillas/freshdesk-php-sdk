<?php
/**
 * Created by PhpStorm.
 * User: Miro
 * Date: 04/03/2021
 * Time: 11:02 AM
 */

namespace Freshdesk\Resources;

use Freshdesk\Resources\Traits\DeleteTrait;

/**
 * Attachment resource
 *
 * Provides access to ticket resources
 *
 * @package Api\Resources
 */
class Attachment extends AbstractResource
{
    use DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = '/attachments';
}
