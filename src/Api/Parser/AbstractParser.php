<?php
namespace CloudBeds\Aws\MskFork\Api\Parser;

use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\Api\StructureShape;
use CloudBeds\Aws\MskFork\CommandInterface;
use CloudBeds\Aws\MskFork\ResultInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
abstract class AbstractParser
{
    /** @var \CloudBeds\Aws\MskFork\Api\Service Representation of the service API*/
    protected $api;

    /** @var callable */
    protected $parser;

    /**
     * @param Service $api Service description.
     */
    public function __construct(Service $api)
    {
        $this->api = $api;
    }

    /**
     * @param CommandInterface  $command  Command that was executed.
     * @param ResponseInterface $response Response that was received.
     *
     * @return ResultInterface
     */
    abstract public function __invoke(
        CommandInterface $command,
        ResponseInterface $response
    );

    abstract public function parseMemberFromStream(
        StreamInterface $stream,
        StructureShape $member,
        $response
    );
}
