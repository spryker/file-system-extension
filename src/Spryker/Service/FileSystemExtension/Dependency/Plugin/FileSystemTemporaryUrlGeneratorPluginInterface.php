<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\FileSystemExtension\Dependency\Plugin;

use Generated\Shared\Transfer\FileSystemTemporaryUrlQueryTransfer;

/**
 * - Defines the interface for plugins that generate temporary (signed, expiring) URLs for filesystem resources.
 * - Used by FileSystemService to generate temporary URLs for files stored in configured filesystems.
 */
interface FileSystemTemporaryUrlGeneratorPluginInterface
{
    /**
     * Specification:
     * - Requires `FileSystemTemporaryUrlQueryTransfer.fileSystemName`, `FileSystemTemporaryUrlQueryTransfer.path` and `FileSystemTemporaryUrlQueryTransfer.expiresAt` to be set.
     * - Generates a temporary URL for the given resource path that stops working at `FileSystemTemporaryUrlQueryTransfer.expiresAt`.
     * - Passes `FileSystemTemporaryUrlQueryTransfer.config` to the filesystem adapter.
     * - Returns the temporary URL string, throws exception on failure.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\FileSystemTemporaryUrlQueryTransfer $fileSystemTemporaryUrlQueryTransfer
     *
     * @throws \Spryker\Service\FileSystemExtension\Dependency\Exception\FileSystemReadException
     *
     * @return string
     */
    public function getTemporaryUrl(FileSystemTemporaryUrlQueryTransfer $fileSystemTemporaryUrlQueryTransfer): string;
}
