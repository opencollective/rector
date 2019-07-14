<?php declare(strict_types=1);

namespace Rector\CodingStyle\Tests\Rector\ClassMethod\NewlineBeforeNewAssignSetRector;

use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class NewlineBeforeNewAssignSetRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([
            __DIR__ . '/Fixture/fixture.php.inc'
        ]);
    }

    protected function getRectorClass(): string
    {
        return \Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class;
    }
}
