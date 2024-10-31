<?php

namespace Traits;

trait ResponseFormatter
{
    public function formatResponse($status, $message, $data = [])
    {
        return json_encode([
            "status" => $status,
            "message" => $message,
            "data" => $data
        ]);
    }
}
