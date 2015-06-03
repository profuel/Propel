<?php

namespace Unit\SprykerEngine\Zed\Propel\Business\Model;

use SprykerEngine\Zed\Propel\Business\Model\PropelSchemaFinder;

/**
 * @group SprykerEngine
 * @group Zed
 * @group Propel
 * @group Business
 * @group PropelSchemaFinder
 */
class PropelSchemaFinderTest extends AbstractPropelSchemaTest
{

    public function testGetSchemasShouldReturnIterateableFileCollection()
    {
        $schemaFinder = new PropelSchemaFinder(
            [$this->getFixtureDirectory()],
            'file name pattern'
        );

        $this->assertInstanceOf('Symfony\Component\Finder\Finder', $schemaFinder->getSchemaFiles());
    }
}
