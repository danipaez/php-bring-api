<?php
namespace Markantnorge\Bring\API\Client;


class TrackingClientException extends \Exception
{

    /**
     * The http exception.
     * @return \GuzzleHttp\Exception\RequestException
     */
    public function getRequestException () {
        return $this->getPrevious();
    }
}