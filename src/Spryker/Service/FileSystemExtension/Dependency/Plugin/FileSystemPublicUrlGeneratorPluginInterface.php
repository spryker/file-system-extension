<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\FileSystemExtension\Dependency\Plugin;

use Generated\Shared\Transfer\FileSystemQueryTransfer;

/**
 * - Defines the interface for plugins that generate public URLs for filesystem resources.
 * - Used by FileSystemService to generate public URLs for files stored in configured filesystems.
 */
interface FileSystemPublicUrlGeneratorPluginInterface
{
    /**
     * Specification:
     * - Generates a public URL for the given resource path
     * - Returns the public URL string, throws exception on failure
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemQueryTransfer $fileSystemQueryTransfer
     *
     * @throws \Spryker\Service\FileSystemExtension\Dependency\Exception\FileSystemReadException
     *
     * @return string
     */
    public function getPublicUrl(FileSystemQueryTransfer $fileSystemQueryTransfer): string;
}
