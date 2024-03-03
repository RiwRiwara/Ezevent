<?php

declare(strict_types=1);

namespace App\Services;

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\CreateBlockBlobOptions;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;

class AzureBlobService
{

    private $blobClient;

    public function __construct()
    {
        $connectionString = config('azure.connection_string');
        $this->blobClient = BlobRestProxy::createBlobService($connectionString);
    }

    public function listBlobs(string $containerName, string $prefix = ''): array
    {
        try {
            $listBlobsOptions = new ListBlobsOptions();
            $listBlobsOptions->setPrefix($prefix);
            $result = $this->blobClient->listBlobs($containerName, $listBlobsOptions);
            $blobs = $result->getBlobs();
            $blobUrls = [];
            foreach ($blobs as $blob) {
                $blobUrls[] = config('azure.base_url') . '/' . $containerName . '/' . $blob->getName();
            }
            return $blobUrls;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function uploadBlob(string $containerName, string $blobName, string $content, string $contentType): bool 
    {
        try {
            $options = new CreateBlockBlobOptions();
            $options->setContentType($contentType);
            $this->blobClient->createBlockBlob($containerName, $blobName, $content, $options);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }


    public function deleteBlob(string $containerName, string $blobName): bool 
    {
        try {
            $this->blobClient->deleteBlob($containerName, $blobName);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }


    public function getBlobUrl(string $containerName, string $blobName): string
    {
        return config('azure.base_url') . '/' . $containerName . '/' . $blobName;
    }


    public function getBlobContent(string $containerName, string $blobName): string
    {
        $blob = $this->blobClient->getBlob($containerName, $blobName);
        return stream_get_contents($blob->getContentStream());
    }


    public function getBlobProperties(string $containerName, string $blobName): array
    {
        $blob = $this->blobClient->getBlobProperties($containerName, $blobName);
        return [
            'contentLength' => $blob->getProperties()->getContentLength(),
            'contentType' => $blob->getProperties()->getContentType(),
            'lastModified' => $blob->getProperties()->getLastModified()->format('Y-m-d H:i:s'),
        ];
    }

    
}
